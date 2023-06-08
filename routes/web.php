<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;




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

Route::get('/', [DashboardController::class, 'landing'])->middleware('guest');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'login']);
Route::get('logout', [LoginController::class, 'destroy'])->middleware('auth');



Route::get('/signin', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/signin', [RegisterController::class, 'store'])->middleware('guest');

Route::get('dashboard', [DashboardController::class, 'index'])->middleware('auth');

Route::get('/sejarah', function () {
    return view('blog.index', [
        'title' => 'ambatuakm',
    ]);
});

Route::get('/listMasjid', function () {
    return view('blog.indexList', [
        'title' => 'ambatuakm',
    ]);
});

Route::get('/profile', function() {
    return view('profileMasjid.index', [
        'title'=>'profile',
    ]);
});

Route::get('/masjidForm', function() {
    return view('form.namaMasjidForm', [
        'title'=>'masjidForm',
    ]);
});

Route::get('/kajianForm', function() {
    return view('form.kajianForm', [
        'title'=>'kajianForm',
    ]);
});

Route::get('/ziswahForm', function() {
    return view('form.ziswahForm', [
        'title'=>'ziswahForm',
    ]);
});

Route::get('/salatForm', function() {
    return view('form.salatForm', [
        'title'=>'salatForm',
    ]);
});

Route::get('/kegiatanForm', function() {
    return view('form.kegiatanForm', [
        'title'=>'kegiatanForm',
    ]);
});