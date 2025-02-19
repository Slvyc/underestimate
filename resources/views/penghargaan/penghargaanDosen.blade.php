@extends ('layouts.app')

@section('content')
<section class="hero">
        <div class="container-hero text-center">
            <h1 class="display-4 fw-bold fade-in">Penghargaan</h1>
            <p class="lead fade-in">Fakultas Teknik Universitas Abulyatama</p>
        </div>
</section>

<!-- Content -->
<div class="award-container">
    <div class="award-card">
        <div class="award-card-header">
            Prestasi Dosen
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
@endsection