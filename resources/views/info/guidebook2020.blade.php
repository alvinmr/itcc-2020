@extends('layout.template2020')
@section('title')
    ITCC 2020 - Guidebook Lomba &amp; Informasi Pendaftaran
@endsection

@section('navbar')
<ul class="nav navbar-nav menu">
    <li class="nav-item">
        <a class="nav-link active" href="{{url('/')}}">Beranda</a>
    </li>
    <li class="nav-item">
        <a class="nav-link " href="/faq">FAQ</a>
    </li>
    <li class="nav-item">
        <a href="{{url('/login')}}" class="btn btn-kuning btn-rounded" style="margin: 10px;">
            LOGIN
        </a>
    </li>
</ul>
@endsection

@section('intro')
<!--page title section-->
<section class="inner_cover parallax-window" data-parallax="scroll" data-image-src="{{asset('desain-2020/grafis-banner.png')}}">
    <div class="overlay_dark"></div>
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-12">
                <div class="inner_cover_content">
                    <h3>
                       Guidebook Lomba &amp; Informasi Pendaftaran
                    </h3>
                </div>
            </div>
        </div>

        <div class="breadcrumbs">
            <ul>
                <li><a href="/">Home</a>  |   </li>
                <li><span>Guidebook Lomba &amp; Informasi Pendaftaran</span></li>
            </ul>
        </div>
    </div>
</section>
<!--page title section end-->


<!--events section -->
<section class="pt100 pb100">
    <div class="container">
       <div class="section_title">
            <h3 class="title" style="margin-bottom: 0px !important">
                Guidebook Lomba &amp; Informasi Pendaftaran
            </h3>
            <h5 style="color: #e2c000 !important">
                <i class="fa fa-calendar"></i> 24 Juni 2020
            </h5>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-12">
                <p>
                    Pendaftaran ITCC 2020 akan dibuka pada tanggal 13 Juli 2020 sampai 19 September 2020 untuk cabang lomba Mobile Application Development. Cabang Lomba Inovasi Kreatif dan Pengembangan Ide Bisnis TIK dibuka mulai tanggal 3 Agustus 2020 sampai 3 Oktober 2020.
                <br><br>
                    Guidebook cabang lomba Mobile App Development dapat diunduh pada tautan dibawah ini.
                </p>
                <!--<a href="{{asset('guidebook/Guidebook_Lomba_Inovasi_Kreatif_ITCC_2020.pdf')}}" class="red-link">Cabang Lomba Inovasi Kreatif</a><br>-->
                <a href="{{asset('guidebook/Guidebook_Lomba_Mobile_App_Development_ITCC_2020.pdf')}}">Cabang Lomba Mobile Application Development</a><br>
                <!--<a href="{{asset('guidebook/Guidebook_Lomba_Pengembangan_Ide_Bisnis_TIK_ITCC_2020.pdf')}}" class="red-link">Cabang Lomba Pengembangan Ide Bisnis TIK</a><br>-->
            </div>
        </div>
    </div>
</section>
<!--event section end -->
@endsection
