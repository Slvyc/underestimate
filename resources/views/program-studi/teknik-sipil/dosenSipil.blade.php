@extends('layouts.app')

@section('content')
<section class="hero">
        <div class="container-hero text-center">
            <h1 class="display-4 fw-bold fade-in">Dosen Pengajar</h1>
            <p class="lead fade-in">Teknik Sipil</p>
        </div>
</section>

<div class="container-lecture">
        <div class="row g-4">
        @foreach ( $DosenSipils as $DosenSipil )
            <div class="col-12 col-md-6 col-lg-3">
                <div class="card-lecture">
                    <div class="card-header">
                        <img src="{{ asset('storage/' . $DosenSipil->gambar_dosen) }}">
                        <h5 class="lecturer-name mt-3">{{ $DosenSipil->nama_dosen }}</h5>
                        <p class="lecturer-position">{{ $DosenSipil->posisi_dosen }}</p>
                    </div>
                    <div class="card-body">
                        <p class="nidn">NIDN: {{ $DosenSipil->nidn }}</p>
                    </div>
                    <div class="card-info">
                        <h6>Riwayat Pendidikan</h6>
                        <p>{{ $DosenSipil->riwayat_prodi }}</p>
                        <p>({{ $DosenSipil->riwayat_universitas }})</p>
                        <a href="{{ $DosenSipil->link_publikasi }}" target="_blank">
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
@endsection
