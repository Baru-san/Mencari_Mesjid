<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index(){
        return view('dashboard.index', [
            'title' => 'Dashboard',
        ]);
    }

    public function landing () {
        $currentDate = Carbon::now()->format('Y/m/d');
        $client = new Client();
        $url = 'https://api.myquran.com/v1/sholat/jadwal/0119/' . $currentDate;
        $response = $client->get($url);
        $data = json_decode($response->getBody()->getContents(), true);
        $jadwal = $data['data']['jadwal'];
        
            return view('landing.index', [
            'title' => '',
            'jadwal' => $jadwal
        ]);
    }
}
