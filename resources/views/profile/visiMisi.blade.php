@extends('layouts.app')

@section('content')
    <!-- main content -->
    <section class="hero">
        <div class="container-hero text-center">
            <h1 class="display-4 fw-bold fade-in">Visi & Misi</h1>
            <p class="lead fade-in">Menciptakan Lulusan Berkualitas di Bidang Teknologi Informasi</p>
        </div>
    </section>

    <div class="vision-mission-section">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6">
                    <h1 class="vision-mission-title py-4"><b>Visi</b></h1>
                    <p class="visi-list mt-4">Pada Tahun 2035 menjadikan Fakultas yang Inovatif, Unggul, Islami dan
                        berwawasan
                        Global dalam penyelenggaraan tri dharma serta menghasilkan lulusan yang menguasai teknologi
                    </p>
                </div>
                <div class="col-md-6">
                    <h1 class="vision-mission-title py-4"><b>Misi</b></h1>
                    <ul class="misi-list mt-4">
                        <li>Menyelenggarakan Pendidikan, penelitian dan Pengabdian kepada Masyarakat secara Profesional dan
                            berkesinambungan.
                        </li>
                        <li>Meningkatkan kualitas dan profesionalisme tenaga Pengajar dan administrasi.</li>
                        <li>Meningkatkan sarana dan prasarana pendidikan penunjang proses pembelajaran teknik.</li>
                        <li>Meningkatkan jaringan kerja sama dengan berbagai instansi pemerintah maupun non pemerintah.</li>
                        <li>Meningkatkan atmosfir akademik melalui proses belajar mengajar yang berkualitas.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="feedback-section">
        <div class="container">
            <h1 class="border-title text-center mb-5"><b>Tujuan & Sasaran</b></h1>
            <div class="row g-4">
                <div class="col-md-6">
                    <h2 class="text-center mb-4"><b>Tujuan</b></h2>
                    <ul class="tujuan-list">
                        <li>Meningkatkan kualitas pendidikan tinggi Fakultas Teknik UNAYA yang unggul,
                            terintegrasi dan berkelanjutan
                        </li>
                        <li>Meningkatkan kualitas penelitian dan publikasi di bidang sains dan teknologi
                            di jurnal nasional dan internasional bereputasi
                        </li>
                        <li>Meningkatkan kerjasama dengan berbagai pihak secara berkelanjutan baik lokal maupun global
                        </li>
                        <li>Meningkatkan kualitas sumber daya manusia yang kompeten dan profesional
                        </li>
                        <li>
                            Meningkatkan kapasitas organisasi dan tata kelola di bidang administrasi dan keuangan yang
                            efisien, akuntabel, transparan, terintegrasi antar bidang dan berkelanjutan.
                        </li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <h2 class="text-center mb-4"><b>Sasaran Strategis</b></h2>
                    <ul class="tujuan-list mb-5">
                        <li>Peningkatan Akses dan Kualitas Penerimaan Mahasiswa Baru</li>
                        <li>Tersedianya program studi berkualitas</li>
                        <li>Lulusan mendapatkan pekerjaan yang layak</li>
                        <li>Tersedianya layanan berkualitas </li>
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
                                            <li>Peningkatan jumlah lulusan yang menyelesaikan studi tepat waktu</li>
                                            <li>Peningkatan ragam soft skill lulusan dengan spirit selalu menjadi yang
                                                terdepan dalam bersaing di tingkat nasional.</li>
                                            <li>Peningkatan mutu program studi melalui jalinan kerjasama berkelanjutan
                                                dengan perguruan tinggi lain, sektor swasta, pemerintah dan lembaga-lembaga
                                                internasional.</li>
                                            <li>Meningkatkan prestasi mahasiswa di tingkat nasional dan internasional
                                            </li>
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
                                            <li>Meningkatkan skema penelitian dan pengabdian kepada masyarakat
                                            </li>
                                            <li>Peningkatan jumlah publikasi ilmiah hasil penelitian dosen di
                                                jurnal nasional terakreditasi dan internasional.</li>
                                            <li>Meningkatnya publikasi, produk inovasi, HKI, dan hilirisasi hasil-hasil
                                                penelitian
                                            </li>
                                            <li>Meningkatkan kontribusi dalam kerja sama bidang pendidikan, penelitian dan
                                                pengabdian kepada masyarakat
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
                                                Tersedianya sumber daya manusia berkarakter pembelajar yang produktif dan
                                                berdaya saing.
                                            </li>
                                            <li>Peningkatan mutu tenaga pengajar melalui pendidikan lanjutan ke jenjang S3
                                                sesuai
                                                bidang Keteknikan pada program studi.</li>
                                            <li>Tersedianya tenaga kependidikan yang memiliki kompetensi di
                                                bidang administrasi perkantoran dan laboratorium.</li>
                                            <li>Terpenuhinya rasio ideal tenaga kependidikan dan mahasiswa serta rasio
                                                tenaga kependidikan dan dosen.</li>
                                            <li>Menciptakan tata kelola organisasi yang fleksibel, akuntabel, transparan,
                                                efisien, dan efektif
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
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
                                            </li>
                                            <li>Pengembangan ruang dan fasilitas belajar dan penelitian sesuai dengan
                                                standar yang
                                                ditetapkan oleh Badan Standar Nasional Pendidikan.</li>
                                            <li>Pengembangan saranan dan prasarana pelayanan administrasi
                                                dan Kerja sama untuk mencapai standar pelayanan yang prima.</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
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
    </div>
@endsection