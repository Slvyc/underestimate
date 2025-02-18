@extends ('layouts.app')

@section('content')
<section class="hero">
        <div class="container-hero text-center">
            <h1 class="display-4 fw-bold fade-in">Penghargaan</h1>
            <p class="lead fade-in">Fakultas Teknik Universitas Abulyatama</p>
        </div>
</section>

<!-- Content -->
<div class="award-container">
    <div class="award-card">
        <div class="award-card-header">
            Prestasi Dosen
        </div>
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
            <tbody>
           
                    <tr>
                        <td>no</td>
                        <td>
                            <div class="profile-container">
                                <img src="admin/uploads/" alt="Dosen Image" class="profile-image">
                                <div class="profile-name"></div>
                            </div>
                        </td>
                        <td>
                            <a href=""></a>
                        </td>
                        <td></td>
                        <td></td>
                    </tr>
              
            </tbody>
        </table>
    </div>
</div>
@endsection