<?php

use App\Http\Controllers\HomeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('frontend.index');
// });

 Route::get('/', [HomeController::class,'index'])->name('home.index');
 Route::get('/detailPoli/{id}', [HomeController::class,'detailPoli'])->name('detailPoli');
 Route::get('/detailPoli/jadwal-dokter/{id}', [HomeController::class,'jadwalDokter'])->name('jadwalDokter');
 Route::get('/detailPoli/jadwal-dokter/booking/{id}', [HomeController::class,'bookingDokter'])->name('bookingDokter');
 
 
 Route::post('/cekHari', [HomeController::class,'cekHari'])->name('cekHari');
 
 Route::post('/getSlotJadwal', [HomeController::class,'getSlotJadwal'])->name('getSlotJadwal');
 
 // Route::post('/cekJadwal', [HomeController::class,'cekJadwal'])->name('cekJadwal');
 
 Route::get('/coba_get', [HomeController::class,'coba_get'])->name('coba_get');
 Route::post('/coba', [HomeController::class,'coba'])->name('coba');


// Route::get('/detail-poli', function () {
//     return view('frontend.detail-poli');
// });

Route::get('/appoinment', function () {
    return view('frontend.appoinment');
});

Route::get('/riwayat-appoinment', function () {
    return view('frontend.riwayat-appoinment');
});

Route::get('/login', function () {
    return view('frontend.login');
});
