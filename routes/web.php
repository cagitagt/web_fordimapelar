<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/trial', function () {
    return view('home');
});

Route::get('/', function () {
    return view('user.index');
})->name('index');

Route::get('/tentang', function () {
    return view('user.tentang');
})->name('tentang');
Route::get('/berita', function () {
    return view('user.berita');
})->name('berita');

Route::get('/karya', function () {
    return view('user.karya');
})->name('karya');
Route::get('/program-kerja', function () {
    return view('user.program-kerja');
})->name('program-kerja');

Route::get('/layanan', function () {
    return view('user.layanan');
})->name('layanan');