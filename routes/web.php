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
