@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="hero">
        <div class="container-hero text-center">
            <h1 class="display-4 fw-bold fade-in">Roadmap</h1>
            <p class="lead fade-in">Universitas Abulyatama</p>
        </div>
</section>

<!-- Roadmap Section -->
<section class="struktur-section">
    <div class="container-organisasi text-center">
        <!-- Gambar Roadmap -->
        <img src="asset\img\Roadmap Fakultas Teknik.jpeg" class="org-image">
        <!-- Ganti URL gambar di atas dengan path gambar struktur organisasi Anda -->
    </div>
</section>
<section class="kalender-akademik-section">
    <div class="roster-container">
        <h2>Roadmap</h2>
        <div class="roster-card">
            <iframe 
                src="pdfjs/web/viewer.html?file=\asset\Roadmap-FT-UNAYA- 2022-2026.pdf" 
                width="100%" 
                height="600px" 
                style="border: none;">
            </iframe>
            <div class="mt-2 text-center">
                <a href="asset/Roadmap-FT-UNAYA- 2022-2026.pdf" download class="btn btn-custom">
                    <i class="bi bi-download"></i> Download 
                </a>
            </div>
        </div>
    </div>
</section>
@endsection

