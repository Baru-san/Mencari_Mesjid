<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use GuzzleHttp\Client;
use Carbon\Carbon;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
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
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'login']);
Route::get('logout', [LoginController::class, 'destroy']);



Route::get('/signin', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/signin', [RegisterController::class, 'store']);

Route::get('dashboard', function(){
    return view('dashboard.index', [
        'title' => 'Dashboard',
        'sourcemap' => mix('public/build/assets/app-0d91dc04.js'),
    ]);
});