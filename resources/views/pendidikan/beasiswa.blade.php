@extends ('layouts.app')

@section('content')
<body class="beasiswa-body">
<section class="hero">
    <div class="container-hero text-center">
        <h1 class="display-4 fw-bold">Portal Beasiswa Terkini</h1>
        <p class="lead">Temukan Beasiswa Yang Sesuai Dengan Kebutuhan dan Kemampuan Anda</p>
    </div>
</section>

<!-- main content -->
<div class="container-beasiswa-fluid py-5 mt-4">
    <div class="row justify-content-center ">

        <!-- Beasiswa KIP -->
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="card h-60 border-0 shadow-sm beasiswa-hover-card beasiswa-card beasiswa-primary">
                <div class="beasiswa-card-body">
                    <div class="d-flex align-items-center mb-4">
                        <div class="beasiswa-icon-wrapper me-3 beasiswa-bg-primary-light"><i class="fas fa-graduation-cap text-primary"></i></div>
                        <h3 class="beasiswa-card-title mb-0">Beasiswa KIP</h3>
                    </div>
                    <p class="beasiswa-card-text">Program bantuan pendidikan dari pemerintah Indonesia untuk siswa kurang mampu.</p>
                    <h5 class="mt-4 mb-3">Persyaratan:</h5>
                    <ul class="list-unstyled">
                        <li><i class="fas fa-check-circle text-primary me-2"></i>Untuk lulusan siswa SMA/SMK</li>
                        <li><i class="fas fa-check-circle text-primary me-2"></i>Pas Futu berwarna 4x6 (2 lembar)</li>
                        <li><i class="fas fa-check-circle text-primary me-2"></i>Fotocopy KTP dan KK</li>
                    </ul>
                </div>
                <div class="beasiswa-card-footer bg-transparent border-0">
                    <a href="https://kip-kuliah.kemdikbud.go.id/" class="btn btn-primary beasiswa-btn">Informasi Selengkapnya</a>
                </div>
            </div>
        </div>

        <!-- Beasiswa GenBI -->
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="card h-60 border-0 shadow-sm beasiswa-hover-card beasiswa-card beasiswa-success">
                <div class="beasiswa-card-body">
                    <div class="d-flex align-items-center mb-4">
                        <div class="beasiswa-icon-wrapper me-3 beasiswa-bg-primary-light"><i class="fas fa-graduation-cap text-success"></i></div>
                        <h3 class="beasiswa-card-title mb-0">Beasiswa GenBI</h3>
                    </div>
                    <p class="beasiswa-card-text">Program beasiswa dari Bank Indonesia untuk mahasiswa berprestasi.</p>
                    <h5 class="mt-4 mb-3">Persyaratan:</h5>
                    <ul class="list-unstyled">
                        <li><i class="fas fa-check-circle text-success me-2"></i>Minimal mahasiswa S1 semester 3</li>
                        <li><i class="fas fa-check-circle text-success me-2"></i>Memiliki IPK minimum 3,25</li>
                        <li><i class="fas fa-check-circle text-success me-2"></i>Umur maksimal 24 tahun (S1)</li>
                    </ul>
                </div>
                <div class="beasiswa-card-footer bg-transparent border-0">
                    <a href="https://kip-kuliah.kemdikbud.go.id/" class="btn btn-success beasiswa-btn">Informasi Selengkapnya</a>
                </div>
            </div>
        </div>

        <!-- Beasiswa Baitul Mal -->
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="card h-60 border-0 shadow-sm beasiswa-hover-card beasiswa-card beasiswa-warning">
                <div class="beasiswa-card-body">
                    <div class="d-flex align-items-center mb-4">
                        <div class="beasiswa-icon-wrapper me-3 beasiswa-bg-primary-light"><i class="fas fa-graduation-cap text-warning"></i></div>
                        <h3 class="beasiswa-card-title mb-0">Beasiswa Baitul Mal</h3>
                    </div>
                    <p class="beasiswa-card-text">Program bantuan pendidikan dari lembaga Baitul Mal untuk pelajar dan mahasiswa kurang mampu.</p>
                    <h5 class="mt-4 mb-3">Persyaratan:</h5>
                    <ul class="list-unstyled">
                    <li><i class="fas fa-check-circle text-warning me-2"></i>Ber-KTP dan KK Aceh</li>
                        <li><i class="fas fa-check-circle text-warning me-2"></i>Mahasiswa aktif di wilayah Aceh</li>
                        <li><i class="fas fa-check-circle text-warning me-2"></i>IPK minimal 3.00</li>
                    </ul>
                </div>
                <div class="beasiswa-card-footer bg-transparent border-0">
                    <a href="https://kip-kuliah.kemdikbud.go.id/" class="btn btn-warning beasiswa-btn">Informasi Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
@endsection