<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProgramController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about'); // Ganti 'about' dengan nama view Anda
});

Route::get('/program', function () {
    return view('program'); // Ganti 'program' dengan nama view Anda
});

Route::get('/donasi', function () {
    return view('donasi'); // Ganti 'donasi' dengan nama view Anda
});

Route::get('/kontak', function () {
    return view('kontak'); // Ganti 'kontak' dengan nama view Anda
});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard'); // Pastikan Anda memiliki controller ini
Route::get('/program', [ProgramController::class, 'index']);
