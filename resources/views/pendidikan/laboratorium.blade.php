@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="hero">
    <div>
        <h1 class="display-4 fw-bold">Laboratorium Fakultas</h1>
        <p class="lead">Temukan Inspirasi, Inovasi, dan Wawasan baru di Laboratorium Fakultas Ultra Modern Kami</p>
    </div>
</section>

<div class="container-lab mt-3">
        <section class="fasilitas-body" id="fasilitas">
            <h2 class="mb-4 lab-section-title">Fasilitas Laboratorium</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 shadow lab-card">
                        <img src="asset/img/lab-si-2.jpg" class="card-img-top" alt="Lab Sistem Informasi">
                        <div class="card-body">
                            <h5 class="card-title">Laboratorium Sistem Informasi</h5>
                            <p class="card-text">Pusat pengembangan dan penelitian teknologi informasi terkini.</p>
                            <a href="#lab-si" class="btn btn-primary lab-btn-custom">Lihat Detail  <i class="fas fa-arrow-right"></i> </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 shadow lab-card">
                        <img src="asset/img/lab-mesin-1.jpg" class="card-img-top" alt="Lab Teknik Mesin">
                        <div class="card-body">
                            <h5 class="card-title">Laboratorium Teknik Mesin</h5>
                            <p class="card-text">Fasilitas lengkap untuk eksperimen dan penelitian mekanika.</p>
                            <a href="#lab-mesin" class="btn btn-primary lab-btn-custom">Lihat Detail  <i class="fas fa-arrow-right"></i> </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 shadow lab-card">
                        <img src="asset/img/lab-sipil-1.jpg" class="card-img-top" alt="Lab Teknik Sipil">
                        <div class="card-body">
                            <h5 class="card-title">Laboratorium Teknik Sipil</h5>
                            <p class="card-text">Peralatan modern untuk pengujian material dan struktur.</p>
                            <a href="#lab-sipil" class="btn btn-primary lab-btn-custom">Lihat Detail  <i class="fas fa-arrow-right"></i> </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="lab-si" class="lab-section">
            <h2 class="mb-4 lab-section-title">Laboratorium Sistem Informasi</h2>
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="lab-image-wrapper">
                        <img src="asset/img/lab-si-1.jpg" class="img-fluid" alt="Lab Sistem Informasi">
                    </div>
                    <p class="mt-3 text-muted">Ruang server dengan perangkat keras canggih untuk mendukung penelitian di bidang sistem informasi.</p>
                </div>
                <div class="col-md-6">
                    <h3 class="mb-3">Fasilitas:</h3>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><i class="fas fa-desktop lab-list-icon me-2"></i> PC</li>
                        <li class="list-group-item"><i class="fas fa-snowflake lab-list-icon me-2"></i> AC</li>
                        <li class="list-group-item"><i class="fas fa-video lab-list-icon me-2"></i> Infokus </li>
                        <li class="list-group-item"><i class="fas fa-print lab-list-icon me-2"></i> Printer </li>
                        <li class="list-group-item"><i class="fas fa-usb lab-list-icon me-2"></i> Hub </li>
                        <li class="list-group-item"><i class="fas fa-network-wired lab-list-icon me-2"></i> Router </li>
                    </ul>
                </div>
            </div>
        </section>

        <section id="lab-mesin" class="lab-section">
            <h2 class="mb-4 lab-section-title">Laboratorium Teknik Mesin</h2>
            <div class="row align-items-center">
                <div class="col-md-6 ">
                    <div class="lab-image-wrapper">
                        <img src="asset/img/lab-mesin-2.jpg" class="img-fluid" alt="Lab Teknik Mesin">
                    </div>
                    <p class="mt-3 text-muted">Bengkel mesin modern dengan berbagai peralatan untuk eksperimen dan penelitian di bidang teknik mesin.</p>
                </div>
                <div class="col-md-6 order-md-1">
                    <h3 class="mb-3">Fasilitas:</h3>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><i class="fas fa-flask lab-list-icon me-2"></i> Roket Stove</li>
                        <li class="list-group-item"><i class="fas fa-blender lab-list-icon me-2"></i> Ball Mil </li>
                        <li class="list-group-item"><i class="fas fa-fire lab-list-icon me-2"></i> Uji Pembakaran Material </li>
                        <li class="list-group-item"><i class="fas fa-balance-scale lab-list-icon me-2"></i> Mesin Uji Tekan dan Lentur </li>
                        <li class="list-group-item"><i class="fas fa-leaf lab-list-icon me-2"></i> Reaktor Biomassa </li>
                        <li class="list-group-item"><i class="fas fa-recycle lab-list-icon me-2"></i> Mesin Pencacah dan Peleleh Plastik </li>
                    </ul>
                </div>
            </div>
        </section>

        <section id="lab-sipil" class="lab-section mt-3">
            <h2 class="mb-4 lab-section-title">Laboratorium Teknik Sipil</h2>
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="lab-image-wrapper">
                        <img src="asset/img/lab-sipil-2.jpg" class="img-fluid" alt="Lab Teknik Sipil">
                        <img src="asset/img/lab-sipil-3.jpg" class="img-fluid" alt="Lab Teknik Sipil">
                    </div>
                    <p class="mt-3 text-muted">Laboratorium lengkap untuk pengujian material konstruksi dan analisis struktur bangunan.</p>
                </div>
                <div class="col-md-6">
                    <h3 class="mb-3">Fasilitas:</h3>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><i class="fas fa-filter lab-list-icon me-2"></i> Sondir </li>
                        <li class="list-group-item"><i class="fas fa-ruler lab-list-icon me-2"></i> Digital Mortar Compression Machine </li>
                        <li class="list-group-item"><i class="fas fa-tachometer-alt lab-list-icon me-2"></i> Compressive Strength of Hydraulic Cement </li>
                        <li class="list-group-item"><i class="fas fa-hourglass-start lab-list-icon me-2"></i> Time of Setting of Hydraulic Sement by Vicat</li>
                        <li class="list-group-item"><i class="fas fa-balance-scale lab-list-icon me-2"></i> Point Load Test Aparatus </li>
                        <li class="list-group-item"><i class="fas fa-weight-hanging lab-list-icon me-2"></i> Dutch Cone Penetrometer 2.5 Ton Capacity</li>
                        <li class="list-group-item"><i class="fas fa-water lab-list-icon me-2"></i> Liquid Limit Test Set</li>
                        <li class="list-group-item"><i class="fas fa-cube lab-list-icon me-2"></i> Vertical Cylinder Capping Set </li>
                        <li class="list-group-item"><i class="fas fa-sliders-h lab-list-icon me-2"></i> Slump Test Set </li>
                        <li class="list-group-item"><i class="fas fa-blender lab-list-icon me-2"></i> Laboratory Concrete Mixer </li>
                        <li class="list-group-item"><i class="fas fa-cube lab-list-icon me-2"></i> Concrete Cylinder Mould</li>
                        <li class="list-group-item"><i class="fas fa-cube lab-list-icon me-2"></i> Concrete Cube Mould</li>
                        <li class="list-group-item"><i class="fas fa-balance-scale lab-list-icon me-2"></i> Triaxial UU Test</li>
                        <li class="list-group-item"><i class="fas fa-clipboard-check lab-list-icon me-2"></i> Consolidation Test Set </li>
                        <li class="list-group-item"><i class="fas fa-water lab-list-icon me-2"></i> Moisture Content Test </li>
                        <li class="list-group-item"><i class="fas fa-tint lab-list-icon me-2"></i> Hydrometer Analysis Test </li>
                        <li class="list-group-item"><i class="fas fa-weight-hanging lab-list-icon me-2"></i> Bulk Density Test </li>
                        <li class="list-group-item"><i class="fas fa-thermometer-half lab-list-icon me-2"></i> Comprehensive Thermdynamics </li>
                        <li class="list-group-item"><i class="fas fa-compass lab-list-icon me-2"></i> Theodilite </li>
                        <li class="list-group-item"><i class="fas fa-filter lab-list-icon me-2"></i> Sieve Analisis </li>
                        <li class="list-group-item"><i class="fas fa-blender lab-list-icon me-2"></i> Ball Mil</li>
                        <li class="list-group-item"><i class="fas fa-compass lab-list-icon me-2"></i> Alat Dynamic Cone Penetrometer</li>
                    </ul>
                </div>
            </div>
        </section>
    </div>
@endsection