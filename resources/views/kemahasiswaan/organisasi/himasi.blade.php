@extends ('layouts.app')

@section('content')
<section class="hero">
    <div class="container-hero text-center">
        <h1 class="display-4 fw-bold">Himpunan Mahasiswa Sistem Informasi</h1>
        <p class="lead">Membangun Masa Depan dengan Teknologi</p>
    </div>
</section>

<!-- main content -->
<div class="bem-section">
    <div class="container">
        <!-- <h2 class="bem-section-title mb-5">Visi dan Misi <br>Badan Eksekutif Mahasiswa</h2> -->
        <div class="row g-4 align-items-center">
            <div class="col-md-6 mb-4 mb-md-0">
                <div class="bem-image-wrapper">
                    <img src="\asset\img\HIMASI.svg" alt="Logo Universitas Abulyatama">
                </div>
            </div>
            <div class="col-md-6">
                <div class="accordion bem-accordion" id="accordionMasukan">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseMasukan1" aria-expanded="false" aria-controls="collapseMasukan1">
                                <i class="fas fa-book-open me-2"></i> Visi Himpunan Mahasiswa Sistem Informasi
                            </button>
                        </h2>
                        <div id="collapseMasukan1" class="accordion-collapse collapse" data-bs-parent="#accordionMasukan">
                            <div class="accordion-body">
                            Menciptakan mahasiswa IT yang berwawasan global, inovativ, menjunjung nilai kekeluargaan, dan mampu menginspirasi lingkungan sekitar.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseMasukan2" aria-expanded="false" aria-controls="collapseMasukan2">
                                <i class="fas fa-user-graduate me-2"></i> Misi Himpunan Mahasiswa Sistem Informasi
                            </button>
                        </h2>
                        <div id="collapseMasukan2" class="accordion-collapse collapse" data-bs-parent="#accordionMasukan">
                            <div class="accordion-body">
                                <li>
                                Menyediakan program-program inovatif dan mendukung program-program jurusan Sistem Informasi 
                                guna meningkatkan pengetahuan dan  kreativitas mahasiswa
                                </li>
                                <li>
                                Meningkatkan soft skills anggota guna memaksimalkan potensi yang dimiliki
                                </li>
                                <li>
                                Menumbuhkan nilai kekeluargaan dan rasa solidaritas pada lingkungan 
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
        <h2 class="si-visimisi text-center mt-2" style="color: #f9f3d9">Struktur Organisasi Himasi</h2>
    </section>
        <div class="container-himpunan text-center">
            <!-- <h6 class="bem-section-title">Struktur Organisasi Himasi</h6> -->
            <!-- Gambar Struktur Organisasi -->
            <img src="asset\img\Struktur Himasi.png" alt="Struktur Organisasi Fakultas Teknik" class="org-maha-image">
            <!-- Ganti URL gambar di atas dengan path gambar struktur organisasi Anda -->
        </div>
</section>

<!-- Carousel Himpunan News -->

<section class="si-vision-mission-section">
        <h2 class="si-visimisi text-center mt-2" style="color: #f9f3d9">Kegiatan Himasi</h2>
    </section>
    
<!-- end carousel himpunan news -->

<!-- berita baru -->
<div class="container-fluid-news mt-1">
        <div class="col-md-12">
            <div id="news-slider" class="owl-carousel">
                @foreach ( $KegiatanHimasis as $KegiatanHimasi )
                <div class="post-slide" onclick="openPopup(this)">
                    <div class="post-img">
                        <img src="{{ asset('storage/' . $KegiatanHimasi->image_news) }}" alt="">
                        <a href="#" class="over-layer"><i class="fa fa-link"></i></a>
                    </div>
                    <div class="post-content">
                        <h3 class="post-title">
                        <span>{{ $KegiatanHimasi->title }}</span>
                        </h3>
                        <p class="post-description" data-full-description="{{ $KegiatanHimasi->description }}">
                        {{ Str::limit($KegiatanHimasi->description, 100) }}
                        </p>
                        <span class="post-date"><i class="fa fa-clock-o"></i>{{ $KegiatanHimasi->date }}</span>
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