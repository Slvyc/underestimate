@extends ('layouts.app')

@section('content')
<section class="hero">
    <div class="container-hero text-center">
        <h1 class="display-4 fw-bold">Kerja Sama Fakultas Teknik</h1>
        <p class="lead">Membangun Masa Depan Bersama</p>
    </div>
</section>

<!-- Konten Kerja Sama -->
<div class="container table-container mt-3 mb-5">
    <div class="table-responsive">
      <table class="table table-hover mt-5 mb-5">
        <thead>
          <tr>
            <th>No</th>
            <th>Kerjasama</th>
            <th>Lingkup Kerjasama</th>
            <th>Jenis Dokumen</th>
            <th>Tanggal</th>
            <th>Status</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
            <tr>
                <td data-label='No'></td>
                <td data-label='Kerjasama'></td>
                <td data-label='Lingkup Kerjasama'></td>
                <td data-label='Jenis Dokumen'></td>
                <td data-label='Tanggal'></td>
                <td data-label='Status'></td>
                <td data-label='Aksi'><a href="" target='_blank' class='btn-primary btn-sm text-decoration-underline'> <i class='fas fa-download'></i> Download</a></td>
            <tr>
                <td colspan='6' class='text-center'>Tidak ada data</td>
            </tr>
        </tbody>
      </table>
    </div>
  </div>   
@endsection

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>