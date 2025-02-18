@extends('layouts.app')

@section('content')
<section class="hero">
        <div class="container-hero text-center">
            <h1 class="display-4 fw-bold fade-in">Dosen Pengajar</h1>
            <p class="lead fade-in">Teknik Sistem Informasi</p>
        </div>
</section>

<div class="container-lecture">
    <!-- Section 1 -->
    <div class="card-lecture-section">
        <div class="row g-4">
            <!-- Card 1 -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card-lecture">
                    <div class="card-header">
                        <img src="\asset\img\dosen\ryan setiawann.jpg">
                        <h5 class="lecturer-name mt-3">Ryan Setiawan</h5>
                        <p class="lecturer-position">Asisten Ahli</p>
                    </div>
                    <div class="card-body">
                        <p class="nidn">NIDN: 1316079301</p>
                    </div>
                    <div class="card-info">
                        <h6>Riwayat Pendidikan</h6>
                        <p>S2 Sistem Informasi</p>
                        <p>(Institut Teknologi Sepuluh Nopember)</p>
                        <a href="https://sinta.kemdikbud.go.id/authors/profile/6840109" target="_blank">
                            <button class="btn-publications">Lihat Publikasi</button>
                        </a>
                        <div class="button-info">
                            <a href="#" class="kinerja-btn">Kinerja <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card-lecture">
                    <div class="card-header">
                        <img src="\asset\img\dosen\rahmat sufri.jpg">
                        <h5 class="lecturer-name mt-3">Rahmat Sufri</h5>
                        <p class="lecturer-position">Lektor</p>
                    </div>
                    <div class="card-body">
                        <p class="nidn">NIDN: 1303068801</p>
                    </div>
                    <div class="card-info">
                        <h6>Riwayat Pendidikan</h6>
                        <p>Magister Teknik Elektro</p>
                        <p>(Universitas Syiah Kuala)</p>
                        <a href="#" target="_blank">
                            <button class="btn-publications">Lihat Publikasi</button>
                        </a>
                        <div class="button-info">
                            <a href="#" class="kinerja-btn">Kinerja <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card-lecture">
                    <div class="card-header">
                        <img src="\asset\img\dosen\teuku rizki.jpg">
                        <h5 class="lecturer-name mt-3">Teuku Rizky Noviandy</h5>
                        <p class="lecturer-position">Asisten Ahli</p>
                    </div>
                    <div class="card-body">
                        <p class="nidn">NIDN: </p>
                    </div>
                    <div class="card-info">
                        <h6>Riwayat Pendidikan</h6>
                        <p>S2 Kecerdasan Buatan</p>
                        <p>(Universitas Syiah Kuala)</p>
                        <a href="#" target="_blank">
                            <button class="btn-publications">Lihat Publikasi</button>
                        </a>
                        <div class="button-info">
                            <a href="#" class="kinerja-btn">Kinerja <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Section 2 -->
    <div class="card-lecture-section">
        <div class="row g-4">
            <!-- Card 4 -->
            <!-- <div class="col-12 col-md-6 col-lg-4">
                <div class="card-lecture">
                    <div class="card-header">
                        <img src="path/to/dosen-photo.jpg">
                        <h5 class="lecturer-name mt-3">Jurnalis J Hius</h5>
                        <p class="lecturer-position">Asisten Ahli</p>
                    </div>
                    <div class="card-body">
                        <p class="nidn">NIDN: 0128098502</p>
                    </div>
                    <div class="card-info">
                        <h6>Riwayat Pendidikan</h6>
                        <p>-</p>
                        <p>-</p>
                        <a href="#" target="_blank">
                            <button class="btn-publications">Lihat Publikasi</button>
                        </a>
                        <div class="button-info">
                            <a href="#" class="kinerja-btn">Kinerja <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div> -->

            <!-- Card 5 -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card-lecture">
                    <div class="card-header">
                        <img src="\asset\img\dosen\anisah.jpg">
                        <h5 class="lecturer-name mt-3">Anisah</h5>
                        <p class="lecturer-position">Asisten Ahli</p>
                    </div>
                    <div class="card-body">
                        <p class="nidn">NIDN: </p>
                    </div>
                    <div class="card-info">
                        <h6>Riwayat Pendidikan</h6>
                        <p>S2 Teknik Elektro</p>
                        <p>(Universitas Syiah Kuala)ss</p>
                        <a href="#" target="_blank">
                            <button class="btn-publications">Lihat Publikasi</button>
                        </a>
                        <div class="button-info">
                            <a href="#" class="kinerja-btn">Kinerja <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
