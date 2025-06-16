@extends ('layouts.app')

@section('content')
<section class="hero">
    <div class="container-hero text-center">
        <h1 class="display-4 fw-bold">Artikel</h1>
        <p class="lead">Mengembangkan Jurnal yang Berkualitas dan Berdaya Saing</p>
    </div>
</section>

<!-- main content -->
<div class="jurnal-container">
    <div class="jurnal-card">
        <!-- <img src="/Web-Profile-Company/img/img.jpg" alt="Tentang Kami" class="service-page-image"> -->
        <div class="jurnal-content-left">
            <i class="fa-solid fa-book-journal-whills"><a class="link-artikel" href="https://www.sciencedirect.com/journal/case-studies-in-construction-materials">Case Studies In Construction Materials</a></i>
            <p>Published by Elsevier B.V.</p>
            <p>Frequency : 2 Issues per year (Juni dan Desember)</p>
            <p>Online ISSN: 2214-5095</p>
        </div>  
        <div class="garis-vertikal"></div>
        <div class="jurnal-content-right">
            <p>Case Studies in Construction Materials provides a forum for the rapid publication of short, structured Case Studies on construction materials 
                and related Short Communications, specialising in actual case studies involving real construction projects. Now by popular demand, CSCM has 
                expanded the scope of the journal to also enable longer papers to be submitted for publication. </p>
        </div>
    </div>
    <div class="jurnal-card">
        <!-- <img src="/Web-Profile-Company/img/img.jpg" alt="Tentang Kami" class="service-page-image"> -->
        <div class="jurnal-content-left">
            <i class="fa-solid fa-book-journal-whills"><a class="link-artikel" href="https://www.frontiersin.org/journals/materials/sections/structural-materials">Structural Materials</a></i>
            <p>Published by Frontiers Media S.A.</p>
            <p>Continuous Publication</p>
            <p>Electronic ISSN : 2296-8016</p>
        </div>  
        <div class="garis-vertikal"></div>
        <div class="jurnal-content-right">
            <p>The Structural Materials section is dedicated to publishing research focused on advancing the understanding and application of materials in 
                the built environment and industrial infrastructure. Led by Professor John Provis from Paul Scherrer Institut (PSI), the Structural Materials 
                section welcomes submissions in various domains of structural materials, which connect fundamental research with practical applications and societal 
                impact.
                </p>
        </div>
    </div>
    <div class="jurnal-card">
        <!-- <img src="/Web-Profile-Company/img/img.jpg" alt="Tentang Kami" class="service-page-image"> -->
        <div class="jurnal-content-left">
            <i class="fa-solid fa-book-journal-whills"><a class="link-artikel" href="https://www.cambridge.org/core/">Cambridge Core</a></i>
            <p>Published by Cambridge University Press.</p>
            {{-- <p>Continuous Publication</p>
            <p>Electronic ISSN : 2296-8016</p> --}}
        </div>  
        {{-- <div class="garis-vertikal"></div>
        <div class="jurnal-content-right">
            <p>The Structural Materials section is dedicated to publishing research focused on advancing the understanding and application of materials in 
                the built environment and industrial infrastructure. Led by Professor John Provis from Paul Scherrer Institut (PSI), the Structural Materials 
                section welcomes submissions in various domains of structural materials, which connect fundamental research with practical applications and societal 
                impact.
                </p>
        </div> --}}
    </div>
    <!-- Card pertama: Gambar di sebelah kiri, konten di sebelah kanan -->
    <div class="jurnal-card">
        <!-- <img src="/Web-Profile-Company/img/img.jpg" alt="Tentang Kami" class="service-page-image"> -->
        <div class="jurnal-content-left">
            <i class="fa-solid fa-book-journal-whills"><a class="link-artikel" href="http://jurnal.abulyatama.ac.id/index.php/ristech">Jurnal Ristech (Jurnal Riset, Sains dan Teknologi)</a></i>
            <p>Published by Lembaga Penelitian dan Pengabdian Kepada Masyarakat Universitas Abulyatama</p>
            <p>Frequency : 2 Issues per year (Januari dan Juli)</p>
            <p>Online ISSN : 2656-0313</p>
        </div>  
        <div class="garis-vertikal"></div>
        <div class="jurnal-content-right">
            <p>Jurnal Ristech merupakan Jurnal Keilmuan dan Terapan Teknik Mesin yang diterbitkan oleh Lembaga Penelitian dan Pengabdian kepada Masyarakat
               Universitas Abulyatama. Jurnal Ristech diterbitkan 2 (dua) kali setahun yaitu pada bulan Januari dan Juli. Tujuan penerbitan jurnal ini adalah 
               untuk menyebarluaskan pengetahuan dan temuan baru oleh para ilmuwan maupun praktisi di bidang teknik mesin yang mencakup bidang: Konversi Energi, 
               Material, Manufaktur, Otomasi Sistem Permesinan, Motor Bakar, Teknologi Tepat Guna dan ilmu yang relevan pada ruang lingkup terkait</p>
        </div>
    </div>
    <div class="jurnal-card">
        <!-- <img src="/Web-Profile-Company/img/img.jpg" alt="Tentang Kami" class="service-page-image"> -->
        <div class="jurnal-content-left">
            <i class="fa-solid fa-book-journal-whills"><a class="link-artikel" href="http://jurnal.abulyatama.ac.id/index.php/tekniksipilunaya">Jurnal Teknik Sipil Unaya</a></i>
            <p>Published by Lembaga Penelitian dan Pengabdian Kepada Masyarakat Universitas Abulyatama</p>
            <p>Frequency : 2 Issues per year (Januari dan Juli)</p>
            <p>P-ISSN : 2407-733X</p>
            <p>E-ISSN : 2407-9200</p>
        </div>  
        <div class="garis-vertikal"></div>
        <div class="jurnal-content-right">
            <p>Jurnal Teknik Sipil Unaya adalah jurnal ilmiah yang mempublikasikan artikel orisinil tentang pengetahuan, penelitian, atau riset terapan 
                terbaru dan pengembangan lainnya di bidang teknik, material, beton, dan konstruksi. Frekuensi terbit dua kali dalam setahun pada bulan 
                Januari dan Juli.</p>
        </div>
    </div>
</div>
@endsection