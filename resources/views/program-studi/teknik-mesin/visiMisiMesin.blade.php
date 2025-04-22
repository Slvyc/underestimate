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
                    <p class="si-text justify-text">Program Studi Teknik Mesin Universitas Abulyatama merupakan salah satu
                        bidang keilmuan yang mempelajari konversi energi, material dan pengecoran, manufaktur, desain dan
                        analisis, dan memelihara sebuah sistem mekanik. Bertujuan menghasilkan lulusan yang berkompeten di
                        bidang Mekanika, Teknik Material, Kinematika, Termodinamika, dan Energi.
                        Program Studi Teknik Mesin Universitas Abulyatama menawarkan mata kuliah yang berfokus pada mata
                        kuliah Proses Manufaktur, Koversi Energi, Proses Produksi dan Metalurgi. Dengan tenaga pengajar yang
                        berprofesional yang berbasis pada penelitian, pratikum dan praktek lapangan, dan punya komitmen
                        untuk mempersiapkan lulusan yang mampu menghadapi tantangan didunia kerja, baik dunia industry
                        maupun teknologi yang terus berkembang.
                    </p>
                    <p class="si-text justify-text">Program Studi Teknik Mesin Universitas Abulyatama mempunyai fasilitas
                        fasilitas laboratorium yang lengkap sebagai pendukung kegiatan belajar dan mengajar. Prgoram studi
                        Teknik mesin juga memiliki mitra yang mendukung untuk kegiatan belajar mengajar pratiku dan kerja
                        lapangan, termasuk pelaksanaan merdekan belajar kampus merdeka (MBKM).</p>
                </div>

                <div class="col-md-6">
                    <!-- Slideshow Section -->
                    <hr class="si-border-gray">
                    <div class="container-akred">
                        <img src="/asset/akred/FT-Mesin.jpg" class="img-akred" alt="Foto Departemen 3">
                        <div class="overlay-akred">
                            <div class="button-akred">
                                <a href="/asset/akred/FT-Mesin.jpg" download> Download </a>
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
        <h2 class="si-visimisi text-center mb-3 mt-4" style="color: #f9f3d9">Visi & Misi Program Studi Teknik Mesin </h2>
    </section>
    <div class="container si-vision-mission-container mb-5">
        <div class="row">
            <!-- Vision Section -->
            <div class="col-md-6">
                <h2 class="text-center si-section-title si-border-title py-4">Visi</h2>
                <p class="si-vision-text mt-4">Pada Tahun 2035 menjadi Program Studi yang unggul dalam pengembangan
                    teknologi tepat guna yang inovatif, islami serta berwawasan global.
                </p>
            </div>
            <!-- Mission Section -->
            <div class="col-md-6">
                <h2 class="text-center si-section-title si-border-title py-4">Misi</h2>
                <ul class="list-unstyled si-tujuan-list mt-4" style="color: #f9f3d9; text-align:justify;">
                    <li class="si-tujuan-item">
                        <i class='bx bx-check-circle tujuan-icon'></i>
                        Melaksanakan Tri Dharma perguruan tinggi secara berkelanjutan serta mengembangkan atmosfir akademik
                        yang dinamis dan kondusif bagi civitas akademika yang mampu bersaing dan beretika.
                    </li>
                    <li class="si-tujuan-item">
                        <i class='bx bx-check-circle tujuan-icon'></i>
                        Melaksanakan sistem manajemen administrasi dan proses pembelajaran secara efektif dan efisien serta
                        peningkatan mutu, sarana dan prasarana untuk mendukung proses pembelajaran.
                    </li>
                    <li class="si-tujuan-item">
                        <i class='bx bx-check-circle tujuan-icon'></i>
                        Peningkatan karya penelitian dan pengabdian kepada masyarakat dalam bidang teknik mesin yang
                        berkualitas dan dipublikasikan pada tingkat nasional maupun international.
                    </li>
                    <li class="si-tujuan-item">
                        <i class='bx bx-check-circle tujuan-icon'></i>
                        Menjalin kerjasama yang saling menguntungkan dan bersinergi dengan instansi pemerintah (daerah dan
                        pusat) dunia industri, dunia pendidikan (dalam dan luar negeri) dan asosiasi profesional.
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
                        <li>Menciptakan lulusan Teknik Mesin yang berkualitas dan berdaya saing tinggi.
                        </li>
                        <li>Menghasilkan karya penelitian dan pengabdian kepada masyarakat dalam bidang teknik mesin yang
                            berkualitas dan dipublikasikan pada tingkat nasional maupun international.
                        </li>
                        <li>Menciptakan organisasi dan tata kelola institusi yang efektif,
                            efisien dan produktif.
                        </li>
                        <li>Terbentuknya kerjasama denga berbagai pihak yang mendukung pada peningkatan ketersediaan sumber
                            daya internal dan peningkatan kompetensi lulusan.
                        </li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <h2 class="text-center mb-4"><b>Sasaran Strategis</b></h2>
                    <ul class="tujuan-list mb-5">
                        {{-- <li>Peningkatan Akses dan Kualitas Penerimaan Mahasiswa Baru</li>
                        <li>Tersedianya program studi berkualitas</li>
                        <li>Lulusan mendapatkan pekerjaan yang layak</li>
                        <li>Tersedianya layanan berkualitas </li> --}}
                    </ul>

                    <div class="container mt-5 mb-5">
                        <div class="accordion teknik-accordion" id="accordionMasukan">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseMasukan1" aria-expanded="false"
                                        aria-controls="collapseMasukan1">
                                        Sasaran bidang pendidikan dan pengajaran
                                    </button>
                                </h2>
                                <div id="collapseMasukan1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionMasukan">
                                    <div class="accordion-body">
                                        <ol>
                                            <li>Meningkatkan kualifikasi dan kompetensi dosen dan tenaga kependidikan
                                                (tendik), serta memberikan dukungan untuk pengembangan profesional secara
                                                berkelanjutan.
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseMasukan2" aria-expanded="false"
                                        aria-controls="collapseMasukan2">
                                        Sasaran bidang penelitian dan pengabdian kepada masyarakat
                                    </button>
                                </h2>
                                <div id="collapseMasukan2" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionMasukan">
                                    <div class="accordion-body">
                                        <ol>
                                            <li>Mengembangkan dan memperbarui fasilitas pembelajaran, penelitian, dan
                                                pengabdian masyarakat guna mendukung pencapaian visi, misi, tujuan, dan
                                                sasaran.
                                            </li>
                                            <li>
                                                Membangun kerja sama yang erat dengan industri untuk memastikan relevansi
                                                kurikulum dengan kebutuhan pasar kerja, serta berkontribusi pada solusi
                                                permasalahan masyarakat melalui program pengabdian.
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseMasukan3" aria-expanded="false"
                                        aria-controls="collapseMasukan3">
                                        Sasaran bidang sumber daya manusia
                                    </button>
                                </h2>
                                <div id="collapseMasukan3" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionMasukan">
                                    <div class="accordion-body">
                                        <ol>
                                            <li>
                                                Menerapkan sistem penjaminan mutu yang ketat untuk memastikan kualitas dan
                                                relevansi program pendidikan, serta mengevaluasi capaian visi, misi, dan
                                                tujuan secara berkala.
                                            </li>
                                            <li>Mendorong kegiatan penelitian dan inovasi yang berorientasi pada
                                                masalah-masalah global, dengan menggalang kerja sama nasional dan
                                                internasional.
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseMasukan4" aria-expanded="false"
                                        aria-controls="collapseMasukan3">
                                        Sasaran bidang sarana dan prasarana
                                    </button>
                                </h2>
                                <div id="collapseMasukan4" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionMasukan">
                                    <div class="accordion-body">
                                        <ol>
                                            <li>Mengembangkan infrastruktur untuk memuhi kebutuhan Tri Dharma
                                        </ol>
                                    </div>
                                </div>
                            </div> --}}
                            {{-- <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseMasukan5" aria-expanded="false"
                                        aria-controls="collapseMasukan3">
                                        Sasaran bidang tata kelola, keuangan dan aset.
                                    </button>
                                </h2>
                                <div id="collapseMasukan5" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionMasukan">
                                    <div class="accordion-body">
                                        <ol>
                                            <li>Pengembangan sistem manajemen mutu terpadu meliputi penetapan standar
                                                layanan, monitoring, asesmen dan evaluasi yang efektif dan efisien yang
                                                didukung teknologi informasi yang handal.</li>
                                            <li>Penggunaan aset secara efektif dan efisien mengacu pada prosedur operasi
                                                baku.</li>
                                            <li>Peningkatan jumlah kerjasama yang saling menguntungkan dengan berbagai pihak
                                                sebagai salah satu sumber pendapatan institusi</li>
                                        </ol>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
                <!-- end accordion-->
            </div>
        </div>
    </div> <!-- end main content -->
@endsection