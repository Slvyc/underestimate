<?php

use App\Http\Controllers\DokumenAmiController;
use App\Http\Controllers\DokumenMonevController;
use App\Http\Controllers\KegiatanAkademikController;
use App\Http\Controllers\PenghargaanDosenController;
use App\Http\Controllers\PenghargaanMahasiswaController;
use App\Http\Controllers\PengurusanSuratController;
use App\Http\Controllers\SopController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KurikulumSiController;
use App\Http\Controllers\KurikulumMesinController;
use App\Http\Controllers\KurikulumSipilController;
use App\Http\Controllers\KerjasamaController;
use App\Http\Controllers\SopPanduanController;
use App\Http\Controllers\SurveyController;
use App\Http\Controllers\KesiapanTeknologiController                                                                                                                                                      ;
use App\Models\DokumenAmi;
use App\Models\KesiapanTeknologi;

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
//Roadmap
Route::get('/Roadmap', function () {
    return view('profile.roadmap');
})->name('roadmap');
//kalender akademik
Route::get('/Kalender-Akademik', function () {
    $KalenderAkademiks = App\Models\KalenderAkademik::all();
    $RosterAkademiks = App\Models\RosterAkademik::all();
    return view('profile.kalenderAkademik', compact('KalenderAkademiks', 'RosterAkademiks'));
})->name('kalenderAkademik');


//route program studi sistem informasi
Route::get('/Sistem-Informasi/Visi-Misi', function () {
    return view('program-studi.sistem-informasi.visiMisiSi');
})->name('visiMisiSi');
//dosen si
Route::get('/Sistem-Informasi/Dosen-Sistem-Informasi', function () {
    $DosenSis = App\Models\DosenSi::all();
    return view('program-studi.sistem-informasi.dosenSi', compact('DosenSis'));
})->name('dosenSi');
//kurikulum si
Route::get('/Sistem-Informasi/Kurikulum-Sistem-Informasi', [KurikulumSiController::class, 'index'])
    ->name('kurikulumSi');

// Teknik sipil
Route::get('/Teknik-Sipil/Visi-Misi', function () {
    return view('program-studi.teknik-sipil.visiMisiSipil');
})->name('visiMisiSipil');
//dosen sipil
Route::get('/Teknik-Sipil/Dosen-Teknik-Sipil', function () {
    $DosenSipils = App\Models\DosenSipil::all();
    return view('program-studi.teknik-sipil.dosenSipil', compact('DosenSipils'));
})->name('dosenSipil');
//kurikulum sipil
Route::get('/Teknik-Sipil/Kurikulum-Teknik-Sipil', [KurikulumSipilController::class, 'index'])
    ->name('kurikulumSipil');
//teknik mesin
Route::get('/Teknik-Mesin/Visi-Misi', function () {
    return view('program-studi.teknik-mesin.visiMisiMesin');
})->name('visiMisiMesin');
//dosen mesin
Route::get('/Teknik-Mesin/Dosen-Teknik-Mesin', function () {
    $DosenMesins = App\Models\DosenMesin::all();
    return view('program-studi.teknik-mesin.dosenMesin', compact('DosenMesins'));
})->name('dosenMesin');
//kurikulum mesin
Route::get('/Teknik-Mesin/Kurikulum-Teknik-Mesin', [KurikulumMesinController::class, 'index'])
    ->name('kurikulumMesin');

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
//layanan komunikasi
Route::get('/Layanan-Komunikasi', function () {
    return view('kemahasiswaan.layanan');
})->name('layanan');
//layanan surat aktif permohonan kuliah
Route::get('/Layanan-Surat-Aktif', function () {
    return view('kemahasiswaan.layananSuratAktifKuliah');
})->name('layananSuratAktifKuliah');
//bem
Route::get('/Bem', function () {
    $KegiatanBems = App\Models\KegiatanBem::all();
    return view('kemahasiswaan.organisasi.bem', compact('KegiatanBems'));
})->name('bem');
//himasi
Route::get('/Himasi', function () {
    $KegiatanHimasis = App\Models\KegiatanHimasi::all();
    return view('kemahasiswaan.organisasi.himasi', compact('KegiatanHimasis'));
})->name('himasi');
//himatesya
Route::get('/Himatesya', function () {
    $KegiatanHimatesyas = App\Models\KegiatanHimatesya::all();
    return view('kemahasiswaan.organisasi.himatesya', compact('KegiatanHimatesyas'));
})->name('himatesya');
//hmm
Route::get('/HMM', function () {
    $KegiatanHmms = App\Models\KegiatanHmm::all();
    return view('kemahasiswaan.organisasi.hmm', compact('KegiatanHmms'));
})->name('hmm');

//route penghargaan
//dosen
Route::get('/Penghargaan-Dosen', [PenghargaanDosenController::class, 'index'])->name('penghargaanDosen');
//mahasiswa
Route::get('/Penghargaan-Mahasiswa', [PenghargaanMahasiswaController::class, 'index'])->name('penghargaanMahasiswa');
//route kerjasama
Route::get('/kerjasama', [KerjasamaController::class, 'index'])->name('kerjasama');

//route download
//kegiatan akademik
Route::get('/Kegiatan-Akademik', [KegiatanAkademikController::class, 'index'])->name('kegiatanAkademik');
//e-magazine
Route::get('/E-Magazine', function () {
    return view('download.emagazine');
})->name('emagazine');
//pengurusan surat
Route::get('/Pengurusan-Surat', [PengurusanSuratController::class, 'index'])->name('pengurusanSurat');
//Dokumen
Route::get('/SOP/Panduan', [SopController::class, 'index'])->name('sop');

//route tracer study
Route::get('/Tracer-Study', function () {
    return view('tracerStudy');
})->name('tracerStudy');

//route penjaminan mutu
Route::get('/Survey', [SurveyController::class, 'index'])->name('survey');
Route::get('/Dokumen-Ami', [DokumenAmiController::class, 'index'])->name('dokumenAmi');
Route::get('/Dokumen-Monevs', [DokumenMonevController::class, 'index'])->name('dokumenMonev');
Route::get('/Sop', [SopPanduanController::class, 'index'])->name('sopPanduan');
Route::get('/Tingkat-kesiapan-teknologi', [KesiapanTeknologiController::class, 'index'])->name('kesiapanTeknologi');
// Route::get('/Tingkat-Kesiapan-Teknologi', function () {
//     return view('penjaminan-mutu.kesiapanTeknologi');
// })->name('kesiapanTeknologi');

