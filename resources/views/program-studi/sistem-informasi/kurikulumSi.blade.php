@extends ('layouts.app')

@section('content')
<section class="hero">
    <div class="container-hero text-center">
        <h1 class="display-4 fw-bold">Kurikulum S-1 Sistem Informasi</h1>
        <p class="lead">Fakultas Teknik Universitas Abulyatama</p>
    </div>
</section>

<h1 class="kurikulum-h1">Akademik S-1 Sistem Informasi</h1>

<!-- Menampilkan Kurikulum -->
<div class="kurikulum-card">
    <div class="kurikulum-table-wrapper">
        <table class="kurikulum-table">
            <thead>
                <tr>
                    <th>SEMESTER</th>
                    <th>KODE MK</th>
                    <th>MATA KULIAH</th>
                    <th>SKS</th>
                    <th>TEORI</th>
                    <th>PRAKTEK</th>
                    <th>KATEGORI MK</th>
                    <th>RPS</th>
                </tr>
            </thead>
            <tbody>
            @php 
                $groupedKurikulum = $kurikulumSis->groupBy('semester')->sortKeys();
            @endphp

            @foreach ($groupedKurikulum as $semester => $kurikulum)
                @foreach ($kurikulum as $kurikulumSi)
                    <tr>
                        <td>{{ $kurikulumSi->semester }}</td>
                        <td>{{ $kurikulumSi->kode_mk }}</td>
                        <td>{{ $kurikulumSi->mata_kuliah }}</td>
                        <td>{{ $kurikulumSi->sks }}</td>
                        <td>{{ $kurikulumSi->teori }}</td>
                        <td>{{ $kurikulumSi->praktek }}</td>
                        <td>{{ $kurikulumSi->kategori }}</td>
                        <td><a href="{{ $kurikulumSi->rps }}" target='_blank' class='btn'><i class='fas fa-download'></i> Download</a></td>
                    </tr>
                @endforeach
                <!-- Menampilkan Total SKS per Semester -->
                <tr class="total-row">
                    <td colspan="3"><strong>Total SKS Semester {{ $semester }}</strong></td>
                    <td><strong>{{ $sksPerSemester[$semester] }}</strong></td>
                    <td colspan="4"></td>
                </tr>
            @endforeach

            <!-- Menampilkan Total SKS Keseluruhan -->
            <tr class="total-row">
                <td colspan="3"><strong>Total SKS Keseluruhan</strong></td>
                <td><strong>{{ $totalSks }}</strong></td>
                <td colspan="4"></td>
            </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection
