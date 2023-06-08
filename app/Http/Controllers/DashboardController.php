<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;


class DashboardController extends Controller
{
    protected $jadwalazan;

    public function index(){
        return view('dashboard.index', [
            'title' => 'Dashboard',
        ]);
    }

    public function landing()
    {
        $currentDate = Carbon::now()->format('Y/m/d');
        $client = new Client();
        $url = 'https://api.myquran.com/v1/sholat/jadwal/0119/' . $currentDate;
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
}
