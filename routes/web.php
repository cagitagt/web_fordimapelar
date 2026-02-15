<?php

use App\Http\Controllers\ExternalSettingController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\PhotoboothController;
use App\Http\Controllers\AboutCabinetController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProgramsController;
use App\Http\Controllers\ArtworkController;
use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/trial', function () {
    return view('home');
});

Route::get('/news/{slug}', [NewsController::class, 'show'])->name('news.show');

Route::get('/', function () {
    return view('user.index');
})->name('index');

Route::get('/tentang', [AboutCabinetController::class, 'index'])->name('tentang');

Route::get('/berita', [NewsController::class, 'index'])->name('berita');

Route::get('/karya', [ArtworkController::class, 'index'])->name('karya');

Route::get('/karya/{slug}', [ArtworkController::class, 'show'])->name('artwork.show');

Route::get('/karyahh', function () {
    return view('user.karyahhh');
})->name('karyahh');

Route::get('/program-kerja', [ProgramsController::class, 'index' ])->name('program-kerja');

Route::get('/layanan', [ExternalSettingController::class, 'index'])->name('layanan');


Route::get('/galeri', [GalleryController::class, 'index'])->name('galeri');

Route::get('/photobooth', [PhotoboothController::class, 'index'])->name('photobooth');