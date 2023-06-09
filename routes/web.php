<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MasjidController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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
// Route::get('/listMasjid', [DashboardController::class, ''

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/listMasjid', [MasjidController::class, 'listMasjid']);
// Route::get('/profilMasjid/sejarah', [MasjidController::class, 'sejarah']);
Route::get('/profilMasjid/kajian/{id}', [MasjidController::class, 'kajian']);
Route::get('/profilMasjid/kegiatan/{id}', [MasjidController::class, 'kegiatan']);
Route::get('/profilMasjid/shalat/{id}', [MasjidController::class, 'shalat']);
Route::get('/profilMasjid/ziswaf/{id}', [MasjidController::class, 'ziswaf']);
Route::get('/profilMasjid/sejarah/{id}', [MasjidController::class, 'sejarah']);


Route::get('/profileMasjid
', function(){
    return view('profileMasjid.index',[
        'title' => 'Search'
Route::get('/search', function(){
    return view('blog.search',[
        'title' => 'Search',
    ]);
});

Route::get('/profileMasjid', function() {
    return view('profileMasjid.index', [
        'title'=>'profileMasjid',
    ]);
});

require __DIR__.'/auth.php';

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

Route::get('/profile', function() {
    return view('userProfile.profile', [
        'title'=>'profile',
    ]);
});