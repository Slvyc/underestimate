@extends('layouts.app')

@section('content')
<section class="hero">
    <div class="container-hero text-center">
        <h1 class="display-4 fw-bold fade-in">Kalender Akademik Universitas</h1>
        <p class="lead fade-in">Fakultas Teknik Universitas Abulyatama</p>
</section>

<!-- Struktur Organisasi Section -->
    <section class="kalender-akademik-section">
        @foreach ( $KalenderAkademiks as $KalenderAkademik )
        {{-- <div class="container-kalender-akademik text-center">
            <!-- Gambar Struktur Organisasi -->
            <img src="{{ asset('storage/' . $KalenderAkademik->image_ganjil) }}" alt="Kalender Akademik Ganjil" class="org-image-kalender">
            <!-- Download Button -->
            <div class="mt-3">
                <a href="{{ asset('storage/' . $KalenderAkademik->image_ganjil) }}" download class="btn btn-custom">
                    <i class="bi bi-download"></i> Download 
                </a>`
            </div>
        </div> --}}

        <div class="container-kalender-akademik text-center">
            <!-- Gambar Struktur Organisasi -->
            <img src="{{ asset('storage/' . $KalenderAkademik->image_genap) }}" alt="Kalender Akademik Genap" class="org-image-kalender">
            <!-- Download Button -->
            <div class="mt-3">
                <a href="{{ asset('storage/' . $KalenderAkademik->image_genap) }}" download class="btn btn-custom">
                    <i class="bi bi-download"></i> Download 
                </a>
            </div>
        </div>
        @endforeach

        <div class="roster-container">
            <h2>Roster Akademik</h2>
            @foreach ( $RosterAkademiks as $RosterAkademik)
                <div class="roster-card">
                    <h3>Teknik Sipil</h3>
                    <iframe 
                        src="{{ asset('pdfjs/web/viewer.html?file=' . asset('storage/' . $RosterAkademik->roster_sipil)) }}" 
                        width="100%" 
                        height="600px" 
                        style="border: none;">
                    </iframe>
                    <div class="mt-2 text-center">
                        <a href="{{ asset('storage/' . $RosterAkademik->roster_sipil) }}" download class="btn btn-custom">
                            <i class="bi bi-download"></i> Download 
                        </a>
                    </div>
                </div>

                <div class="roster-card">
                    <h3>Teknik Mesin</h3>
                    <iframe 
                        src="{{ asset('pdfjs/web/viewer.html?file=' . asset('storage/' . $RosterAkademik->roster_mesin)) }}" 
                        width="100%" 
                        height="600px" 
                        style="border: none;">
                    </iframe>
                    <div class="mt-2 text-center">
                        <a href="{{ asset('storage/' . $RosterAkademik->roster_mesin) }}" download class="btn btn-custom">
                            <i class="bi bi-download"></i> Download 
                        </a>
                    </div>
                </div>

                <div class="roster-card">
                    <h3>Sistem Informasi</h3>
                    <iframe 
                        src="{{ asset('pdfjs/web/viewer.html?file=' . asset('storage/' . $RosterAkademik->roster_sistem_informasi)) }}" 
                        width="100%" 
                        height="600px" 
                        style="border: none;">
                    </iframe>
                    <div class="mt-2 text-center">
                        <a href="{{ asset('storage/' . $RosterAkademik->roster_sistem_informasi) }}" download class="btn btn-custom">
                            <i class="bi bi-download"></i> Download 
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection