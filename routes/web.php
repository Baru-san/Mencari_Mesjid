<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;


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
    return view('landing.index', [
        'title' => ''
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