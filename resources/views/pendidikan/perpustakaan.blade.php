@extends ('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="hero">
    <div>
        <h1 class="display-4 fw-bold">Jelajahi Masa Depan Pengetahuan</h1>
        <p class="lead">Temukan Inspirasi, Inovasi, dan Wawasan baru di Perpustakaan Fakultas Ultra Modern Kami</p>
        <a href="http://slims.abulyatama.ac.id/" class="btn perpus-btn-custom1 btn-lg">Mulai Petualangan</a>
    </div>
</section>

 <section class="py-5" id="koleksi">
        <div class="container-perpus">
            <h2 class="text-center perpus-section-title">Koleksi Terkini</h2>
            <div class="content-perpus row">
                <div class="col-md-4">
                    <div class="card perpus-card h-100">
                        <img src="asset/img/buku1.jpg" class="perpus-card-img-top" alt="Buku 1">
                        <div class="card-body-perpus">
                            <h5 class="perpus-card-title">Revolusi AI dalam Pendidikan</h5>
                            <p class="card-text">Eksplorasi mendalam tentang bagaimana AI mengubah lanskap pendidikan global.</p>
                            <a href="http://slims.abulyatama.ac.id/" class="btn perpus-btn-custom btn-sm">Pinjam Sekarang</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card perpus-card-1 h-100">
                        <img src="asset/img/buku2.jpg" class="perpus-card-img-top" alt="Buku 2">
                        <div class="card-body-perpus">
                            <h5 class="perpus-card-title">Fisika Kuantum untuk Masa Depan</h5>
                            <p class="card-text">Panduan komprehensif tentang aplikasi fisika kuantum dalam teknologi modern.</p>
                            <a href="http://slims.abulyatama.ac.id/" class="btn perpus-btn-custom btn-sm">Pinjam Sekarang</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card perpus-card-2 h-100">
                        <img src="asset/img/buku3.jpg" class="perpus-card-img-top" alt="Buku 3">
                        <div class="card-body-perpus">
                            <h5 class="perpus-card-title">Bioteknologi: Merancang Kehidupan</h5>
                            <p class="card-text">Eksplorasi etika dan inovasi dalam rekayasa genetika dan bioteknologi.</p>
                            <a href="http://slims.abulyatama.ac.id/" class="btn perpus-btn-custom btn-sm">Pinjam Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Layanan Unggulan -->
    <section class="bg-white">
        <div class="container-layanan-perpus">
            <h2 class="text-center perpus-section-title">Layanan Unggulan Kami</h2>
            <div class="content-perpus row g-5">
                <div class="col-md-4">
                    <div class="text-center">
                        <i class="fas fa-user-check perpus-service-icon"></i>
                        <h4>Absen Digital</h4>
                        <p>Solusi modern untuk absensi yang efisien dan akurat menggunakan teknologi digital.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="text-center">
                        <i class="fas fa-snowflake perpus-service-icon"></i>
                        <h4>AC</h4>
                        <p>Ruang yang nyaman dengan pendingin udara untuk pengalaman belajar yang optimal.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="text-center">
                        <i class="fas fa-table perpus-service-icon"></i>
                        <h4>Meja Meeting</h4>
                        <p>Fasilitas meja meeting untuk diskusi dan kolaborasi yang produktif.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Statistik Perpustakaan -->
    <section class="bg-perpus-custom">
        <div class="container-perpus-statistik">
            <h2 class="text-center perpus-section-title">Statistik Perpustakaan</h2>
            <div class="content-perpus row text-center">
                <div class="col-md-3 mb-4">
                    <h3 class="perpus-stat-number">100,000+</h3>
                    <p class="perpus-lead">E-Book & Sumber Digital</p>
                </div>
                <div class="col-md-3 mb-4">
                    <h3 class="perpus-stat-number">50,000+</h3>
                    <p class="perpus-lead">Pengguna Aktif</p>
                </div>
                <div class="col-md-3 mb-4">
                    <h3 class="perpus-stat-number">500+</h3>
                    <p class="perpus-lead">Kursus Online</p>
                </div>
                <div class="col-md-3 mb-4">
                    <h3 class="perpus-stat-number">24/7</h3>
                    <p class="perpus-lead">Akses Global</p>
                </div>
            </div>
        </div>
    </section>
@endsection