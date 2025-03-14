@extends('layouts.app')

@section('content')
    <!-- Video -->
    <div class="index-video-hero">
        <video class="index-video" autoplay loop muted>
            <source src="asset\Intro Teknik 1.mp4" type="video/mp4">
        </video>
    </div>

    <!-- Header-->
    <header class="sambutan py-5">
        <div class="container px-5 mt-4 pb-5">
            <div class="row gx-5 align-items-center">
                <div class="col-xxl-7">
                    <!-- Header text content-->
                    <div class="text-center text-xxl-start">
                        <div class="badge bg-gradient-primary-to-secondary text-white mb-3">
                            <div class="text-uppercase">Fakultas Teknik Unaya</div>
                        </div>
                        <div class="fs-5 fw-light text-muted">Dr. Ir. Cut Rahmawati, M.T., IPM., ASEAN Eng.</div>
                        <h5 class="display-6 mt-2 mb-1"><span class="text-gradient d-inline">Dekan Fakultas Teknik</span>
                        </h5>
                        <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-start mb-3">
                            <p class="description-sambutan">
                                Selamat datang di Fakultas Teknik Universitas Abulyatama. Fakultas Teknik UNAYA
                                menyelenggarakan pendidikan rekayasa teknik yang memiliki keunggulan pada inovasi dan
                                berkomitmen mencetak generasi unggul yang siap membawa perubahan. Mari bergabung bersama
                                kami dalam penyelenggaraan pembelajaran yang terintegrasi dengan riset unggulan. Kami
                                berkomitmen menyebarkan hasil riset unggulan untuk pengembangan Dunia Usaha dan Industri
                                (DUDI) serta kebutuhan masyarakat.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-5">
                    <!-- Header profile picture-->
                    <div class="d-flex justify-content-center mt-5 mt-xxl-0">
                        <div class="profile bg-gradient-primary-to-secondary">
                            <!-- TIP: For best results, use a photo with a transparent background like the demo example below-->
                            <!-- Watch a tutorial on how to do this on YouTube (link)-->
                            <img class="profile-img" src="asset/img/bu cutt.png" alt="..." />
                            <div class="dots-1">
                                <!-- SVG Dots-->
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 191.6 1215.4"
                                    style="enable-background: new 0 0 191.6 1215.4" xml:space="preserve">
                                    <g transform="translate(0.000000,1280.000000) scale(0.100000,-0.100000)">
                                        <path
                                            d="M227.7,12788.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,12801.6,289.7,12808.6,227.7,12788.6z">
                                        </path>
                                        <path
                                            d="M1507.7,12788.6c-151-50-253-216-222-362c25-119,136-230,254-255c194-41,395,142,375,339c-11,105-90,213-190,262        C1663.7,12801.6,1569.7,12808.6,1507.7,12788.6z">
                                        </path>
                                        <path
                                            d="M227.7,11508.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,11521.6,289.7,11528.6,227.7,11508.6z">
                                        </path>
                                        <path
                                            d="M1507.7,11508.6c-151-50-253-216-222-362c25-119,136-230,254-255c194-41,395,142,375,339c-11,105-90,213-190,262        C1663.7,11521.6,1569.7,11528.6,1507.7,11508.6z">
                                        </path>
                                        <path
                                            d="M227.7,10228.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,10241.6,289.7,10248.6,227.7,10228.6z">
                                        </path>
                                        <path
                                            d="M1507.7,10228.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,10241.6,1569.7,10248.6,1507.7,10228.6z">
                                        </path>
                                        <path
                                            d="M227.7,8948.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,8961.6,289.7,8968.6,227.7,8948.6z">
                                        </path>
                                        <path
                                            d="M1507.7,8948.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,8961.6,1569.7,8968.6,1507.7,8948.6z">
                                        </path>
                                        <path
                                            d="M227.7,7668.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,7681.6,289.7,7688.6,227.7,7668.6z">
                                        </path>
                                        <path
                                            d="M1507.7,7668.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,7681.6,1569.7,7688.6,1507.7,7668.6z">
                                        </path>
                                        <path
                                            d="M227.7,6388.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,6401.6,289.7,6408.6,227.7,6388.6z">
                                        </path>
                                        <path
                                            d="M1507.7,6388.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,6401.6,1569.7,6408.6,1507.7,6388.6z">
                                        </path>
                                        <path
                                            d="M227.7,5108.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,5121.6,289.7,5128.6,227.7,5108.6z">
                                        </path>
                                        <path
                                            d="M1507.7,5108.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,5121.6,1569.7,5128.6,1507.7,5108.6z">
                                        </path>
                                        <path
                                            d="M227.7,3828.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,3841.6,289.7,3848.6,227.7,3828.6z">
                                        </path>
                                        <path
                                            d="M1507.7,3828.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,3841.6,1569.7,3848.6,1507.7,3828.6z">
                                        </path>
                                        <path
                                            d="M227.7,2548.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,2561.6,289.7,2568.6,227.7,2548.6z">
                                        </path>
                                        <path
                                            d="M1507.7,2548.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,2561.6,1569.7,2568.6,1507.7,2548.6z">
                                        </path>
                                        <path
                                            d="M227.7,1268.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,1281.6,289.7,1288.6,227.7,1268.6z">
                                        </path>
                                        <path
                                            d="M1507.7,1268.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,1281.6,1569.7,1288.6,1507.7,1268.6z">
                                        </path>
                                    </g>
                                </svg>
                                <!-- END of SVG dots-->
                            </div>
                            <div class="dots-2">
                                <!-- SVG Dots-->
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 191.6 1215.4"
                                    style="enable-background: new 0 0 191.6 1215.4" xml:space="preserve">
                                    <g transform="translate(0.000000,1280.000000) scale(0.100000,-0.100000)">
                                        <path
                                            d="M227.7,12788.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,12801.6,289.7,12808.6,227.7,12788.6z">
                                        </path>
                                        <path
                                            d="M1507.7,12788.6c-151-50-253-216-222-362c25-119,136-230,254-255c194-41,395,142,375,339c-11,105-90,213-190,262        C1663.7,12801.6,1569.7,12808.6,1507.7,12788.6z">
                                        </path>
                                        <path
                                            d="M227.7,11508.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,11521.6,289.7,11528.6,227.7,11508.6z">
                                        </path>
                                        <path
                                            d="M1507.7,11508.6c-151-50-253-216-222-362c25-119,136-230,254-255c194-41,395,142,375,339c-11,105-90,213-190,262        C1663.7,11521.6,1569.7,11528.6,1507.7,11508.6z">
                                        </path>
                                        <path
                                            d="M227.7,10228.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,10241.6,289.7,10248.6,227.7,10228.6z">
                                        </path>
                                        <path
                                            d="M1507.7,10228.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,10241.6,1569.7,10248.6,1507.7,10228.6z">
                                        </path>
                                        <path
                                            d="M227.7,8948.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,8961.6,289.7,8968.6,227.7,8948.6z">
                                        </path>
                                        <path
                                            d="M1507.7,8948.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,8961.6,1569.7,8968.6,1507.7,8948.6z">
                                        </path>
                                        <path
                                            d="M227.7,7668.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,7681.6,289.7,7688.6,227.7,7668.6z">
                                        </path>
                                        <path
                                            d="M1507.7,7668.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,7681.6,1569.7,7688.6,1507.7,7668.6z">
                                        </path>
                                        <path
                                            d="M227.7,6388.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,6401.6,289.7,6408.6,227.7,6388.6z">
                                        </path>
                                        <path
                                            d="M1507.7,6388.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,6401.6,1569.7,6408.6,1507.7,6388.6z">
                                        </path>
                                        <path
                                            d="M227.7,5108.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,5121.6,289.7,5128.6,227.7,5108.6z">
                                        </path>
                                        <path
                                            d="M1507.7,5108.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,5121.6,1569.7,5128.6,1507.7,5108.6z">
                                        </path>
                                        <path
                                            d="M227.7,3828.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,3841.6,289.7,3848.6,227.7,3828.6z">
                                        </path>
                                        <path
                                            d="M1507.7,3828.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,3841.6,1569.7,3848.6,1507.7,3828.6z">
                                        </path>
                                        <path
                                            d="M227.7,2548.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,2561.6,289.7,2568.6,227.7,2548.6z">
                                        </path>
                                        <path
                                            d="M1507.7,2548.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,2561.6,1569.7,2568.6,1507.7,2548.6z">
                                        </path>
                                        <path
                                            d="M227.7,1268.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,1281.6,289.7,1288.6,227.7,1268.6z">
                                        </path>
                                        <path
                                            d="M1507.7,1268.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,1281.6,1569.7,1288.6,1507.7,1268.6z">
                                        </path>
                                    </g>
                                </svg>
                                <!-- END of SVG dots-->
                            </div>
                            <div class="dots-3">
                                <!-- SVG Dots-->
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 191.6 1215.4"
                                    style="enable-background: new 0 0 191.6 1215.4" xml:space="preserve">
                                    <g transform="translate(0.000000,1280.000000) scale(0.100000,-0.100000)">
                                        <path
                                            d="M227.7,12788.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,12801.6,289.7,12808.6,227.7,12788.6z">
                                        </path>
                                        <path
                                            d="M1507.7,12788.6c-151-50-253-216-222-362c25-119,136-230,254-255c194-41,395,142,375,339c-11,105-90,213-190,262        C1663.7,12801.6,1569.7,12808.6,1507.7,12788.6z">
                                        </path>
                                        <path
                                            d="M227.7,11508.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,11521.6,289.7,11528.6,227.7,11508.6z">
                                        </path>
                                        <path
                                            d="M1507.7,11508.6c-151-50-253-216-222-362c25-119,136-230,254-255c194-41,395,142,375,339c-11,105-90,213-190,262        C1663.7,11521.6,1569.7,11528.6,1507.7,11508.6z">
                                        </path>
                                        <path
                                            d="M227.7,10228.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,10241.6,289.7,10248.6,227.7,10228.6z">
                                        </path>
                                        <path
                                            d="M1507.7,10228.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,10241.6,1569.7,10248.6,1507.7,10228.6z">
                                        </path>
                                        <path
                                            d="M227.7,8948.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,8961.6,289.7,8968.6,227.7,8948.6z">
                                        </path>
                                        <path
                                            d="M1507.7,8948.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,8961.6,1569.7,8968.6,1507.7,8948.6z">
                                        </path>
                                        <path
                                            d="M227.7,7668.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,7681.6,289.7,7688.6,227.7,7668.6z">
                                        </path>
                                        <path
                                            d="M1507.7,7668.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,7681.6,1569.7,7688.6,1507.7,7668.6z">
                                        </path>
                                        <path
                                            d="M227.7,6388.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,6401.6,289.7,6408.6,227.7,6388.6z">
                                        </path>
                                        <path
                                            d="M1507.7,6388.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,6401.6,1569.7,6408.6,1507.7,6388.6z">
                                        </path>
                                        <path
                                            d="M227.7,5108.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,5121.6,289.7,5128.6,227.7,5108.6z">
                                        </path>
                                        <path
                                            d="M1507.7,5108.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,5121.6,1569.7,5128.6,1507.7,5108.6z">
                                        </path>
                                        <path
                                            d="M227.7,3828.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,3841.6,289.7,3848.6,227.7,3828.6z">
                                        </path>
                                        <path
                                            d="M1507.7,3828.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,3841.6,1569.7,3848.6,1507.7,3828.6z">
                                        </path>
                                        <path
                                            d="M227.7,2548.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,2561.6,289.7,2568.6,227.7,2548.6z">
                                        </path>
                                        <path
                                            d="M1507.7,2548.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,2561.6,1569.7,2568.6,1507.7,2548.6z">
                                        </path>
                                        <path
                                            d="M227.7,1268.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,1281.6,289.7,1288.6,227.7,1268.6z">
                                        </path>
                                        <path
                                            d="M1507.7,1268.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,1281.6,1569.7,1288.6,1507.7,1268.6z">
                                        </path>
                                    </g>
                                </svg>
                                <!-- END of SVG dots-->
                            </div>
                            <div class="dots-4">
                                <!-- SVG Dots-->
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 191.6 1215.4"
                                    style="enable-background: new 0 0 191.6 1215.4" xml:space="preserve">
                                    <g transform="translate(0.000000,1280.000000) scale(0.100000,-0.100000)">
                                        <path
                                            d="M227.7,12788.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,12801.6,289.7,12808.6,227.7,12788.6z">
                                        </path>
                                        <path
                                            d="M1507.7,12788.6c-151-50-253-216-222-362c25-119,136-230,254-255c194-41,395,142,375,339c-11,105-90,213-190,262        C1663.7,12801.6,1569.7,12808.6,1507.7,12788.6z">
                                        </path>
                                        <path
                                            d="M227.7,11508.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,11521.6,289.7,11528.6,227.7,11508.6z">
                                        </path>
                                        <path
                                            d="M1507.7,11508.6c-151-50-253-216-222-362c25-119,136-230,254-255c194-41,395,142,375,339c-11,105-90,213-190,262        C1663.7,11521.6,1569.7,11528.6,1507.7,11508.6z">
                                        </path>
                                        <path
                                            d="M227.7,10228.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,10241.6,289.7,10248.6,227.7,10228.6z">
                                        </path>
                                        <path
                                            d="M1507.7,10228.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,10241.6,1569.7,10248.6,1507.7,10228.6z">
                                        </path>
                                        <path
                                            d="M227.7,8948.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,8961.6,289.7,8968.6,227.7,8948.6z">
                                        </path>
                                        <path
                                            d="M1507.7,8948.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,8961.6,1569.7,8968.6,1507.7,8948.6z">
                                        </path>
                                        <path
                                            d="M227.7,7668.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,7681.6,289.7,7688.6,227.7,7668.6z">
                                        </path>
                                        <path
                                            d="M1507.7,7668.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,7681.6,1569.7,7688.6,1507.7,7668.6z">
                                        </path>
                                        <path
                                            d="M227.7,6388.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,6401.6,289.7,6408.6,227.7,6388.6z">
                                        </path>
                                        <path
                                            d="M1507.7,6388.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,6401.6,1569.7,6408.6,1507.7,6388.6z">
                                        </path>
                                        <path
                                            d="M227.7,5108.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,5121.6,289.7,5128.6,227.7,5108.6z">
                                        </path>
                                        <path
                                            d="M1507.7,5108.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,5121.6,1569.7,5128.6,1507.7,5108.6z">
                                        </path>
                                        <path
                                            d="M227.7,3828.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,3841.6,289.7,3848.6,227.7,3828.6z">
                                        </path>
                                        <path
                                            d="M1507.7,3828.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,3841.6,1569.7,3848.6,1507.7,3828.6z">
                                        </path>
                                        <path
                                            d="M227.7,2548.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,2561.6,289.7,2568.6,227.7,2548.6z">
                                        </path>
                                        <path
                                            d="M1507.7,2548.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,2561.6,1569.7,2568.6,1507.7,2548.6z">
                                        </path>
                                        <path
                                            d="M227.7,1268.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,1281.6,289.7,1288.6,227.7,1268.6z">
                                        </path>
                                        <path
                                            d="M1507.7,1268.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,1281.6,1569.7,1288.6,1507.7,1268.6z">
                                        </path>
                                    </g>
                                </svg>
                                <!-- END of SVG dots-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- berita baru -->
    <div class="container-fluid-news">
        <h2 class="news-titles">Berita</h2>
        <p>Informasi Terbaru Fakultas Teknik</p>
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

    <div class="announcementEvent-section">
        <!-- container announcement -->
        <div class="container-announcement">
            <!-- pengunguman -->
            <section class="announcements">
                <h2 class="title-announcement">Pengumuman</h2>
                @foreach ($pengumumans as $pengumuman)
                    <a href="{{ $pengumuman->link }}" class="card-link">
                        <div class="announcement">
                            <div class="date1">
                                <span>{{ $pengumuman->tanggal_pengumuman }}</span><br>{{ $pengumuman->bulan_pengumuman }}
                            </div>
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
    </div>

    <!-- Fitur 4 -->
    <!-- card pertama -->
    <section class="card-section">
        <h2 class="title-portal">Portal Akademik & Kemahasiswaan</h2>
        <div class="home-container">
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
                        <a href="https://www.instagram.com/himasi_unaya?igsh=MWcybTEzaHV5czA0dw==" target="_blank"
                            class="home-card pb-4">
                            <span class="fas fa-computer mt-3"></span>
                            <p class="home-h4 pt-4">HIMASI</p>
                            <p class="p1 text-center">
                                Himpunan Mahasiswa Sistem Informasi
                            </p>
                            <span class="fas fa-arrow-right"></span>
                        </a>
                    </div>
                    <div class="home-col2">
                        <a href="https://www.instagram.com/himatesya?igsh=MTR6em9wMG5uNjZtYQ==" target="_blank"
                            class="home-card pb-4">
                            <span class="fas fa-city mt-3"></span>
                            <p class="home-h4 pt-4">HIMATESYA</p>
                            <p class="p1 text-center">
                                Himpunan Mahasiswa Teknik Sipil
                            </p>
                            <span class="fas fa-arrow-right"></span>
                        </a>
                    </div>
                    <div class="home-col2">
                        <a href="https://www.instagram.com/hmm_unaya?igsh=N2Fkcms3M3NlODNt" target="_blank"
                            class="home-card pb-4">
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