@extends ('layouts.app')

@section('content')
    <section class="hero">
        <div class="container-hero text-center">
            <h1 class="display-4 fw-bold fade-in">Kegiatan Akademik</h1>
            <p class="lead fade-in">Universitas Abulyatama</p>
        </div>
    </section>

    <!-- Content -->
    <section class="download-content py-5">
        <div class="container">
            <!-- Search Box -->
            <form action="{{ route('kegiatanAkademik') }}" method="GET">
                <div class="download-search-wrapper mb-4 d-flex justify-content-end">
                    <div class="download-search-box">
                        <div class="input-group" style="width: 300px;">
                            <input type="text" name="search" value="{{ request('search') }}"
                                class="form-control download-search-input" id="downloadSearchInput" placeholder="Cari">
                        </div>
                    </div>
                </div>
            </form>
            <!-- end searchbox -->
            <!-- Table -->
            <div class="download-table-wrapper table-responsive">
                <table class="download-table table table-hover" id="sop-download-table">
                    <thead class="download-table-header table-dark">
                        <tr>
                            <th class="download-col-no">NO</th>
                            <th class="download-col-name">NAMA KEGIATAN</th>
                            <th class="download-col-date">TANGGAL PELAKSAANAAN</th>
                            <th class="download-col-action">AKSI</th>
                        </tr>
                    </thead>
                    <tbody class="download-table-body">
                        @include('partials.kegiatanAkademik-table')
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <!-- script pencarian -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#downloadSearchInput').on('keyup', function () {
                let search = $(this).val();
                $.ajax({
                    url: "{{ route('kegiatanAkademik') }}",
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