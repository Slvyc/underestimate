@extends('layouts.app')

@section('content')
<section class="hero">
    <div class="container-hero text-center">
        <h1 class="display-4 fw-bold">Badan Eksekutif Mahasiswa</h1>
        <p class="lead">Suara Mahasiswa, Aksi Nyata: Bersama Membangun Kampus yang Lebih Baik</p>
    </div>
</section>

<!-- main content -->
<div class="bem-section">
    <div class="container">
        <!-- <h2 class="bem-section-title mb-5">Visi dan Misi <br>Badan Eksekutif Mahasiswa</h2> -->
        <div class="row g-4 align-items-center">
            <div class="col-md-6 mb-4 mb-md-0">
                <div class="bem-image-wrapper">
                    <img src="asset\img\BEMFT-UNAYA-logo.png" alt="Logo Universitas Abulyatama">
                </div>
            </div>
            <div class="col-md-6">
                <div class="accordion bem-accordion" id="accordionMasukan">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseMasukan1" aria-expanded="false" aria-controls="collapseMasukan1">
                                <i class="fas fa-book-open me-2"></i> Visi BEM-FT UNAYA
                            </button>
                        </h2>
                        <div id="collapseMasukan1" class="accordion-collapse collapse" data-bs-parent="#accordionMasukan">
                            <div class="accordion-body">
                           Mewujudkan BEM-FT UNAYA sebagai organisasi yang aktif, kontributif, dalam mewadahi segala aspek yang berlandaskan Tridharma Perguruan Tinggi
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseMasukan2" aria-expanded="false" aria-controls="collapseMasukan2">
                                <i class="fas fa-user-graduate me-2"></i> Misi BEM-FT UNAYA
                            </button>
                        </h2>
                        <div id="collapseMasukan2" class="accordion-collapse collapse" data-bs-parent="#accordionMasukan">
                            <div class="accordion-body">
                                <li>
                                Membangun komunikasi yang baik sehingga menjadi penghubung dan wadah aspirasi mahasiswa teknik
                                </li>
                                <li>
                                Menjalin hubungan internal dan eksternal yang harmonis demi terciptanya rasa kekeluargaan 
                                </li>
                                <li>
                                Meningkatkan ilmu pengetahuan, kaderisasi untuk membentuk SDM berwawasan luas dan kompeten di bidang akademik dan non-akademik 
                                </li>
                                <li>
                                Meningkatkan potensi yang dimiliki mahasiswa teknik untuk meraih prestasi dan bermanfaat bagi masyarakat
                                </li>
                                <li>
                                Menemukan kreatifitas dan semangat wirausaha agar mahasiswa dapat mandiri dan berdaya saing
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
        <h2 class="si-visimisi text-center mt-2" style="color: #f9f3d9">Struktur Kepengurusan BEM-FT UNAYA</h2>
    </section>
        <div class="container-himpunan text-center">
            <!-- <h6 class="bem-section-title">Struktur Organisasi Himasi</h6> -->
            <!-- Gambar Struktur Organisasi -->
            <img src="asset\img\bem teknik.png" alt="Struktur Organisasi Fakultas Teknik" class="org-maha-image">
            <!-- Ganti URL gambar di atas dengan path gambar struktur organisasi Anda -->
        </div>
</section>

<!-- Carousel Himpunan News -->

<section class="si-vision-mission-section">
        <h2 class="si-visimisi text-center mt-2" style="color: #f9f3d9">Kegiatan BEM</h2>
</section>

<!-- berita baru -->
<div class="container-fluid-news">
<!-- <h2 class="news-titles">Beritaa</h2> -->
    <div class="row">
        <div class="col-md-12">
        <div id="news-slider" class="owl-carousel">
            @foreach ( $KegiatanBems as $KegiatanBem )
            <div class="post-slide" onclick="openPopup(this)">
            <div class="post-img">
                <img src="{{ asset('storage/' . $KegiatanBem->image_news) }}" alt="">
                <span class="over-layer"><i class="fa fa-link"></i></span>
            </div>
            <div class="post-content">
                <h3 class="post-title">
                <a href="#">{{ $KegiatanBem->title }}</a>
                </h3>
                <p class="post-description" data-full-description="{{ $KegiatanBem->description }}">
                {{ Str::limit($KegiatanBem->description, 100) }}
                </p>
                <span class="post-date"><i class="fa fa-clock-o"></i>{{ $KegiatanBem->date }}</span>
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

<script>
    $(document).ready(function() {
        $("#news-slider").owlCarousel({
            items : 3,
            itemsDesktop:[1199,3],
            itemsDesktopSmall:[980,2],
            itemsMobile : [600,1],
            navigation:true,
            navigationText:["",""],
            pagination:true,
            autoPlay:true
        });
    });

    function openPopup(element) {
        const title = element.querySelector('.post-title a').innerText;
        const description = element.querySelector('.post-description').getAttribute('data-full-description');
        const imageSrc = element.querySelector('.post-img img').src;
        const dateNews = element.querySelector('.post-date').innerText;

        document.getElementById('popup-title').innerText = title;
        document.getElementById('popup-description').innerText = description;
        document.getElementById('popup-image').src = imageSrc;
        document.getElementById('popup-date').innerText = dateNews;
        document.getElementById('news-popup').style.display = 'block';
    }

    function closePopup() {
        document.getElementById('news-popup').style.display = 'none';
    }
</script>