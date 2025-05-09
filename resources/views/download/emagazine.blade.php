@extends ('layouts.app')

@section('content')
<section class="hero">
    <div>
        <div class="container-hero text-center">
        <h1 class="display-4 fw-bold">E-Magazine</h1>
    </div>
</section>

<!-- Content -->
<div class="buku-container">
    <div class="buku-list">
        <div class="buku-item">
            <div class="buku-detail">
                {{-- <a href="https://online.flippingbook.com/view/419524760/" class="fbo-embed" data-fbo-id="0f84c88a06" data-fbo-ratio="3:2" data-fbo-lightbox="yes" data-fbo-width="100%" data-fbo-height="auto" data-fbo-version="1" style="max-width: 100%">
                    <script async defer src="https://online.flippingbook.com/EmbedScriptUrl.aspx?m=redir&hid=419524760"></script>
                </a> --}}
                <iframe src="https://online.fliphtml5.com/zkolw/mehb/" width="100%" height="400px" frameborder="0" allowfullscreen></iframe>
                <h4 class="magazine-title">Riset dan Industri : Sinergi Akademisi dan Praktisi</h4>
                <h5>VOL 1, NO 1</h5>
                <h5>Januari 2025</h5>
            </div>
        </div>
    </div>
</div>
@endsection