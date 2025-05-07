<?php

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

use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'login'])->name('login');



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Route untuk login dan dashboard
Route::get('/login', [PageController::class, 'login'])->name('login');
Route::post('/login', [PageController::class, 'processLogin'])->name('process.login');
Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');

// Route untuk pengelolaan
Route::get('/pengelolaan', [PageController::class, 'pengelolaan'])->name('pengelolaan');
Route::post('/pengelolaan/kegiatan', [PageController::class, 'storeKegiatan'])->name('kegiatan.store');
Route::post('/tambah-kegiatan', [PageController::class, 'storeKegiatan'])->name('storeKegiatan');
// Route untuk profile
Route::get('/profile', [PageController::class, 'profile'])->name('profile');
