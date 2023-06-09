<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\DB;


class MasjidController extends Controller

{
    protected $jadwalazan;

    public function listMasjid(){
        $masjid=DB::table('data_masjids')->get();


        return view ('blog.indexList',[
            'title' => 'Daftar masjid',
            'masjid' => $masjid,
        ]);
    }
    public function sejarah($id){
        $masjid=DB::table('data_masjids')->where('id', $id)->first();

        return view ('blog.index',[
            'title' => 'Sejarah'.$id,
            'masjid' => $masjid,
            'id' => $id
        ]);
    }
    public function kajian($id){
        $kajian=DB::table('kajian_masjids')->where('masjid_id', $id)->get();
        $masjid=DB::table('data_masjids')->where('id', $id)->first();
        return view ('blog.index',[
            'title' => 'Kajian'.$id,
            'masjid' => $masjid,
            'kajian' => $kajian,
            'id' => $id

        ]);
    }
    public function kegiatan($id){
        $masjid=DB::table('data_masjids')->where('id', $id)->first();
        $kegiatan=DB::table('kegiatan_masjids')->where('masjid_id', $id)->get();


        return view ('blog.index',[
            'title' => 'Kegiatan'.$id,
            'masjid' => $masjid,
            'kegiatan'=>$kegiatan,
            'id' => $id

        ]);
    }
    public function shalat($id){
        $masjid=DB::table('data_masjids')->where('id', $id)->first();
        
        if ($masjid->provinsi == 'Al Madinah') {
            $currentDate = Carbon::now()->format('d M Y');
            $currentMonth = Carbon::now()->format('Y/m');
                $client = new Client();
                $url = 'https://api.aladhan.com/v1/calendar/'. $currentMonth.'?latitude=24.4394&longitude=-39.6172&method=4';
                $bulan = $url;
                $response = $client->get($url);
                $data = json_decode($response->getBody()->getContents(), true);

                $jadwalPrayers = [];

                foreach ($data['data'] as $item) {
                    $date = $item['date']['readable'];
                    $timings = $item['timings'];
                    $prayers = [
                        'tanggal' => $date,
                        'subuh' => $timings['Fajr'],
                        'dzuhur' => $timings['Dhuhr'],
                        'ashar' => $timings['Asr'],
                        'maghrib' => $timings['Maghrib'],
                        'isya' => $timings['Isha'],
                    ];
                
                    $jadwalPrayers[] = $prayers;
                }

                $currentPrayers=[];
                foreach ($jadwalPrayers as $prayers) {
                    if ($prayers['tanggal'] === $currentDate) {
                        // The current date is found
                        $currentPrayers = $prayers;
                        break;
                    }
                }

                $shalatfridays = array_filter($jadwalPrayers, function ($prayers) {
                    $date = $prayers['tanggal'];
                    $carbonDate = Carbon::createFromFormat('d M Y', $date);
                    return $carbonDate->dayOfWeek === Carbon::FRIDAY;
                });


                foreach ($jadwalPrayers as &$prayers) {
                    foreach ($prayers as $key => &$value) {
                        if ($key !== "tanggal") {
                            $matches = [];
                            preg_match('/(\d{2}:\d{2})/', $value, $matches); // Extract the time portion
                            if (isset($matches[1])) {
                                $time = $matches[1];
                                $carbonTime = Carbon::createFromFormat('H:i', $time);
                                $carbonTime->subMinutes(10);
                                $modifiedTime = $carbonTime->format('H:i');
                                $value = str_replace($time, $modifiedTime, $value); // Update the time value
                            }
                        }
                    }
                }
                
                $azanfridays = array_filter($jadwalPrayers, function ($prayers) {
                    $date = $prayers['tanggal'];
                    $carbonDate = Carbon::createFromFormat('d M Y', $date);
                    return $carbonDate->dayOfWeek === Carbon::FRIDAY;
                });

                foreach ($shalatfridays as $index => &$shalatFriday) {
                    $azanFriday = $azanfridays[$index];
                    $shalatFriday['azanjumat'] = $azanFriday['dzuhur'];

                }
                
                $currentAzan=[];
                foreach ($jadwalPrayers as $prayers) {
                    if ($prayers['tanggal'] === $currentDate) {
                        // The current date is found
                        $currentAzan = $prayers;
                        break;
                    }
                }
                
                // Store the $jadwal in a shared property
            
            return view ('blog.index',[
                'title' => 'Shalat'.$id,
                'jadwal' => $currentPrayers,
                'azan' => $currentAzan,
                'masjid' => $masjid,
                'azanJumat' => $shalatfridays,
                'id' => $id
    
            ]);
        } else {
        
            $currentDate = Carbon::now()->format('Y/m/d');
            $currentMonth = Carbon::now()->format('Y/m');
                $client = new Client();
                $clientJumat = new Client();
                $kabupaten = $masjid->kabupaten;
                $url = 'https://api.myquran.com/v1/sholat/jadwal/'.$kabupaten.'/' . $currentDate;
                $bulan = 'https://api.myquran.com/v1/sholat/jadwal/'.$kabupaten.'/' . $currentMonth;
    
                $responseJumat = $clientJumat->get($bulan); 
                $response = $client->get($url);
                $data = json_decode($response->getBody()->getContents(), true);
                $dataJumat = json_decode($responseJumat->getBody()->getContents(), true);
                $jadwalJumat = $dataJumat['data']['jadwal'];
                $jadwal = $data['data']['jadwal'];
    
                
                $dataJumat = $dataJumat['data']['jadwal']; // Get the "jadwal" array
    
                $jumatData = array_filter($dataJumat, function($item) {
                    return (isset($item['tanggal']) && strpos($item['tanggal'], 'Jumat') !== false);
                });
                
                $jumatData = array_values($jumatData); // Reset the array keys
                
                if (empty($jumatData)) {
                    // Handle the case when no data for "Jumat" is found
                    // For example, you can set a default value or display an error message
                    $jumatData = null; // or $jumatData = [];
                }
                
                $azanJumat = $jumatData;
                
                if (!empty($azanJumat)) {
                    foreach ($azanJumat as &$data) {
                        if (isset($data['dzuhur'])) {
                            $dzuhurTime = strtotime($data['dzuhur']);
                            $newdzuhurTime = date('H:i', $dzuhurTime - (10 * 60));
                            $data['azanjumat'] = $newdzuhurTime;
                        }
                    }
                    unset($data); // unset the reference variable
                }
    
                // Store the $jadwal in a shared property
                $this->jadwalazan = $jadwal;
            
                $azan = $this->azanTime()['data'];

                $shalat_khusus=DB::table('shalat_khususes')->where('masjid_id', $id)->get();

            return view ('blog.index',[
                'title' => 'Shalat'.$id,
                'jadwal' => $jadwal,
                'azan' => $azan,
                'masjid' => $masjid,
                'azanJumat' => $azanJumat,
                'id' => $id,
                'shalat_khusus' => $shalat_khusus,
    
            ]);      
          }

    }
    public function ziswaf($id){
        $masjid=DB::table('data_masjids')->first();
        return view ('blog.index',[
            'title' => 'Ziswaf'.$id,
            'masjid' => $masjid,
            'id' => $id

        ]);
    }

    public function azanTime()
    {
        // Access the $jadwal from the shared property
        $jadwal = $this->jadwalazan;
        // Use the $jadwal data as needed
    
        foreach ($jadwal as $key => $value) {
            if ($key !== 'tanggal' && $key !== 'date') {
                $time = Carbon::createFromFormat('H:i', $value);
                $time->subMinutes(10);
                $jadwal[$key] = $time->format('H:i');
            }
        }

        
        $data = $jadwal;
        return ([
            'data' => $data
        ]);
    }

    // function sortirJumat($data) {
    //     $fridays = array_filter($data, function ($item) {
    //         return strpos($item['tanggal'], 'Jumat') !== false;
    //     });
        
    //     dd($fridays);
    //     return $fridays;
    // }
    
}
