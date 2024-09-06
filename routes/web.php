<?php

use App\Http\Livewire\Peta;
use App\Http\Livewire\Laporan;
use App\Http\Livewire\KategoriLiveware;
use App\Http\Livewire\HalamanUser;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Livewire\Desa as LivewireDesa;
use App\Http\Livewire\PotensiWisata as LivewirePotensi;
use App\Http\Livewire\Pemiliklahan as LivewirePemiliklahan;
use App\Http\Livewire\WisataComponent as LivewireWisata;
use App\Http\Controllers\ReviewController;
Auth::routes();

// Rute yang tidak memerlukan autentikasi
Route::get('/', HalamanUser::class)->name('user');
Route::get('/reviews/{wisata}', [ReviewController::class, 'index']);
Route::post('/reviews', [ReviewController::class, 'store']);
// Rute yang memerlukan autentikasi
Route::middleware(['auth'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/kategori', KategoriLiveware::class)->name('kategori');
    Route::get('/desa', LivewireDesa::class)->name('desa');
    Route::get('/wisata', LivewireWisata::class)->name('wisata');
    Route::get('/pemilik_lahan', LivewirePemiliklahan::class)->name('pemilik_lahan');
    Route::get('/potensi_sawah', LivewirePotensi::class)->name('potensi_sawah');
    Route::get('/peta', Peta::class)->name('peta');
    Route::get('/laporan', Laporan::class)->name('laporan');
    Route::get('/cetak-laporan', [Laporan::class, 'cetakPdf'])->name('cetak-laporan');

});
