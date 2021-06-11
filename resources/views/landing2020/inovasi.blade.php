@extends('layout.template2020')
@section('title')
    Inovasi Kreatif - ITCC 2020
@endsection

@section('navbar')
<ul class="nav navbar-nav menu">
    <li class="nav-item">
        <a class="nav-link active" href="{{url('/')}}">Beranda</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#jadwal">Jadwal</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#kontak">Kontak</a>
    </li>
    <li class="nav-item">
        <a class="nav-link " href="/faq">FAQ</a>
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
                       Inovasi Kreatif
                    </h3>
                </div>
            </div>
        </div>

        <div class="breadcrumbs">
            <ul>
                <li><a href="/">Home</a>  |   </li>
                <li><span>Inovasi Kreatif</span></li>
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
                Deskripsi
            </h3>
            <h5 style="color: #e2e2e2 !important">
                Inovasi Kreatif | ITCC 2020
            </h5>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-12">
                <p>
                    Lomba Inovasi Kreatif merupakan salah satu kategori lomba tingkat
SMA/SMK sederajat pada kompetisi tahunan ITCC yang diadakan oleh
Himpunan Mahasiswa Teknologi Informasi Fakultas Teknik Universitas
Udayana. ITCC 2020 ini mengambil tema “Creative Innovation Society 5.0 to
Prevent The Effects of Pandemic Outbreak”. Kompetisi inovasi kreatif ini bertujuan
untuk menjaring peserta SMA/SMK sederajat dari seluruh Indonesia dan ide-ide
kreatif mereka yang memiliki potensi dalam memecahkan masalah yang
terjadi di kehidupan sehari-hari dengan mempergunakan teknologi.
Lomba Inovasi Kreatif ditujukan untuk pelajar SMA/SMK/sederajat.
                <br> 
                    #YesWeCan
                </p>
                <a href="{{asset('guidebook/Guidebook_Lomba_Inovasi_Kreatif_ITCC_2020.pdf')}}" class="btn btn-sm btn-primary btn-rounded" style="margin-top: 10px;">
                    Download Guidebook
                </a>
                <!--<a href="{{url('/daftar/inovasikreatif')}}" class="btn btn-kuning btn-rounded" style="margin: 10px;">
                    Daftar
                </a>-->
            </div>
        </div>
    </div>
</section>
<!--event section end -->

<section class="inner_cover parallax-window pt100 pb100" data-parallax="scroll" data-image-src="{{asset('desain-2020/Background/Background-01_1.jpg')}}" id="jadwal">
    <div class="container">
        <div class="section_title mb50">
            <h3 class="title title-white"  style="margin-bottom: 0px !important">
               Time Schedule
            </h3>
            <h5 class="subtitle-kuning">
                Inovasi Kreatif | ITCC 2020
            </h5>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-md-12 col-12">
                <div class="kotakSchedule">
                    <div class="schedule50">
                        <div class="titleSchedule">
                            Pendaftaran
                        </div>
                        <div class="subtitleSchedule">
                            Pendaftaran
                        </div>
                    </div>
                    <div class="schedule50 scheduleRight">
                        <div class="ketSchedule">
                            <i class="fa fa-calendar"></i>
                            3 Agustus - 22 Oktober 2020
                        </div>
                        <div class="ketSchedule">
                            <i class="fa fa-trophy"></i>
                            Cabang Lomba Inovasi Kreatif
                        </div>
                    </div>
                </div>
                <div class="kotakSchedule">
                    <div class="schedule50">
                        <div class="titleSchedule">
                            Pengumpulan Proposal
                        </div>
                        <div class="subtitleSchedule">
                            Pengumpulan Proposal
                        </div>
                    </div>
                    <div class="schedule50 scheduleRight">
                        <div class="ketSchedule">
                            <i class="fa fa-calendar"></i>
                            22 Oktober 2020
                        </div>
                        <div class="ketSchedule">
                            <i class="fa fa-trophy"></i>
                            Cabang Lomba Inovasi Kreatif
                        </div>
                    </div>
                </div>
                <div class="kotakSchedule">
                    <div class="schedule50">
                        <div class="titleSchedule">
                            Pengumuman 5 Besar Finalis
                        </div>
                        <div class="subtitleSchedule">
                            Pengumuman 5 Besar Finalis
                        </div>
                    </div>
                    <div class="schedule50 scheduleRight">
                        <div class="ketSchedule">
                            <i class="fa fa-calendar"></i>
                            28 Oktober 2020
                        </div>
                        <div class="ketSchedule">
                            <i class="fa fa-trophy"></i>
                            Cabang Lomba Inovasi Kreatif
                        </div>
                    </div>
                </div>
                <div class="kotakSchedule">
                    <div class="schedule50">
                        <div class="titleSchedule">
                            Batas Pengumpulan Poster Finalis
                        </div>
                        <div class="subtitleSchedule">
                            Batas Pengumpulan Poster Finalis
                        </div>
                    </div>
                    <div class="schedule50 scheduleRight">
                        <div class="ketSchedule">
                            <i class="fa fa-calendar"></i>
                            5 November 2020
                        </div>
                        <div class="ketSchedule">
                            <i class="fa fa-trophy"></i>
                            Cabang Lomba Inovasi Kreatif
                        </div>
                    </div>
                </div>
                <div class="kotakSchedule">
                    <div class="schedule50">
                        <div class="titleSchedule">
                            Technical Meeting
                        </div>
                        <div class="subtitleSchedule">
                            Technical Meeting
                        </div>
                    </div>
                    <div class="schedule50 scheduleRight">
                        <div class="ketSchedule">
                            <i class="fa fa-calendar"></i>
                            5 November 2020
                        </div>
                        <div class="ketSchedule">
                            <i class="fa fa-trophy"></i>
                            Cabang Lomba Inovasi Kreatif
                        </div>
                    </div>
                </div>
                <div class="kotakSchedule">
                    <div class="schedule50">
                        <div class="titleSchedule">
                            Final Presentasi Lomba Inovasi Kreatif
                        </div>
                        <div class="subtitleSchedule">
                            Final Presentasi Lomba Inovasi Kreatif
                        </div>
                    </div>
                    <div class="schedule50 scheduleRight">
                        <div class="ketSchedule">
                            <i class="fa fa-calendar"></i>
                            6 November 2020
                        </div>
                        <div class="ketSchedule">
                            <i class="fa fa-trophy"></i>
                            Cabang Lomba Inovasi Kreatif
                        </div>
                    </div>
                </div>
                <div class="kotakSchedule">
                    <div class="schedule50">
                        <div class="titleSchedule">
                            Pengumuman Juara
                        </div>
                        <div class="subtitleSchedule">
                            Pengumuman Juara
                        </div>
                    </div>
                    <div class="schedule50 scheduleRight">
                        <div class="ketSchedule">
                            <i class="fa fa-calendar"></i>
                            6 November 2020
                        </div>
                        <div class="ketSchedule">
                            <i class="fa fa-trophy"></i>
                            Cabang Lomba Inovasi Kreatif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Price section-->
<section class="pt100 pb100">
    <div class="container">
        <div class="section_title mb50">
            <h3 class="title"  style="margin-bottom: 0px !important">
               Hadiah Lomba
            </h3>
            <h5 style="color: #e2e2e2 !important">
                Inovasi Kreatif | ITCC 2020
            </h5>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-4 col-12">
                <div class="price_box active">
                    <div class="price_highlight juara">
                        #1
                    </div>
                   <div class="price_header header_juara">
                       <h4>
                           Juara 1
                       </h4>
                       <h6>
                           Rp. 3.000.000
                       </h6>
                   </div>
                </div>
            </div>
            <div class="col-md-4 col-12">
                <div class="price_box active">
                    <div class="price_highlight juara">
                        #2
                    </div>
                   <div class="price_header header_juara">
                       <h4>
                           Juara 2
                       </h4>
                       <h6>
                           Rp. 2.000.000
                       </h6>
                   </div>
                </div>
            </div>
            <div class="col-md-4 col-12">
                <div class="price_box active">
                    <div class="price_highlight juara">
                        #3
                    </div>
                   <div class="price_header header_juara">
                       <h4>
                           Juara 3
                       </h4>
                       <h6>
                           Rp. 1.000.000
                       </h6>
                   </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--price section end -->
@endsection
