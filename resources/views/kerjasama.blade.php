@extends ('layouts.app')

@section('content')
<section class="hero">
    <div class="container-hero text-center">
        <h1 class="display-4 fw-bold">Kerja Sama Fakultas Teknik</h1>
        <p class="lead">Membangun Masa Depan Bersama</p>
    </div>
</section>

<!-- Konten Kerja Sama -->
<div class="container table-container mt-5 mb-5">
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
    <div class="download-table-wrapper table-responsive">
      <table class="download-table table table-hover" id="sop-download-table">
          <thead class="download-table-header table-dark">
          <tr>
            <th class="download-col-no">No</th>
            <th class="download-col-name">Kerjasama</th>
            <th class="download-col-name">Lingkup Kerjasama</th>
            <th class="download-col-name">Jenis Dokumen</th>
            <th class="download-col-date">Tanggal</th>
            <th class="download-col-name">Status</th>
            <th class="download-col-action">Aksi</th>
          </tr>
        </thead>
        <tbody class="download-table-body">
          @foreach ( $Kerjasamas as $Kerjasama )
            <tr>
                <td class="text-center" data-label='No'>{{ $loop->iteration }}</td>
                <td>{{ $Kerjasama->nama_kerjasama }}</td>
                <td class="text-center">{{ $Kerjasama->lingkup_kerjasama }}</td>
                <td class="text-center">{{ $Kerjasama->jenis_dokumen }}</td>
                <td class="text-center">{{ $Kerjasama->tanggal }}</td>
                <td class="text-center">{{ $Kerjasama->status_kerjasama }}</td>
                <td class="text-center"><a href="{{ $Kerjasama->link }}" target='_blank' class='btn-primary btn-sm text-decoration-underline'> <i class='fas fa-download'></i> Download</a></td>
            <!-- <tr>
                <td colspan='6' class='text-center'>Tidak ada data</td>
            </tr> -->
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>   
@endsection

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>