@extends ('layouts.app')

@section('content')
<section class="hero">
    <div class="container-hero text-center">
        <h1 class="display-4 fw-bold">Kurikulum S-1 Teknik Mesin</h1>
        <p class="lead">Fakultas Teknik Universitas Abulyatama</p>
    </div>
</section>

<h1 class="kurikulum-h1">Akademik S-1 Teknik Mesin</h1>

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
                $groupedKurikulum = $kurikulumMesins->groupBy('semester')->sortKeys();
            @endphp

            @foreach ($groupedKurikulum as $semester => $kurikulum)
                @foreach ($kurikulum as $kurikulumMesin)
                    <tr>
                        <td>{{ $kurikulumMesin->semester }}</td>
                        <td>{{ $kurikulumMesin->kode_mk }}</td>
                        <td>{{ $kurikulumMesin->mata_kuliah }}</td>
                        <td>{{ $kurikulumMesin->sks }}</td>
                        <td>{{ $kurikulumMesin->teori }}</td>
                        <td>{{ $kurikulumMesin->praktek }}</td>
                        <td>{{ $kurikulumMesin->kategori }}</td>
                        <td><a href="{{ $kurikulumMesin->rps }}" target='_blank' class='btn'><i class='fas fa-download'></i> Download</a></td>
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
