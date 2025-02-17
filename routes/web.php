<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

//route profile 
Route::get('/Sejarah', function () {
    return view('profile.sejarah');
})->name('sejarah');

Route::get('/Visi-Misi', function () {
    return view('profile.visiMisi');
})->name('visiMisi');

Route::get('/Struktur-Organisasi', function () {
    return view('profile.strukturOrganisasi');
})->name('strukturOrganisasi');
