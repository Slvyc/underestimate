@extends('layouts.app')

@section('content')
<section class="hero">
    <div class="container-hero text-center">
        <h1 class="display-4 fw-bold fade-in">Kalender Akademik Universitas</h1>
        <p class="lead fade-in">Fakultas Teknik Universitas Abulyatama</p>
</section>

<!-- Struktur Organisasi Section -->
<section class="kalender-akademik-section">
    <div class="container-kalender-akademik text-center">
        <!-- Gambar Struktur Organisasi -->
        <img src="admin/uploads/" alt="Struktur Organisasi Fakultas Teknik" class="org-image-kalender">
        <!-- Download Button -->
        <div class="mt-3">
            <a href="admin/uploads/" download class="btn btn-custom">
                <i class="bi bi-download"></i> Download 
            </a>`
        </div>
    </div>

    <div class="container-kalender-akademik text-center">
        <!-- Gambar Struktur Organisasi -->
        <img src="admin/uploads/" alt="Struktur Organisasi Fakultas Teknik" class="org-image-kalender">
        <!-- Download Button -->
        <div class="mt-3">
            <a href="admin/uploads/" download class="btn btn-custom">
                <i class="bi bi-download"></i> Download 
            </a>
        </div>
    </div>
</section>
@endsection