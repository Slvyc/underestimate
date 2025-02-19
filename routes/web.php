<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    $beritas = App\Models\Berita::all();
    $pengumumans = App\Models\Pengumuman::all();
    $agendas = App\Models\Agenda::all();
    return view('home', compact('beritas','pengumumans','agendas'));
})->name('home');


//route profile 
//sejarah
Route::get('/Sejarah', function () {
    return view('profile.sejarah');
})->name('sejarah');
//visi misi
Route::get('/Visi-Misi', function () {
    return view('profile.visiMisi');
})->name('visiMisi');
//struktur organisasi
Route::get('/Struktur-Organisasi', function () {
    return view('profile.strukturOrganisasi');
})->name('strukturOrganisasi');
//kalender akademik
Route::get('/Kalender-Akademik', function () {
    $KalenderAkademiks = App\Models\KalenderAkademik::all();
    return view('profile.kalenderAkademik', compact('KalenderAkademiks'));
})->name('kalenderAkademik');


//route program studi sistem informasi
Route::get('/Sistem-Informasi/Visi-Misi', function () {
    return view('program-studi.sistem-informasi.visiMisiSi');
})->name('visiMisiSi');
Route::get('/Sistem-Informasi/Dosen-Sistem-Informasi', function () {
    return view('program-studi.sistem-informasi.dosenSi');
})->name('dosenSi');
// Teknik sipil
Route::get('/Teknik-Sipil/Visi-Misi', function () {
    return view('program-studi.teknik-sipil.visiMisiSipil');
})->name('visiMisiSipil');
Route::get('/Teknik-Sipil/Dosen-Teknik-Sipil', function () {
    return view('program-studi.teknik-sipil.dosenSipil');
})->name('dosenSipil');
//teknik mesin
Route::get('/Teknik-Mesin/Visi-Misi', function () {
    return view('program-studi.teknik-mesin.visiMisiMesin');
})->name('visiMisiMesin');
Route::get('/Teknik-Mesin/Dosen-Teknik-Mesin', function () {
    return view('program-studi.teknik-mesin.dosenMesin');
})->name('dosenMesin');

//route pendidikan
//laboratorium
Route::get('/Laboratorium', function () {
    return view('pendidikan.laboratorium');
})->name('laboratorium');
//beasiswa
Route::get('/Beasiswa', function () {
    return view('pendidikan.beasiswa');
})->name('beasiswa');
//perpustakaan
Route::get('/Perpustakaan', function () {
    return view('pendidikan.perpustakaan');
})->name('perpustakaan');
//jurnal
Route::get('/Jurnal', function () {
    return view('pendidikan.jurnal');
})->name('jurnal');

//route kemahasiswaan 
Route::get('/Layanan-Komunikasi', function () {
    return view('kemahasiswaan.layanan');
})->name('layanan');
//bem
Route::get('/Bem', function () {
    $KegiatanBems = App\Models\KegiatanBem::all();
    return view('kemahasiswaan.organisasi.bem', compact('KegiatanBems'));
})->name('bem');
//himasi
Route::get('/Himasi', function () {
    return view('kemahasiswaan.organisasi.himasi');
})->name('himasi');
//himatesya
Route::get('/Himatesya', function () {
    return view('kemahasiswaan.organisasi.himatesya');
})->name('himatesya');
//hmm
Route::get('/HMM', function () {
    return view('kemahasiswaan.organisasi.hmm');
})->name('hmm');

//route penghargaan
//dosen
Route::get('/Penghargaan-Dosen', function () {
    return view('penghargaan.penghargaanDosen');
})->name('penghargaanDosen');
//mahasiswa
Route::get('/Penghargaan-Mahasiswa', function () {
    return view('penghargaan.penghargaanMahasiswa');
})->name('penghargaanMahasiswa');
//kerjasama
Route::get('/Kerjasama', function () {
    return view('kerjasama');
})->name('kerjasama');

//route download
//kegiatan akademik
Route::get('/Kegiatan-Akademik', function () {
    return view('download.kegiatanAkademik');
})->name('kegiatanAkademik');
//e-magazine
Route::get('/E-Magazine', function () {
    return view('download.emagazine');
})->name('emagazine');
//pengurusan surat
Route::get('/Pengurusan-Surat', function () {
    return view('download.pengurusanSurat');
})->name('pengurusanSurat');
//SOP
Route::get('/SOP/Panduan', function () {
    return view('download.sop');
})->name('sop');

//route tracer study
Route::get('/Tracer-Study', function () {
    return view('tracerStudy');
})->name('tracerStudy');
