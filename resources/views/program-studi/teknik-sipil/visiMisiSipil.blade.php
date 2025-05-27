@extends('layouts.app')

@section('content')
<section class="hero">
    <div class="container-hero text-center">
        <h1 class="display-4 fw-bold fade-in">Program Studi Teknik Sipil</h1>
        <p class="lead fade-in">Menciptakan Lulusan Berkualitas di Bidang Teknik Sipil</p>
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
                <h2 class="si-section-title py-1 mb-4">Program Studi Teknik Sipil</h2>
                <p class="si-text justify-text">Program Studi Teknik Sipil Universitas Abulyatama merupakan Program Studi Teknik Sipil swasta pertama di Aceh dengan lulusan berkualitas yang sudah berkiprah di tingkat daerah maupun nasional. Tujuan Program Studi Teknik Sipil Universitas adalah menghasilkan lulusan yang unggul di bidang rekayasa konstruksi. </p>
                <p class="si-text justify-text">Kurikulum yang diterapkan kepada mahasiswa dirancang untuk menghasilkan engineer yang handal di bidang rekayasa struktur, teknologi material, sumber daya air, transportasi, geoteknik dan manajemen konstruksi.  Para lulusan diharapkan mampu bekerja di bidang perancangan gedung, jalan, jembatan, irigasi, pelabuhan dan berbagai fasilitas publik lainnya. Kami berkomitmen untuk menciptakan lulusan yang handal di bidang rekayasa konstruksi, material, dan mampu beradaptasi dengan perkembangan teknologi.
                </p>
            </div>

            <div class="col-md-6">
                <!-- Slideshow Section -->
                <hr class="si-border-gray">
                    <div class="container-akred">
                        <img src="/asset/akred/FT-Sipil.png" class="img-akred" alt="Foto Departemen 2">
                        <div class="overlay-akred">
                            <div class="button-akred">
                                <a href="/asset/akred/FT-Sipil.png" download> Download </a>
                            </div>
                        </div>
                    </div>
                    <small class="text-center d-block mt-4 fw-bold">Sertifikat Akreditasi Departemen Teknik Sipil</small>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Vision and Mission Section -->
<!-- Vision and Mission Section -->
    <section class="si-vision-mission-section">
        <h2 class="si-visimisi text-center mb-3 mt-4" style="color: #f9f3d9">Visi & Misi Program Studi Teknik Sipil </h2>
    </section>
    <div class="container si-vision-mission-container mb-5">
        <div class="row">
            <!-- Vision Section -->
            <div class="col-md-6">
                <h2 class="text-center si-section-title si-border-title py-4">Visi</h2>
                <p class="si-vision-text mt-4">Menjadi Program Studi yang unggul di bidang rekayasa bahan bangunan dan berwawasan global pada tahun 2027.
                </p>
            </div>
            <!-- Mission Section -->
            <div class="col-md-6">
                <h2 class="text-center si-section-title si-border-title py-4">Misi</h2>
                <ul class="list-unstyled si-tujuan-list mt-4" style="color: #f9f3d9; text-align:justify;">
                    <li class="si-tujuan-item">
                        <i class='bx bx-check-circle tujuan-icon'></i>
                        Menyelenggarakan pendidikan teknik sipil yang berkualitas.
                    </li>
                    <li class="si-tujuan-item">
                        <i class='bx bx-check-circle tujuan-icon'></i>
                        Melaksanakan pengembangan ilmu teknik sipil melalui kegiatan penelitian di bidang rekayasa bahan bangunan.
                    </li>
                    <li class="si-tujuan-item">
                        <i class='bx bx-check-circle tujuan-icon'></i>
                        Menerapkan ilmu teknik sipil melalui kegiatan pengabdian pada masyarakat sesuai kebutuhan masyarakat.
                    </li>
                    <li class="si-tujuan-item">
                        <i class='bx bx-check-circle tujuan-icon'></i>
                        Meningkatkan kualitas lulusan yang unggul dan berwawasan global.
                    </li>
                </ul>
            </div>
        </div>
    </div>
    </section>
    <div class="feedback-section">
        <div class="container">
            <h1 class="border-title text-center mb-5"><b>Tujuan</b></h1>
            <div class="row g-4">
                <div >
                    {{-- <h2 class="text-center mb-4"><b>Tujuan</b></h2> --}}
                    <ul class="tujuan-list">
                        <li>Menghasilkan lulusan yang unggul, berwawasan global dan menguasai seluruh proses 
                            perencanaan, pelaksanaan, pengawasan di bidang konstruksi. 
                        </li>
                        <li>Menghasilkan lulusan yang berbudi pekerti luhur dan berdedikasi terhadap profesi ketekniksipilan.
                        </li>
                        <li>Menghasilkan penelitian dan pengabdian masyarakat di bidang rekayasa bahan bangunan.
                        </li>
                    </ul>
                </div>
                {{-- SASARAN STRATEGIS --}}
                <!-- end accordion-->
            </div>
        </div>
    </div> <!-- end main content -->
@endsection