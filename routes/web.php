<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PerawatanController;
use App\Http\Controllers\SewaController;
use App\Http\Controllers\MerkController;
use App\Http\Controllers\MobilController;
use App\Http\Controllers\Jenis_PerawatanController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LandingController;



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


Route::get('/',[LandingController::class,'index']);


// Form Sewa
Route::get('/sewa', [SewaController::class, 'create']);
Route::post('/', [SewaController::class, 'store']);

// Dashboard
Route::get('/dashboard',[DashboardController::class,'index'])->middleware('auth');

// Detail
Route::get('/detail/{id}', [LandingController::class, 'show']);

// Sewa
Route::get('/dashboard/sewa', [SewaController::class,'index'])->middleware('auth');
Route::get('/dashboard/sewa/show/{id}', [SewaController::class, 'show'])->middleware('auth');
Route::delete('/dashboard/sewa/destroy/{id}', [SewaController::class, 'destroy'])->middleware('auth');

// Merk
Route::get('/dashboard/merk', [MerkController::class,'index'])->middleware('auth');
Route::get('/dashboard/merk/create', [MerkController::class, 'create'])->middleware('auth');
Route::post('/dashboard/merk/store', [MerkController::class, 'store'])->middleware('auth');
Route::get('/dashboard/merk/edit/{id}', [MerkController::class, 'edit'])->middleware('auth');
Route::put('/dashboard/merk/update/{id}', [MerkController::class, 'update'])->middleware('auth');
Route::get('/dashboard/merk/show/{id}', [MerkController::class, 'show'])->middleware('auth');
Route::delete('/dashboard/merk/destroy/{id}', [MerkController::class, 'destroy'])->middleware('auth');

// Mobil
Route::get('/dashboard/mobil', [MobilController::class,'index'])->middleware('auth');
Route::get('/dashboard/mobil/create', [MobilController::class, 'create'])->middleware('auth');
Route::post('/dashboard/mobil/store', [MobilController::class, 'store'])->middleware('auth');
Route::get('/dashboard/mobil/edit/{id}', [MobilController::class, 'edit'])->middleware('auth');
Route::put('/dashboard/mobil/update/{id}', [MobilController::class, 'update'])->middleware('auth');
Route::get('/dashboard/mobil/show/{id}', [MobilController::class, 'show'])->middleware('auth');
Route::delete('/dashboard/mobil/destroy/{id}', [MobilController::class, 'destroy'])->middleware('auth');

// Perawatan
Route::get('/dashboard/perawatan', [PerawatanController::class,'index'])->middleware('auth');
Route::get('/dashboard/perawatan/create', [PerawatanController::class, 'create'])->middleware('auth');
Route::post('/dashboard/perawatan/store', [PerawatanController::class, 'store'])->middleware('auth');
Route::get('/dashboard/perawatan/edit/{id}', [PerawatanController::class, 'edit'])->middleware('auth');
Route::put('/dashboard/perawatan/update/{id}', [PerawatanController::class, 'update'])->middleware('auth');
Route::get('/dashboard/perawatan/show/{id}', [PerawatanController::class, 'show'])->middleware('auth');
Route::delete('/dashboard/perawatan/destroy/{id}', [PerawatanController::class, 'destroy']);

// Jenis Perawatan
Route::get('/dashboard/jenis_perawatan', [Jenis_PerawatanController::class,'index'])->middleware('auth');
Route::get('/dashboard/jenis_perawatan/create', [Jenis_PerawatanController::class, 'create'])->middleware('auth');
Route::post('/dashboard/jenis_perawatan/store', [Jenis_PerawatanController::class, 'store'])->middleware('auth');
Route::get('/dashboard/jenis_perawatan/edit/{id}', [Jenis_PerawatanController::class, 'edit'])->middleware('auth');
Route::put('/dashboard/jenis_perawatan/update/{id}', [Jenis_PerawatanController::class, 'update'])->middleware('auth');
Route::get('/dashboard/jenis_perawatan/show/{id}', [Jenis_PerawatanController::class, 'show'])->middleware('auth');
Route::delete('/dashboard/jenis_perawatan/destroy/{id}', [Jenis_PerawatanController::class, 'destroy'])->middleware('auth');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

