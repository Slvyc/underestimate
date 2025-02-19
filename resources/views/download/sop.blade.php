@extends ('layouts.app')

@section('content')
<section class="hero">
        <div class="container-hero text-center">
            <h1 class="display-4 fw-bold fade-in">SOP/Panduan</h1>
            <p class="lead fade-in">Universitas Abulyatama</p>
        </div>
</section>

<!-- Content -->
<section class="download-content py-5">
    <div class="container">
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

        <!-- Table -->
        <div class="download-table-wrapper table-responsive">
            <table class="download-table table table-hover" id="sop-download-table">
                <thead class="download-table-header table-dark">
                    <tr>
                        <th class="download-col-no">NO</th>
                        <th class="download-col-name">NAMA</th>
                        <th class="download-col-date">TANGGAL DIKELUARKAN</th>
                        <th class="download-col-action">AKSI</th>
                    </tr>
                </thead>
                <tbody class="download-table-body">
                @foreach ( $Sops as $Sop )
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $Sop->nama_file }}</td>
                        <td>{{ $Sop->date }}</td>
                        <td><a href="{{ $Sop->link }}" target='_blank' class='btn-primary btn-sm text-decoration-underline'><i class='fas fa-download'></i> Download</a></td>
                    </tr>             
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection