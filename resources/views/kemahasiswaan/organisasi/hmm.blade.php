@extends('layouts.app')

@section('content')
<section class="hero">
    <div class="container-hero text-center">
        <h1 class="display-4 fw-bold">Himpunan Mahasiswa Teknik Mesin</h1>
        <p class="lead">Menciptakan Mahasiswa Teknik Mesin yang Berkualitas dan Berdaya Saing</p>
    </div>
</section>

<!-- main content -->
<div class="bem-section">
    <div class="container">
        <!-- <h2 class="bem-section-title mb-5">Visi dan Misi <br>Badan Eksekutif Mahasiswa</h2> -->
        <div class="row g-4 align-items-center">
            <div class="col-md-6 mb-4 mb-md-0">
                <div class="bem-image-wrapper">
                    <img src="asset\img\HMM.svg" alt="Logo Universitas Abulyatama">
                </div>
            </div>
            <div class="col-md-6">
                <div class="accordion bem-accordion" id="accordionMasukan">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseMasukan1" aria-expanded="false" aria-controls="collapseMasukan1">
                                <i class="fas fa-book-open me-2"></i> Visi Himpunan Mahasiswa Teknik Mesin
                            </button>
                        </h2>
                        <div id="collapseMasukan1" class="accordion-collapse collapse" data-bs-parent="#accordionMasukan">
                            <div class="accordion-body">
                                Menjadikan wadah unggulan dalam penegembangan akademik yang berkualitas, inovatif, dan adaptif,
                                dengan menjunjung solidaritas dan sinergi antara mahasiswa Teknik Mesin, Dosen serta Industri
                                untuk menciptakan lulusan yang kompeten dan siap menghadapai tantangan global.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseMasukan2" aria-expanded="false" aria-controls="collapseMasukan2">
                                <i class="fas fa-user-graduate me-2"></i> Misi Himpunan Mahasiswa Teknik Mesin
                            </button>
                        </h2>
                        <div id="collapseMasukan2" class="accordion-collapse collapse" data-bs-parent="#accordionMasukan">
                            <div class="accordion-body">
                                <li>
                                    Memfasilitasi pengembangan soft skills Mahasiswa Teknik Mesin seperti kemampuan kepemimpinan
                                    , dan kerja tim, yang mendukung kesuksesan akademik dan profesional.
                                </li>
                                <li>
                                    Mendorong Mahasiswa untuk aktif dalam penelitian dan pengembangan teknologi dalam menyelenggarakan
                                    kegiatan proyek, diskusi, dan pelatihan.
                                </li>
                                <li>
                                    Membangun kemitraaan yang lebih erat dengan dosen dan alumni untuk menciptakan peluang belajar yang
                                    lebih aplikatif.
                                </li>
                                <li>
                                    Mengoptimalkan penggunaan teknologi dan sumber daya untuk mempermudah akses informasi akademik dan 
                                    kegiatan belajar.
                                </li>
                                <li>
                                    Menyediakan lingkungan yang solid dan menghargai ide dan keanekaragaman anggota.
                                </li>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>  

<!-- Struktur Organisasi Section -->

<section class="struktur-section">
    <section class="si-vision-mission-section">
        <h2 class="si-visimisi text-center mt-2" style="color: #f9f3d9">Struktur Organisasi HMM</h2>
    </section>
        <div class="container-himpunan text-center">
            <!-- <h6 class="bem-section-title">Struktur Organisasi Himasi</h6> -->
            <!-- Gambar Struktur Organisasi -->
            <img src="asset\img\Struktur HMM.png" alt="Struktur Organisasi Fakultas Teknik" class="org-maha-image">
            <!-- Ganti URL gambar di atas dengan path gambar struktur organisasi Anda -->
        </div>
</section>

<!-- Carousel Himpunan News -->

<section class="si-vision-mission-section">
    <h2 class="si-visimisi text-center mt-2" style="color: #f9f3d9">Kegiatan HMM</h2>
</section>

<!-- berita baru -->
<div class="container-fluid-news mt-1">
        <div class="col-md-12">
            <div id="news-slider" class="owl-carousel">
                @foreach ( $KegiatanHmms as $KegiatanHmm )
                <div class="post-slide" onclick="openPopup(this)">
                    <div class="post-img">
                        <img src="{{ asset('storage/' . $KegiatanHmm->image_news) }}" alt="">
                        <a href="#" class="over-layer"><i class="fa fa-link"></i></a>
                    </div>
                    <div class="post-content">
                        <h3 class="post-title">
                            <span>{{ $KegiatanHmm->title }}</span>
                            </h3>
                        <p class="post-description" data-full-description="{{ $KegiatanHmm->description }}">
                        {{ Str::limit($KegiatanHmm->description, 100) }}      
                        </p>
                        <span class="post-date"><i class="fa fa-clock-o"></i>{{ $KegiatanHmm->date }}</span>
                        <a href="#" class="read-more"></a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div> 

<!-- Pop-up Modal Berita -->
<div id="news-popup" class="popup" style="display:none;">
    <div class="popup-content">
        <span class="close" onclick="closePopup()">&times;</span>
        <img id="popup-image" src="" alt="" style="width: 100%; border-radius: 10px; margin-bottom: 10px;">
        <h3 id="popup-title"></h3>
        <p id="popup-description"></p>
        <span id="popup-date"><i class="fa fa-clock-o"></i></span>
    </div>
</div>
@endsection

