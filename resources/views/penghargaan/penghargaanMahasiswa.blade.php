@extends ('layouts.app')

@section('content')
<body class="award-body">
<section class="hero">
        <div class="container-hero text-center">
            <h1 class="display-4 fw-bold fade-in">Penghargaan</h1>
            <p class="lead fade-in">Fakultas Teknik Universitas Abulyatama</p>
        </div>
</section>

<!-- Content -->
<div class="award-container">
    <div class="award-card">
    <div class="award-card-title">
        <h3 class="award-title">
            Prestasi Mahasiswa
        </h3>
        </div>
        <!-- Search Box -->
        <form action="{{ route('penghargaanMahasiswa') }}" method="GET">
            <div class="download-search-wrapper mb-4 d-flex justify-content-end">
                <div class="download-search-box">
                    <div class="input-group" style="width: 300px;">
                        <input type="text" name="search" value="{{ request('search') }}" class="form-control download-search-input" id="downloadSearchInput" placeholder="Cari">
                    </div>
                </div>
            </div>
        </form>
        <!-- end searchbox -->
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
            <tbody class="table-penghargaan">
                @include('partials.penghargaanMahasiswa-table')
            </tbody>
        </table>
    </div>
</div>
</body>
<!-- script pencarian -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        $('#downloadSearchInput').on('keyup', function () {
            let search = $(this).val();
            $.ajax({
                url: "{{ route('penghargaanMahasiswa') }}",
                type: "GET",
                data: { search: search },
                success: function (response) {
                    $('.table-penghargaan').html(response);
                }
            });
        });
    });
</script>  
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
@endsection