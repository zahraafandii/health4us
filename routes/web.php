<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\BerandaController;
use App\Http\Controllers\ChallengeController;
use App\Http\Controllers\UmkmController;

Route::get('/', [BerandaController::class, 'home'])->name('home');

Route::get('/daftar', function () {
    return view('daftar');
})->name('daftar');

Route::get('/masuk', function () {
    return view('masuk');
})->name('masuk');

Route::get('/masuk', function () {
    return view('auth.masuk'); 
})->name('masuk');

Route::get('/daftar', function () {
    return view('auth.daftar'); 
})->name('daftar');

Route::get('/password/forgot', function () {
    return view('auth.lupa-sandi'); 
})->name('lupa-sandi');

Route::get('/password/create', function () {
    return view('auth.buat-sandi'); 
})->name('buat-sandi');

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');

Route::get('/profil', function () {
    return view('lengkapi-profil'); 
})->name('lengkapi-profil');

Route::get('/profil/lengkapi-profil', function () {
    return redirect()->route('profil')->with('success', 'Profil berhasil diperbarui!');
})->name('profil.update');

Route::get('/jelajahi', function() {
    return view('jelajahi');
});

Route::get('/aktivitas', function () {
    return view('aktivitas'); 
})->name('aktivitas.detail');

Route::get('/challenge/{id}', [BerandaController::class, 'show'])->name('challenge.detail');
Route::get('/challenges', [BerandaController::class, 'index'])->name('challenge.index');

Route::get('/tantangan', [ChallengeController::class, 'index'])->name('tantangan.index');
Route::get('/tantangan/{slug}', [ChallengeController::class, 'show'])->name('tantangan.show');
Route::post('/tantangan/{slug}/daftar', [ChallengeController::class, 'register'])->name('tantangan.register');

Route::get('/partner-umkm', [UmkmController::class, 'index']);
Route::get('/partner-umkm/{slug}', [UmkmController::class, 'show']);
Route::post('/partner-umkm/{slug}/tukar', [UmkmController::class, 'tukar']);