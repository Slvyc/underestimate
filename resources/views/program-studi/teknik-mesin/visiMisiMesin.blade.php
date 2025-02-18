@extends('layouts.app')

@section('content')
<section class="hero">
        <div class="container-hero-h text-center">
            <h1 class="display-4 fw-bold fade-in">Program Studi Teknik Mesin</h1>
            <p class="lead fade-in">Menciptakan Lulusan Berkualitas di Bidang Mesin</p>
        </div>
    </section>

    <!-- Main Content Section (Deskripsi Departemen) -->
    <section class="my-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <!-- Judul Kecil -->
                    <h3 class="si-small-title text-left">Deskripsi Singkat</h3>
                    
                    <!-- Deskripsi Departemen -->
                    <h2 class="si-section-title py-1 mb-4">Program Studi Teknik Mesin</h2>
                    <p class="si-text justify-text">Program Studi Teknik Mesin Universitas Abulyatama merupakan salah satu bidang keilmuan yang mempelajari konversi energi, material dan pengecoran, manufaktur, desain dan analisis, dan memelihara sebuah sistem mekanik. Bertujuan menghasilkan lulusan yang berkompeten di bidang Mekanika, Teknik Material, Kinematika, Termodinamika, dan Energi. 
                                                    Program Studi Teknik Mesin Universitas Abulyatama menawarkan mata kuliah yang berfokus pada mata kuliah Proses Manufaktur, Koversi Energi, Proses Produksi dan Metalurgi. Dengan tenaga pengajar yang berprofesional yang berbasis pada penelitian, pratikum dan praktek lapangan, dan punya komitmen untuk mempersiapkan lulusan yang mampu menghadapi tantangan didunia kerja, baik dunia industry maupun teknologi yang terus berkembang.
                                                    </p>
                    <p class="si-text justify-text">Program Studi Teknik Mesin Universitas Abulyatama mempunyai fasilitas fasilitas laboratorium yang lengkap sebagai pendukung kegiatan belajar dan mengajar. Prgoram studi Teknik mesin juga memiliki mitra yang mendukung untuk kegiatan belajar mengajar pratiku dan kerja lapangan, termasuk pelaksanaan merdekan belajar kampus merdeka  (MBKM).</p>
                </div>

                <div class="col-md-6">
                    <!-- Slideshow Section -->
                    <hr class="si-border-gray">
                        <div class="container-akred">
                            <img src="/asset/akred/FT-Mesin.jpg" class="img-akred" alt="Foto Departemen 3">
                            <div class="overlay-akred">
                                <div class="button-akred">
                                    <a href="asset/akred/FT-Mesin.jpg" download> Download </a>
                                </div>
                            </div>
                        </div>
                        <small class="text-center d-block mt-4 fw-bold">Sertifikat Akreditasi Departemen Teknik Mesin</small>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Vision and Mission Section -->
    <section class="si-vision-mission-section">
        <h2 class="si-visimisi text-center mb-3 mt-4" style="color: #f9f3d9">Visi & Tujuan Program Studi Teknik Mesin </h2>
        </section>
        <div class="container si-vision-mission-container mb-5">
            <div class="row">
                <!-- Vision Section -->
                <div class="col-md-6">
                    <h2 class="text-center si-section-title si-border-title py-4">Visi</h2>
                    <p class="si-vision-text mt-4">Menjadi program studi terkemuka di aceh dalam menghasilkan sumber daya manusia yang mampu
                                                   mengembangkan dan menerapkan ilmu teknologi dalam bidang teknik mesin ditingkat lokal regional
                                                   pada tahun 2025.
                    </p>
                </div>
                <!-- Mission Section -->
                <div class="col-md-6">
                    <h2 class="text-center si-section-title si-border-title py-4">Tujuan</h2>
                    <ul class="list-unstyled si-tujuan-list mt-4" style="color: #f9f3d9; text-align:justify;">
                        <li class="si-tujuan-item">
                            <i class='bx bx-check-circle tujuan-icon'></i>
                            Menciptakan lulusan Teknik Mesin yang berkualitas dan berdaya saing tinggi.
                        </li>
                        <li class="si-tujuan-item">
                            <i class='bx bx-check-circle tujuan-icon'></i>
                            Menghasilkan karya penelitian dan pengabdian kepada masyarakat dalam bidang teknik mesin yang berkualitas dan dipublikasikan pada tingkat nasional maupun international.
                        </li>
                        <li class="si-tujuan-item">
                            <i class='bx bx-check-circle tujuan-icon'></i>
                            Menciptakan organisasi dan tata kelola institusi yang efektif, efisien dan produktif.

                        </li>
                        <li class="si-tujuan-item">
                            <i class='bx bx-check-circle tujuan-icon'></i>
                            Terbentuknya kerjasama denga berbagai pihak yang mendukung pada peningkatan ketersediaan sumber daya internal dan peningkatan kompetensi lulusan.
                        </li>
                    </ul>  
                </div>
            </div>
        </div>
    </section>
@endsection