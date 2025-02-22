@extends('layouts.app')

@section('content')
    <!-- Video -->
    <div class="index-video-hero">
        <video class="index-video" autoplay loop muted>
            <source src="asset\Intro Teknik 1.mp4" type="video/mp4">
        </video>
    </div>

    <!-- Selamat -->
    <div class="hero-section-sambutan" style="background-image: url('asset/img/background dekan sambutan (1).png');">
        <!-- Main Content -->
        <div class="container-sambutan">
            <div class="text-content-sambutan">
                <h1 class="title-sambutan">Dr. Ir. Cut Rahmawati, M.T., IPM., ASEAN Eng.</h1>
                <h2 class="subtitle-sambutan">Dekan Fakultas Teknik</h2>
                <p class="description-sambutan">
                    Selamat datang di Fakultas Teknik Universitas Abulyatama. Fakultas Teknik UNAYA menyelenggarakan pendidikan rekayasa teknik yang memiliki keunggulan pada inovasi dan berkomitmen mencetak generasi unggul yang siap membawa perubahan. Mari bergabung bersama kami dalam penyelenggaraan pembelajaran yang terintegrasi dengan riset unggulan. Kami berkomitmen menyebarkan hasil riset unggulan untuk pengembangan Dunia Usaha dan Industri (DUDI) serta kebutuhan masyarakat.
                </p>
            </div>

            <!-- Dean's Photo with Batik Pattern behind and below -->
            <div class="dekan-photo-container" style="background-image: url('asset/img/element 1.png');">
                <img src="asset/img/bu cutt.png" alt="Dekan Fakultas Teknik" class="dekan-photo">
            </div>
        </div>
    </div>

    <!-- berita baru -->
    <div class="container-fluid-news">
        <h2 class="news-titles">Berita</h2>
            <div class="col-md-12">
                <div id="news-slider" class="owl-carousel">
                    @foreach($beritas as $berita)
                    <div class="post-slide" onclick="openPopup(this)">
                        <div class="post-img">
                        <img src="{{ asset('storage/' . $berita->image_news) }}" alt="">
                            <span class="over-layer"><i class="fa fa-link"></i></span>
                        </div>
                        <div class="post-content">
                            <h3 class="post-title">
                            <span>{{ $berita->title }}</span>
                            <!-- <h3>{{ $berita->title }}</h3> -->
                            </h3>
                            <p class="post-description" data-full-description="{{ $berita->description }}">
                                {{ Str::limit($berita->description, 100) }}
                            </p>
                            <span class="post-date"><i class="fa fa-clock-o"></i>{{ $berita->date }}</span>
                            <a href="#" class="read-more"></a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>


    <!-- Pop-up Modal Berita -->
    <div id="news-popup" class="popup" style="display:none;">
        <div class="popup-content">
            <span class="close" onclick="closePopup()">&times;</span>
            <img id="popup-image" src="" alt="" style="width: 100%; border-radius: 10px; margin-bottom: 10px;">
            <h3 id="popup-title">{{ $berita->title }}</h3>
            <p id="popup-description">description</p>
            <span id="popup-date"><i class="fa fa-clock-o"></i>date</span>
        </div>
    </div>
    <!-- end berita baru -->
    
    <!-- container announcement -->
    <div class="container-announcement">
        <!-- pengunguman -->
        <section class="announcements">
            <h2 class="title-announcement">Pengumuman</h2>
            @foreach ($pengumumans as $pengumuman)
            <a href="{{ $pengumuman->link }}" class="card-link">
                <div class="announcement">
                <div class="date1"><span>{{ $pengumuman->tanggal_pengumuman }}</span><br>{{ $pengumuman->bulan_pengumuman }}</div>
                    <div class="content">
                      <h3 class="title">{{ $pengumuman->judul_pengumuman }}</h3>
                      <p class="description">{{ $pengumuman->deskripsi_pengumuman }}</p>
                    </div>
                </div>
            </a>      
            @endforeach
        </section>
        
        <!-- agenda -->
        <section class="agenda">
            <h2 class="title-event">Agenda</h2>
            @foreach ($agendas as $agenda)
                <div class="event">
                    <div class="date"><span>{{ $agenda->tahun_agenda }}</span></div>
                    <div class="content">
                      <h3 class="event-title">{{ $agenda->judul_agenda }}</h3>
                      <p class="time">{{ $agenda->masa_agenda }}</p>
                    </div>
                </div>
            @endforeach
        </section>
    </div>

    <!-- Fitur 4 -->
    <!-- card pertama -->
<section class="card-section">
    <h2 class="title-portal">Portal Akademik & Kemahasiswaan</h2>
    <div class="home-container mb-2 mt-5">
    <div class="d-lg-flex justify-content-center">
        <div class="d-md-flex align-items-center mb-lg-0 mb-md-5">
            <div class="home-col2">
                <a href="https://siakad.unaya.ac.id/" target="_blank" class="home-card pb-4">
                    <span class="fas fa-building-columns mt-3"></span>
                    <p class="home-h4 pt-4">SIAKAD</p>
                    <p class="p1 text-center">
                        Sistem Informasi Akademik Unaya
                    </p>
                    <span class="fas fa-arrow-right"></span>
                </a>
            </div>
            <div class="home-col2">
                <a href="https://simaya.unaya.ac.id/" target="_blank" class="home-card pb-4">
                    <span class="fas fa-building-columns mt-3"></span>
                    <p class="home-h4 pt-4">SIMAYA</p>
                    <p class="p1 text-center">
                        Sistem MBKM Universitas Abulyatama     
                    </p>
                    <span class="fas fa-arrow-right"></span>
                </a>
            </div>
            <div class="home-col2">
                <a href="https://www.instagram.com/himasi_unaya?igsh=MWcybTEzaHV5czA0dw==" target="_blank" class="home-card pb-4">
                    <span class="fas fa-computer mt-3"></span>
                    <p class="home-h4 pt-4">HIMASI</p>
                    <p class="p1 text-center">
                        Himpunan Mahasiswa Sistem Informasi
                    </p>
                    <span class="fas fa-arrow-right"></span>
                </a>
            </div>
            <div class="home-col2">
                <a href="https://www.instagram.com/himatesya?igsh=MTR6em9wMG5uNjZtYQ==" target="_blank" class="home-card pb-4">
                    <span class="fas fa-city mt-3"></span>
                    <p class="home-h4 pt-4">HIMATESYA</p>
                    <p class="p1 text-center">
                        Himpunan Mahasiswa Teknik Sipil
                    </p>
                    <span class="fas fa-arrow-right"></span>
                </a>
            </div>
            <div class="home-col2">
                <a href="https://www.instagram.com/hmm_unaya?igsh=N2Fkcms3M3NlODNt" target="_blank" class="home-card pb-4">
                    <span class="fas fa-gears mt-3"></span>
                    <p class="home-h4 pt-4">HMM</p>
                    <p class="p1 text-center">
                        Himpunan Mahasiswa Teknik Mesin
                    </p>
                    <span class="fas fa-arrow-right"></span>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="pu-section">
    <div class="pu-content">
        <div class="pu-text">
            <h1>
                <span class="pu-highlight">Klinik</span> Rumah <br> <span class="pu-bold">Swadaya</span>
            </h1>
            <p class="pu-subtitle">Konsultasi Untuk Hunian Layak!</p>
            <p class="pu-description">Hidup yang tenteram berawal dari rumah yang layak</p>
            <a href="https://krs.perumahan.pu.go.id/" target="_blank" class="pu-button">Mulai Konsultasi →</a>
        </div>
        <div class="pu-image">
            <img src="asset\img\swadaya.png" alt="Klinik Rumah Swadaya">
        </div>
    </div>
</section>


    <!-- sponsor -->
<section class="sponsor-logos-section">
  <div class="logos">
    <div class="logos-slide">
      <img src="asset/img/sponsor/Ban PT.jpg" />
      <img src="asset/img/sponsor/Lam Teknikk.jpeg" />
      <img src="asset/img/sponsor/Kampus Merdeka.jpg" />
      <img src="asset/img/sponsor/Tut Wuri.jpg" />
      <img src="asset/img/sponsor/pancacita.png" />
      <img src="asset/img/sponsor/Syiah Kuala.png" />
      <img src="asset/img/sponsor/UPM.png" />
      <img src="asset/img/sponsor/teuku umar.png" />
      <img src="asset/img/sponsor/iskandar muda.png" />
      <img src="asset/img/sponsor/politeknik negeri lhokseumawe.png" />
      <img src="asset/img/sponsor/instutut sains.png" />
      <img src="asset/img/sponsor/halu oleo.png" style="width: 200px; height: auto;" />
      <img src="asset/img/sponsor/bank sampah.png" />
    </div>
  </div>
</section>
@endsection
    