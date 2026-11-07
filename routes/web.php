<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\UmkmController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/pemerintahan', function () {
    return view('pemerintahan');
});

// 👇 Tambahan route untuk halaman Potensi
Route::get('/potensi', function () {
    return view('potensi');
})->name('potensi');

// 👇 Tambahan route untuk halaman Galeri
Route::get('/galeri', function () {
    return view('galeri');
})->name('galeri');

// 👇 Tambahan route untuk halaman Kontak
Route::get('/kontak', function () {
    return view('kontak');
})->name('kontak');

// 👇 Tambahan route untuk Pengiriman Pesan Formulir
Route::post('/kontak', function (\Illuminate\Http\Request $request) {
    $request->validate([
        'nama' => 'required|string|max:100',
        'kontak' => 'required|string|max:50',
        'pesan' => 'required|string',
    ]);

    // Jika ingin simpan ke database:
    // \App\Models\Pesan::create($request->all());

    return back()->with('success', 'Terima kasih, pesan atau aspirasi Anda telah kami terima dan akan segera ditindaklanjuti oleh perangkat desa.');
})->name('kontak.kirim');

Route::get('/', function () {
    $beritas = \App\Models\Berita::latest()->take(3)->get(); 
    return view('welcome', compact('beritas'));
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Rute berita dipindah ke sini (bebas diakses publik tanpa login)
Route::resource('berita', BeritaController::class);

// Blok ini HANYA untuk fitur yang butuh login admin
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('umkm', UmkmController::class);
});

require __DIR__.'/auth.php';