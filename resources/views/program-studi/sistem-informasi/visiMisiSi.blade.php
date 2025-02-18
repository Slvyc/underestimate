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
                    <small class="text-center d-block mt-4 fw-bold">Sertifikat Akreditasi Departemen Teknik Sistem Informasi</small>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Vision and Mission Section -->
<section class="si-vision-mission-section">
    <h2 class="si-visimisi text-center mb-3 mt-4" style="color: #f9f3d9">Visi & Tujuan Program Studi Teknik Sistem Informasi</h2>
    </section>
    <div class="container si-vision-mission-container mb-5">
        <div class="row">
            <!-- Vision Section -->
            <div class="col-md-6">
                <h2 class="text-center si-section-title si-border-title py-4">Visi</h2>
                <p class="si-vision-text mt-4">Menjadi salah satu Program Studi yang unggul di bidang transformasi dan inovasi digital berbasis pada manajemen organisasi dan kewirausahaan.</p>
            </div>
            <!-- Mission Section -->
            <div class="col-md-6">
                <h2 class="text-center si-section-title si-border-title py-4">Tujuan</h2>
                <ul class="list-unstyled si-tujuan-list mt-4" style="color: #f9f3d9; text-align:justify;">
                    <li class="si-tujuan-item">
                        <i class='bx bx-check-circle tujuan-icon'></i>
                        Menghasilkan lulusan yang kompeten dalam bidang sistem inforasi dan mampu bersaing
                                                secara nasional  dan internasional.
                    </li>
                    <li class="si-tujuan-item">
                        <i class='bx bx-check-circle tujuan-icon'></i>
                        Memberikan pemahaman dan keterampilan terkait inovasi dan teknologi informasi yang sesuai
                                                dengan perkembangan zaman.
                    </li>
                    <li class="si-tujuan-item">
                        <i class='bx bx-check-circle tujuan-icon'></i>
                        Mendorong pengembangan penelitian yang berfokus pada solusi digital, untuk masalah
                                                ekonomi di berbagai sektor.
                    </li>
                    <li class="si-tujuan-item">
                        <i class='bx bx-check-circle tujuan-icon'></i>
                        Membina kerjasama dengan dunia industri untuk menyediakan pengalaman magang dan peluang kerja
                                                bagi mahasiswa.
                    </li>
                    <li class="si-tujuan-item">
                        <i class='bx bx-check-circle tujuan-icon'></i>
                        Mengembangkan sumber daya manusia yang profesional dan berintegritas, dalam mendukung 
                                                pembangunan teknologi informasi.
                    </li>
                </ul>  
            </div>
        </div>
    </div>
</section>
@endsection