@extends('layouts.app')

@section('content')
    <section class="hero">
        <div class="container-hero text-center">
            <h1 class="display-4 fw-bold fade-in">Program Studi Teknik Sistem Informasi</h1>
            <p class="lead fade-in">Menciptakan Lulusan Berkualitas di Bidang Teknologi Informasi</p>
        </div>
    </section>

    <!-- Main Content Section (Deskripsi Departemen) -->
    <section class="my-5">
        <div class="container">
            <div class="row">
                <div class="desc-singkat col-md-6">
                    <!-- Judul Kecil -->
                    <h3 class="si-small-title text-left">Deskripsi Singkat</h3>

                    <!-- Deskripsi Departemen -->
                    <h2 class="si-section-title py-1 mb-4">Program Studi Teknik Sistem Informasi</h2>
                    <p class="si-text">Program Studi Sarjana Sistem Informasi merupakan salah satu Program Studi
                        dilingkungan Universitas Abulyatama yang berada Fakultas Teknik, Program ini memberikan
                        kesempatan kepada para lulusan SMA atau sederajat yang terbaik untuk mendapatkan
                        pendidikan dan keahlian di bidang sistem informasi pada tingkat sarjana. Program ini
                        dirancang untuk memenuhi kebutuhan terhadap tenaga-tenaga yang terampil dan profesional
                        di bidang sistem informasi/teknologi informasi.
                    </p>
                    <p class="si-text">Program Studi Sistem Informasi mengajarkan landasan ilmu pengetahuan dan
                        penerapan Teknologi Informasi dalam suatu organisasi. Terkait hal tersebut, kurikulum
                        Program Studi Sistem Informasi menekankan keseimbangan antara kemampuan manajemen dan
                        bisnis serta rekayasa informasi dan teknologi informasi. Selama perkuliahan,
                        mahasiswa akan dibekali dengan berbagai kompetensi di bidang tersebut agar mereka mampu
                        memberikan solusi yang optimal terkait dengan Sistem Informasi/Teknologi Informasi yang
                        dibutuhkan oleh organisasi.</p>
                </div>

                <div class="col-md-6">
                    <!-- Slideshow Section -->
                    <hr class="si-border-gray">
                    <div class="container-akred">
                        <img src="/asset/akred/FT-SI.png" class="img-akred" alt="Foto Departemen 1">
                        <div class="overlay-akred">
                            <div class="button-akred">
                                <a href="/asset/akred/FT-SI.png" download> Download </a>
                            </div>
                        </div>
                    </div>
                    <small class="text-center d-block mt-4 fw-bold">Sertifikat Akreditasi Departemen Teknik Sistem
                        Informasi</small>
                </div>
            </div>
        </div>
        </div>
    </section>

    <!-- Vision and Mission Section -->
    <section class="si-vision-mission-section">
        <h2 class="si-visimisi text-center mb-3 mt-4" style="color: #f9f3d9">Visi & Misi Program Studi Teknik Sistem
            Informasi</h2>
    </section>
    <div class="container si-vision-mission-container mb-5">
        <div class="row">
            <!-- Vision Section -->
            <div class="col-md-6">
                <h2 class="text-center si-section-title si-border-title py-4">Visi</h2>
                <p class="si-vision-text mt-4">Menjadi salah satu Program Studi yang unggul di bidang transformasi dan
                    inovasi digital berbasis
                    pada manajemen organisasi dan kewirausahaan di Provinsi Aceh.</p>
            </div>
            <!-- Mission Section -->
            <div class="col-md-6">
                <h2 class="text-center si-section-title si-border-title py-4">Misi</h2>
                <ul class="list-unstyled si-tujuan-list mt-4" style="color: #f9f3d9; text-align:justify;">
                    <li class="si-tujuan-item">
                        <i class='bx bx-check-circle tujuan-icon'></i>
                        Menyelenggarakan program studi yang memiliki standar mutu dalam hal tata
                        kelola organisasi untuk mendukung proses pengembangan keilmuan.
                    </li>
                    <li class="si-tujuan-item">
                        <i class='bx bx-check-circle tujuan-icon'></i>
                        Meningkatkan kualitas dan profesionalisme dosen dalam menjalankan tridarma
                        perguruan tinggi secara berkesinambungan.
                    </li>
                    <li class="si-tujuan-item">
                        <i class='bx bx-check-circle tujuan-icon'></i>
                        Membangun jaringan kerjasama dengan pemerintah, swasta atau dunia usaha dalam
                        pemanfaatan dan pengembangan sistem informasi.
                    </li>
                </ul>
            </div>
        </div>
    </div>
    </section>
    <div class="feedback-section">
        <div class="container">
            <h1 class="border-title text-center mb-5"><b>Tujuan & Sasaran</b></h1>
            <div class="row g-4">
                <div class="col-md-6">
                    <h2 class="text-center mb-4"><b>Tujuan</b></h2>
                    <ul class="tujuan-list">
                        <li>
                            Menghasilkan lulusan dengan pengetahuan dan kemampuan teknis dalam bidang sistem informasi, 
                            khususnya terkait transformasi dan inovasi digital, analisis, serta pengolahan dan visualisasi data.
                        </li>
                        <li>
                            Menghasilkan lulusan yang memiliki kemampuan dalam pemanfaatan teknologi atau sistem informasi untuk meningkatkan 
                            proses bisnis dan nilai tambah bagi organisasi, bisnis atau kewirausahaan.
                        </li>
                        <li>
                            Menghasilkan lulusan yang mampu menganalisis, membangun dan mengembangkan aplikasi sistem informasi demi menyelesaikan 
                            suatu permasalahan dalam organisasi, dunia usaha atau masyarakat.
                        </li>
                        <li>
                            Menghasilkan lulusan yang memiliki etika profesional, ketajaman analisis, kreatif dan komunikatif serta berkontribusi 
                            dalam pemanfaatan sistem informasi untuk pemberdayaan masyarakat.
                        </li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <h2 class="text-center mb-4"><b>Sasaran Strategis</b></h2>
                    <ul class="tujuan-list mb-5">
                    </ul>

                    <div class="container mt-5 mb-5">
                        <div class="accordion teknik-accordion" id="accordionMasukan">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseMasukan1" aria-expanded="false"
                                        aria-controls="collapseMasukan1">
                                        Sasaran pengembangan integrasi model sistem dan inovasi proses
                                    </button>
                                </h2>
                                <div id="collapseMasukan1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionMasukan">
                                    <div class="accordion-body">
                                        <ol>
                                            Lulusan memiliki kemampuan memahami, menerapkan dan mengintegrasikan 
                                            model sistem, menggunakan metode dan berbagai teknik peningkatan bisnis 
                                            proses yang mendatangkan suatu nilai untuk organisasi.
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseMasukan2" aria-expanded="false"
                                        aria-controls="collapseMasukan2">
                                        Sasaran bidang pemanfaatan sistem komputasi dan TI untuk techno-entrepreneurship
                                    </button>
                                </h2>
                                <div id="collapseMasukan2" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionMasukan">
                                    <div class="accordion-body">
                                        <ol>
                                            Lulusan memiliki kemampuan dalam menggunakan metode, sistem komputasi atau 
                                            pemikiran logis untuk melakukan transformasi, inovasi digital, dengan pengembangan 
                                            aplikasi, perancangan infrstruktur atau arsitektur TI untuk kebutuhan organisasi, 
                                            bisnis atau techo-preuneurship secara mandiri, kreatif dan inovatif.
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseMasukan3" aria-expanded="false"
                                        aria-controls="collapseMasukan3">
                                        Sasaran penguatan kompetensi manajemen risiko dan pengambilan keputusan berbasis TI
                                    </button>
                                </h2>
                                <div id="collapseMasukan3" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionMasukan">
                                    <div class="accordion-body">
                                        <ol>
                                            Lulusan memiliki kemampuan analisis, pengolahan, penyajian data, serta dapat 
                                            mengidentifikasi aspek keamanan informasi, pengelolaan risiko terkait manajemen 
                                            sistem atau teknologi informasi untuk kebutuhan pengambilan keputusan.
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end accordion-->
            </div>
        </div>
    </div> <!-- end main content -->
@endsection