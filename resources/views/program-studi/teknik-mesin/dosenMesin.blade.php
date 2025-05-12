@extends('layouts.app')

@section('content')
<section class="hero">
        <div class="container-hero text-center">
            <h1 class="display-4 fw-bold fade-in">Dosen Pengajar</h1>
            <p class="lead fade-in">Teknik Mesin</p>
        </div>
</section>

<!--Main content-->
<div class="container-lecture">
        <div class="row g-4">
            @foreach ( $DosenMesins as $DosenMesin )
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card-lecture">
                        <div class="card-header">
                            <img src="{{ asset('storage/' . $DosenMesin->gambar_dosen) }}">
                            <h5 class="lecturer-name mt-3">{{ $DosenMesin->nama_dosen }}</h5>
                            <p class="lecturer-position">{{ $DosenMesin->posisi_dosen }}</p>
                        </div>
                        <div class="card-body">
                            <p class="nidn">NIDN: {{ $DosenMesin->nidn }}</p>
                        </div>
                        <div class="card-info">
                        <h6>Riwayat Pendidikan</h6>
                        <p>{{ $DosenMesin->riwayat_prodi }}</p>
                        <p>({{ $DosenMesin->riwayat_universitas }})</p>
                        <a href="{{ $DosenMesin->link_publikasi }}" target="_blank">
                            <button class="btn-publications">Lihat Publikasi</button>
                        </a>
                        <div class="button-info">
                            <a href="#" class="kinerja-btn">Kinerja <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>     
            @endforeach
            </div>
        </div>
    </div>  
</div>
@endsection
