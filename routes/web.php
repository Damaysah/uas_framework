<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\ProfileController;

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

// routes/web.php


// Route::prefix('dosen')->group(function () {
//     // Route untuk halaman profil dosen
//     Route::get('/profil', function () {
//         return view('v_profil', ['message' => 'Halaman profil dosen']);
//     });

//     // Route untuk halaman data
//     Route::get('/data', function () {
//         return view('v_data', ['message' => 'Halaman data dosen']);
//     });

//     // Route untuk halaman data pengampu
//     Route::get('/data_pengampu', function () {
//         return view('v_ampu', ['message' => 'Halaman Data Mata Kuliah Yang Diampu']);
// });
// });
 Route::get('/', [ProfileController::class, 'index']);

Route::prefix('dosen')->group(function () {     
    Route::get('/profil', function () {
        return view('v_profil'); 
    })->name('profil');
    Route::get('/data_pengampu', function () {
        return view('v_ampu'); 
    })->name('pengampu');

});
