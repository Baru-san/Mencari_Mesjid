<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

use Exception;



class DashboardController extends Controller
{
    protected $jadwalazan;

    public function index(){
        $masjid=DB::table('data_masjids')->get();
        // $masjid1 = DB::table('data_masjids')->select('History')->get();

        // foreach ($masjid1 as $item) {
        //     $words = str_word_count($item->History, 1);
        //     $firstTenWords = array_slice($words, 0, 10);
        //     $excerpt = implode(' ', $firstTenWords);
        //     dd($excerpt);
        // }

        return view('dashboard.index', [
            'title' => 'Dashboard',
            'masjid' => $masjid,
        ]);
    }

    public function landing()
    {
        $masjid=DB::table('data_masjids')->get();
        try {
            $currentDate = Carbon::now()->format('Y/m/d');
            $client = new Client();
            $kabupaten = '0119';
            $url = 'https://api.myquran.com/v1/sholat/jadwal/'.$kabupaten.'/' . $currentDate;
            $response = $client->get($url);
            $data = json_decode($response->getBody()->getContents(), true);
            $jadwal = $data['data']['jadwal'];
        
            // Store the $jadwal in a shared property
            $this->jadwalazan = $jadwal;
        
            $azan = $this->azanTime()['data'];
    
            return view('landing.index', [
                'title' => 'landing',
                'jadwal' => $jadwal,
                'azan' => $azan,
                'masjid'=>$masjid,
            ]);
        } catch(Exception $e) {
            return view('landing.index', [
                'title' => 'landing',
                'jadwal' => null,
                'azan' => null,
                'masjid'=>$masjid,
            ]);
        }

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
}
