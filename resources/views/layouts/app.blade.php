<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fakultas Teknik</title>
    <link rel="icon" href="/asset/img/Universitas Abulyatama.png" type="image/x-icon">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@latest/swiper-bundle.min.css" />
</head>

<!-- navbar start -->
<div class="navbar-container">
<nav>
    <div class="logo-nav">
        <a href="{{ route('home') }}">
            <img src="\asset\img\logoFTUNAYA.svg" alt="">
        </a>
    </div>
    <ul class="menu-nav">
        <li><a href="{{route('home')}}">Home</a></li>
        <li><a href="#">Profile</a>
            <ul class="submenu_dropdown-nav">
                <li><a href="{{ route('sejarah') }}" class="no-border-hover">Sejarah</a></li>
                <li><a href="{{ route('visiMisi') }}" class="no-border-hover">Visi & Misi</a></li>
                <li><a href="{{ route('strukturOrganisasi')}}" class="no-border-hover">Struktur Organisasi</a></li>
                <li><a href="{{ route('kalenderAkademik')  }}" class="no-border-hover">Kalender Akademik</a></li>
                <li><a href="{{ route('roadmap')  }}" class="no-border-hover">Roadmap</a></li>
            </ul>
        </li>
        <li><a href="#">Program Studi</a>
            <ul class="submenu_dropdown-nav">
            <li><a href="#" class="no-border-hover">Sistem Informasi</a>
                    <ul class="dropdown-nav">
                        <li><a href="{{ route('visiMisiSi') }}" class="no-border-hover">Visi</a></li>
                        <li><a href="{{ route('dosenSi') }}" class="no-border-hover">Dosen</a></li>
                        <li><a href="{{ route('kurikulumSi') }}" class="no-border-hover">Kurikulum</a></li>
                    </ul>
                </li>
                <li><a href="#" class="no-border-hover">Teknik Sipil</a>
                    <ul class="dropdown-nav">
                        <li><a href="{{ route('visiMisiSipil') }}" class="no-border-hover">Visi</a></li>
                        <li><a href="{{ route('dosenSipil') }}" class="no-border-hover">Dosen</a></li>
                        <li><a href="{{ route('kurikulumSipil') }}" class="no-border-hover">Kurikulum</a></li>
                    </ul>
                </li>
                <li><a href="#" class="no-border-hover">Teknik Mesin</a>
                    <ul class="dropdown-nav">
                        <li><a href="{{ route('visiMisiMesin') }}" class="no-border-hover">Visi</a></li>
                        <li><a href="{{ route('dosenMesin') }}" class="no-border-hover">Dosen</a></li>
                        <li><a href="{{ route('kurikulumMesin') }}" class="no-border-hover">Kurikulum</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li><a href="#">Pendidikan</a>
            <ul class="submenu_dropdown-nav">
                    <li><a href="{{ route('laboratorium') }}" class="no-border-hover">Laboratorium</a></li>
                    <li><a href="{{ route('beasiswa') }}" class="no-border-hover">Beasiswa</a></li>
                    <li><a href="{{ route('perpustakaan') }}" class="no-border-hover">Perpustakaan</a></li>
                    <li><a href="{{ route('jurnal') }}" class="no-border-hover">Jurnal</a></li>
                </ul>
        </li>
        <li><a href="#">Kemahasiswaan</a>
        <ul class="submenu_dropdown-nav">
                <li><a href="{{ route('layanan')}}" class="no-border-hover">Layanan Komunikasi Orang Tua/Wali Mahasiswa</a></li>
                <li><a href="{{ route('layananSuratAktifKuliah')}}" class="no-border-hover">Layanan Permohonan Surat Aktif Kuliah</a></li>
                <li><a href="#" class="no-border-hover">Organisasi Mahasiswa</a>
                    <ul class="dropdown-nav">
                        <li><a href="{{ route('bem') }}" class="no-border-hover">BEM</a></li>
                        <li><a href="{{ route('himasi') }}" class="no-border-hover">Himasi</a></li>
                        <li><a href="{{ route('himatesya') }}" class="no-border-hover">Himatesya</a></li>
                        <li><a href="{{ route('hmm') }}" class="no-border-hover">HMM</a></li>
                    </ul>
                </li>
                <li><a href="#" class="no-border-hover">UKM</a></li>
            </ul>
        </li>
        <li><a href="#">Award</a>
            <ul class="submenu_dropdown-nav">
                    <li><a href="{{ route('penghargaanDosen') }}" class="no-border-hover">Penghargaan Dosen</a></li>
                    <li><a href="{{ route('penghargaanMahasiswa') }}" class="no-border-hover">Penghargaan Mahasiswa</a></li>
                    <li><a href="{{ route('kesiapanTeknologi')}}" class="no-border-hover">Tingkat Kesiapan <br> Teknologi</a></li>
                </ul>
            </li>
        <li><a href="{{ route('kerjasama') }}">Kerjasama</a></li>
        <li><a href="#">Download</a>
            <ul class="submenu_dropdown-nav">
                    <li><a href="{{ route('kegiatanAkademik') }}" class="no-border-hover">Kegiatan Akademik</a></li>
                    <li><a href="{{ route('emagazine') }}" class="no-border-hover">E-Magazine</a></li>
                    <li><a href="{{ route('pengurusanSurat') }}" class="no-border-hover">Pengurusan Surat</a></li>
                    <li><a href="{{ route('sop') }}" class="no-border-hover">Dokumen</a></li>
                    <li><a href="https://drive.google.com/drive/folders/1KO-dTlJQt9lWJoVkNn_BFNZO062cjPwX?usp=sharing" class="no-border-hover">Video Intro / Outro Teknik</a></li>
            </ul>
        </li>
        <li><a href="{{ route('tracerStudy') }}">Tracer Study</a></li>
        <li><a href="#">Quality Assurance</a>
            <ul class="submenu_dropdown-nav">
                    <li><a href="{{ route('sopPanduan')}}" class="no-border-hover">SOP</a></li>
                    <li><a href="{{ route('survey')}}" class="no-border-hover">Survey</a></li>
                    <li><a href="{{ route('dokumenAmi')}}" class="no-border-hover">Dokumen AMI</a></li>
                    <li><a href="{{ route('dokumenMonev')}}" class="no-border-hover">Dokumen Monev</a></li>
            </ul>
        </li>
    </ul>
    <div class="hamburger"><i class="fas fa-bars" style="color: #000"></i></div>
</nav>
</div>

<div class="mobile-menu">
    <div class="mobile-close"><i class="fas fa-times"></i></div>
        <div class="menu-wrapper-nav">
            <ul class="menu-slide main-menu">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li class="submenu-link" data-target="profile-menu"><a href="#">Profile<i class="ri-arrow-right-s-fill"></i></a></li>
                <li class="submenu-link" data-target="program-menu"><a href="#">Program Studi<i class="ri-arrow-right-s-fill"></i></a></li>
                <li class="submenu-link" data-target="pendidikan-menu"><a href="#">Pendidikan<i class="ri-arrow-right-s-fill"></i></a></li>
                <li class="submenu-link" data-target="kemahasiswaan-menu"><a href="#">Kemahasiswaan<i class="ri-arrow-right-s-fill"></i></a></li>
                <li class="submenu-link" data-target="award-menu"><a href="#">Award<i class="ri-arrow-right-s-fill"></i></a></li>
                <li><a href="{{ route('kerjasama') }}">Kerjasama</a></li>
                <li class="submenu-link" data-target="download-menu"><a href="#">Download<i class="ri-arrow-right-s-fill"></i></a></li>
                <li><a href="{{ route('tracerStudy') }}">Tracer Studi</a></li>
                <li class="submenu-link" data-target="quality-assurance"><a href="#">Quality Assurance<i class="ri-arrow-right-s-fill"></i></a></li>
            </ul>

            <!-- Profile Menu -->
            <ul class="menu-slide profile-menu">
                <li class="back-button-nav" data-target="main-menu"><i class="ri-arrow-left-wide-fill"></i>Back</li>
                <li><a href="{{ route('sejarah') }}">Sejarah</a></li>
                <li><a href="{{ route('visiMisi') }}">Visi & Misi</a></li>
                <li><a href="{{ route('strukturOrganisasi') }}">Struktur Organisasi</a></li>
                <li><a href="{{ route('kalenderAkademik') }}">Kalender Akademik</a></li>
                <li><a href="{{ route('roadmap') }}">Roadmap</a></li>
            </ul>

            <!-- Program Studi Menu -->
            <ul class="menu-slide program-menu">
                <li class="back-button-nav" data-target="main-menu"><i class="ri-arrow-left-wide-fill"></i>Back</li>
                <li class="submenu-link" data-target="sistemInformasi-menu"><a href="#">Sistem Informasi<i class="ri-arrow-right-s-fill"></i></a></li>
                <li class="submenu-link" data-target="teknikSipil-menu"><a href="#">Teknik Sipil<i class="ri-arrow-right-s-fill"></i></a></li>
                <li class="submenu-link" data-target="teknikMesin-menu"><a href="#">Teknik Mesin<i class="ri-arrow-right-s-fill"></i></a></li>
            </ul>

            <!-- Sistem Informasi Submenu -->
            <ul class="menu-slide sistemInformasi-menu">
                <li class="back-button-nav" data-target="program-menu"><i class="ri-arrow-left-wide-fill"></i>Back</li>
                <li><a href="{{ route('visiMisiSi') }}">Visi</a></li>
                <li><a href="{{ route('dosenSi') }}">Dosen</a></li>
                <li><a href="{{ route('kurikulumSi') }}">Kurikulum</a></li>
            </ul>

            <!-- Teknik Sipil Submenu -->
            <ul class="menu-slide teknikSipil-menu">
                <li class="back-button-nav" data-target="program-menu"><i class="ri-arrow-left-wide-fill"></i>Back</li>
                <li><a href="{{ route('visiMisiSipil') }}">Visi</a></li>
                <li><a href="{{ route('dosenSipil') }}">Dosen</a></li>
                <li><a href="{{ route('kurikulumSipil') }}">Kurikulum</a></li>
            </ul>

            <!-- Teknik Mesin Submenu -->
            <ul class="menu-slide teknikMesin-menu">
                <li class="back-button-nav" data-target="program-menu"><i class="ri-arrow-left-wide-fill"></i>Back</li>
                <li><a href="{{ route('visiMisiMesin') }}">Visi</a></li>
                <li><a href="{{ route('dosenMesin') }}">Dosen</a></li>
                <li><a href="{{ route('kurikulumMesin') }}">Kurikulum</a></li>
            </ul>

            <!-- Menu Pendidikan -->
            <ul class="menu-slide pendidikan-menu">
                <li class="back-button-nav" data-target="main-menu"><i class="ri-arrow-left-wide-fill"></i>Back</li>
                <li><a href="{{ route('laboratorium') }}">Laboratorium</a></li>
                <li><a href="{{ route('beasiswa') }}">Beasiswa</a></li>
                <li><a href="{{ route('perpustakaan') }}">Perpustakaan</a></li>
                <li><a href="{{ route('jurnal')}}">Jurnal</a></li>
            </ul>

            <!-- Menu Kemahasiswaan -->
            <ul class="menu-slide kemahasiswaan-menu">
                <li class="back-button-nav" data-target="main-menu"><i class="ri-arrow-left-wide-fill"></i>Back</li>
                <li><a href="{{ route('layanan') }}">Layanan Komunikasi Orang Tua/Wali Mahasiswa</a></li>
                <li><a href="{{ route('layananSuratAktifKuliah') }}">Layanan Permohonan Surat Aktif Kuliah</a></li>
                <li class="submenu-link" data-target="Organisasi-menu"><a href="#">Organisasi Mahasiswa<i class="ri-arrow-right-s-fill"></i></a></li>
                <li><a href="#">UKM</a></li>
            </ul>

            <!-- Organisasi Submenu -->
            <ul class="menu-slide Organisasi-menu">
                <li class="back-button-nav" data-target="kemahasiswaan-menu"><i class="ri-arrow-left-wide-fill"></i>Back</li>
                <li><a href="{{ route('bem') }}">BEM</a></li>
                <li><a href="{{ route('himasi') }}">Himasi</a></li>
                <li><a href="{{ route('himatesya') }}">Himatesya</a></li>
                <li><a href="{{ route('hmm') }}">HMM</a></li>
            </ul>

            <!-- Menu Award -->
            <ul class="menu-slide award-menu">
                <li class="back-button-nav" data-target="main-menu"><i class="ri-arrow-left-wide-fill"></i>Back</li>
                <li><a href="{{ route('penghargaanDosen') }}">Prestasi Dosen</a></li>
                <li><a href="{{ route('penghargaanMahasiswa') }}">Prestasi Mahasiswa</a></li>
                <li><a href="{{ route('kesiapanTeknologi')}}" class="no-border-hover">Tingkat Kesiapan Teknologi</a></li> 
            </ul>

            <!--Menu Download -->
            <ul class="menu-slide download-menu">
                <li class="back-button-nav" data-target="main-menu"><i class="ri-arrow-left-wide-fill"></i>Back</li>
                <li><a href="{{ route('kegiatanAkademik') }}">Kegiatan Akademik</a></li>
                <li><a href="{{ route('emagazine') }}">E-Magazine</a></li>
                <li><a href="{{ route('pengurusanSurat') }}">Pengurusan Surat</a></li>
                <li><a href="{{ route('sop') }}">Dokumen</a></li>
                <li><a href="https://drive.google.com/drive/folders/1KO-dTlJQt9lWJoVkNn_BFNZO062cjPwX?usp=sharing">Video Intro / Outro Teknik</a></li>
            </ul>

            {{-- Menu Quality Assurance --}}
            <ul class="menu-slide quality-assurance">
                <li class="back-button-nav" data-target="main-menu"><i class="ri-arrow-left-wide-fill"></i>Back</li>
                <li><a href="{{ route('sopPanduan')}}" class="no-border-hover">Sop</a></li>
                <li><a href="{{ route('survey')}}" class="no-border-hover">Survey</a></li>
                <li><a href="{{ route('dokumenAmi')}}" class="no-border-hover">Dokumen AMI</a></li>
                <li><a href="{{ route('dokumenMonev')}}" class="no-border-hover">Dokumen Monev</a></li> 
            </ul>
        </div>
    </div>
</div>
<!-- navbar end -->

<!-- content start -->
@yield('content')
<!-- content end-->

<!-- Footer -->
<footer class="bg-footer text-center text-dark">
    <!-- Grid container -->
    <div class="container-fluid p-4">
        <section class="section-footer mt-3">
            <!--Grid row-->
            <div class="row row-footer">
                <!--Grid column: Maps-->
                <div class="footer-column">
                    <h5 class="text-uppercase"></h5>
                <ul class=" list-unstyled mb-0">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d714.4644732899995!2d95.38735275865595!3d5.532465662357192!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30404801ed1d3b5b%3A0xeb3c355519d3d29d!2sUniversitas%20Abulyatama!5e0!3m2!1sid!2sid!4v1728061035078!5m2!1sid!2sid"
                                width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        </ul>
                </div>

                <!--Grid column: Kampus Abulyatama-->
                <div class="footer-column">
                    <h5 class="text-uppercase fw-bold mb-4">Kampus Abulyatama</h5>
                    <ul class="list-unstyled mb-0">
                        <li>
                            <p>Jl. Blang Bintang Lama NO, KM, RW, 5, Lampoh Keude, Kec. Kuta Baro
                                Kab. Aceh Besar, Aceh 24415
                            </p>
                        </li>
                        <li>
                            <i class="fa-solid fa-phone"></i><span class="ms-2">+ 62 813-6002-4335</span>
                        </li>
                        <li class="mt-2">
                            <i class="fa-solid fa-envelope"></i><span class="ms-2">
                                fakultas_teknik@abulyatama.ac.id</span>
                        </li>
                        <section class="mt-4">
                            <!-- Facebook -->
                            <a data-mdb-ripple-init class="btn btn-outline btn-floating m-1" href="#!" role="button"><i
                                    class="fab fa-facebook-f"></i></a>

                            <!-- Instagram -->
                            <a data-mdb-ripple-init class="btn btn-outline btn-floating m-1" href="#!" role="button"><i
                                    class="fab fa-instagram"></i></a>
                        </section>
                    </ul>
                </div>

                <!--Grid column: Logo-->
                <div class="footer-column">
                    <ul class="list-unstyled mb-0">
                        <img src="/asset/img/unayaaaa.png" alt="Logo Universitas Abulyatama"
                            class="img-footer">
                    </ul>
                </div>
            </div>
            <!--Grid row-->
        </section>
        <!-- Section: Links -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
        © 2024 Copyright:
        <a class="text-reset fw-bold" href="#">Universitas Abulyatama, All Right Reserved</a>
    </div>
    <!-- Copyright -->
</footer>
<!-- End Footer -->
      
<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>

<!-- script navbar -->
<script>
document.addEventListener("DOMContentLoaded", function () {
    const hamburger = document.querySelector('.hamburger');
    const mobileMenu = document.querySelector('.mobile-menu');
    const closeBtn = document.querySelector('.mobile-close');
    const menuSlides = document.querySelectorAll('.menu-slide');
    const submenuLinks = document.querySelectorAll('.submenu-link');
    const backButtons = document.querySelectorAll('.back-button-nav');

    // Fungsi untuk menampilkan menu yang dituju
    function showMenu(targetClass) {
        menuSlides.forEach(menu => menu.style.display = 'none'); // Sembunyikan semua menu
        const targetElement = document.querySelector(`.${targetClass}`);
        if (targetElement) {
            targetElement.style.display = 'block'; // Tampilkan menu yang dituju
        }
    }

    // Tampilkan mobile menu saat hamburger diklik
    hamburger.addEventListener('click', () => {
        mobileMenu.classList.add('active');
        showMenu('main-menu'); // Buka menu utama
    });

    // Tutup mobile menu saat tombol close diklik
    closeBtn.addEventListener('click', () => {
        mobileMenu.classList.remove('active');
        menuSlides.forEach(menu => menu.style.display = 'none'); // Sembunyikan semua menu
    });

    // Navigasi ke submenu saat submenu-link diklik
    submenuLinks.forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault();
            const target = link.getAttribute('data-target');
            showMenu(target);
        });
    });

    // Navigasi kembali saat tombol back diklik
    backButtons.forEach(button => {
        button.addEventListener('click', () => {
            const target = button.getAttribute('data-target');
            showMenu(target);
        });
    });
});
</script>
<!-- end script nav -->

<!-- script footer -->
<script>
// Initialization for ES Users
import {
    Input,
    initMDB
} from "mdb-ui-kit";

initMDB({
    Input
});
</script>
<!-- end script footer  -->

<script>
    // Wait for the window to load completely
    window.addEventListener("load", function () {
    // Hide the loading screen after the page has loaded
    document.getElementById("loading-screen").style.display = "none";
    });

    // Function to check if an element is in the viewport
    function isElementInView(element) {
    const rect = element.getBoundingClientRect();
    return (
        rect.top < window.innerHeight && rect.bottom >= 0
    );
    }

    // Scroll event listener
    window.addEventListener("scroll", function () {
    const sambutanSection = document.querySelector(".index-sambutan");
    const sambutanFoto = document.querySelector(".index-sambutan-foto");
    const sambutanOverlay = document.querySelector(".index-sambutan-overlay");

    // Check if the section is in view and if it is not already active
    if (isElementInView(sambutanSection) && !sambutanSection.classList.contains("active")) {
        sambutanSection.classList.add("active");
        sambutanFoto.classList.add("active");
        sambutanOverlay.classList.add("active");
    }
    });
</script>

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
        const title = element.querySelector('.post-title span').innerText;
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

<script>
    window.addEventListener("load", function() {
        setTimeout(function() {
                var loadingScreen = document.getElementById("loading-screen");
                loadingScreen.style.opacity = "0"; // Mulai fade-out pada loading screen

                setTimeout(function() {
                        loadingScreen.style.display =
                            "none"; // Menghilangkan loading screen setelah fade-out
                    }

                    , 1000); // Durasi fade-out
            }

            , 3000); // Durasi tampil sebelum fade-out
    });
</script>

<script>
    var copy = document.querySelector(".logos-slide").cloneNode(true);
    document.querySelector(".logos").appendChild(copy);
</script>
  
<script src="{{ asset('js/bootstrap.bundle.min.js')}}"></script>

    
</body>
</html>