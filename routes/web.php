<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\UmkmController; // <-- Ini tambahan untuk UMKM
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/profil', function () {
    return view('profil');
});

Route::get('/pemerintahan', function () {
    return view('pemerintahan');
});

Route::get('/', function () {
    $beritas = \App\Models\Berita::latest()->take(3)->get(); 
    return view('welcome', compact('beritas'));
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// INI ADALAH BLOK MIDDLEWARE
// Semua rute di dalam sini hanya bisa diakses jika admin sudah login
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('berita', BeritaController::class);
    Route::resource('umkm', UmkmController::class);
});

require __DIR__.'/auth.php';