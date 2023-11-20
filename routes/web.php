<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterCon;
use App\Http\Controllers\logincon;
use App\Http\Controllers\dashboardcon;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('index', function () {
    return view('index');
});

Route::get('produk', function () {
    return view('produk');
});

Route::get('profil', function () {
    return view('profil');
});

Route::get('gallery', function () {
    return view('gallery');
});

Route::get('home', function () {
    return view('home');
});

Route::get('kontak', function () {
    return view('kontak');
});


Route::get('/home','App\Http\Controllers\produkcontroller@home');
Route::get('/client','App\Http\Controllers\produkcontroller@utama');

Route::get('/home','App\Http\Controllers\produkcontroller@home');

Route::get('/produk','App\Http\Controllers\produkcontroller@index');

Route::post('/produk/update','App\Http\Controllers\produkcontroller@update');

Route::get('/produk/tambah','App\Http\Controllers\produkcontroller@tambah');

Route::get('/produk/edit/{kode_produk}','App\Http\Controllers\produkconcontroller@edit');

Route::post('/produk/storetambah','App\Http\Controllers\produkcontroller@store');

Route::get('/produk/hapus/{kode_produk}','App\Http\Controllers\produkcontroller@hapus');

Route::get('/', [logincon::class, 'login'])->name('login');
Route::post('actionlogin', [logincon::class, 'actionlogin'])->name('actionlogin');
Route::get('dashboard', [dashboardcon::class, 'index'])->name('dashboard')->
middleware('auth');
Route::get('actionlogout', [logincon::class, 'actionlogout'])->name('actionlogout')->
middleware('auth');

Route::get('register', [RegisterCon::class, 'register'])->name('register');
Route::post('register/action', [RegisterCon::class, 'actionregister'])-> name('actionregister');