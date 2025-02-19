@extends ('layouts.app')

@section('content')
<section class="hero">
    <div class="container-hero text-center">
        <h1 class="display-4 fw-bold">Kurikulum S-1 Sistem Informasi</h1>
        <p class="lead">Fakultas Teknik Universitas Abulyatama</p>
    </div>
</section>

<h1 class="kurikulum-h1">Akademik S-1 Sistem Informasi</h1>
        <!-- Semester 1 -->
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
                    @foreach ( $KurikulumSis as $KurikulumSi )
                        <tr>
                            <td>{{ $KurikulumSi->semester }}</td>
                            <td>{{ $KurikulumSi->kode_mk }}</td>
                            <td>{{ $KurikulumSi->mata_kuliah }}</td>
                            <td>{{ $KurikulumSi->sks }}</td>
                            <td>{{ $KurikulumSi->teori }}</td>
                            <td>{{ $KurikulumSi->praktek }}</td>
                            <td>{{ $KurikulumSi->kategori }}</td>
                            <td><a href="{{ $KurikulumSi->rps }}" target='_blank' class='btn'><i class='fas fa-download'></i>Download</a></td>
                        </tr>     
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection