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
    <form action="{{ route('kerjasama') }}" method="GET">
    <div class="download-search-wrapper mb-4 d-flex justify-content-end">
      <div class="download-search-box">
      <div class="input-group" style="width: 300px;">
        <input type="text" name="search" value="{{ request('search') }}" class="form-control download-search-input"
        id="downloadSearchInput" placeholder="Cari">
      </div>
      </div>
    </div>
    </form>

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
      @include('partials.kerjasama-table')
      </tbody>
    </table>
    </div>
  </div>

  <!-- script pencarian -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $(document).ready(function () {
    $('#downloadSearchInput').on('keyup', function () {
      let search = $(this).val();
      $.ajax({
      url: "{{ route('kerjasama') }}",
      type: "GET",
      data: { search: search },
      success: function (response) {
        $('.download-table-body').html(response);
      }
      });
    });
    });
  </script>
@endsection

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init();
</script>