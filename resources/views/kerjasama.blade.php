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
          @foreach ( $Kerjasamas as $Kerjasama )
            <tr>
                <td class="text-center" data-label='No'>{{ $loop->iteration }}</td>
                <td data-label='Kerjasama'>{{ $Kerjasama->nama_kerjasama }}</td>
                <td data-label='Lingkup Kerjasama'>{{ $Kerjasama->lingkup_kerjasama }}</td>
                <td data-label='Jenis Dokumen'>{{ $Kerjasama->jenis_dokumen }}</td>
                <td class="text-center" data-label='Tanggal'>{{ $Kerjasama->tanggal }}</td>
                <td class="text-center" data-label='Status'>{{ $Kerjasama->status }}</td>
                <td class="text-center" data-label='Aksi'><a href="{{ $Kerjasama->link }}" target='_blank' class='btn-primary btn-sm text-decoration-underline'> <i class='fas fa-download'></i> Download</a></td>
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