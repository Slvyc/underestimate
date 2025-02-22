@extends ('layouts.app')

@section('content')
<body class="award-body">
<section class="hero">
        <div class="container-hero text-center">
            <h1 class="display-4 fw-bold fade-in">Penghargaan</h1>
            <p class="lead fade-in">Fakultas Teknik Universitas Abulyatama</p>
        </div>
</section>

<!-- Content -->
<div class="award-container">
    <div class="award-card">
        <div class="award-card-title">
        <h3 class="award-title">
            Prestasi Dosen
        </h3>
        </div>
        <!-- Search Box -->
        <div class="download-search-wrapper mb-4 d-flex justify-content-end">
                <div class="download-search-box">
                    <div class="input-group" style="width: 300px;">
                        <input type="text" class="form-control download-search-input" id="downloadSearchInput" placeholder="Cari">
                        <span class="input-group-text download-search-icon">
                            <i class="bi bi-search"></i>
                        </span>
                    </div>
                </div>
            </div>
        <table class="award-table table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Profil</th>
                    <th>Prestasi</th>
                    <th>Tingkat</th>
                    <th>Tahun</th>
                </tr>
            </thead>
            <tbody>
            @foreach ( $PenghargaanDosens as $PenghargaanDosen )
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td>
                            <div class="profile-container">
                                <img src="{{ asset('storage/' . $PenghargaanDosen->gambar_person) }}" alt="Dosen Image" class="profile-image">
                                <div class="profile-name">{{ $PenghargaanDosen->person }}</div>
                            </div>
                        </td>
                        <td>
                            <a href="{{ $PenghargaanDosen->link }}">{{ $PenghargaanDosen->prestasi }}</a>
                        </td>
                        <td>{{ $PenghargaanDosen->tingkat }}</td>
                        <td>{{ $PenghargaanDosen->tahun }}</td>
                    </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
</body>
@endsection