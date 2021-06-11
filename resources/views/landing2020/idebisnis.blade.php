@extends('layout.template2020')
@section('title')
    Ide Bisnis - ITCC 2020
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
                       Pengembangan Ide Bisnis TIK
                    </h3>
                </div>
            </div>
        </div>

        <div class="breadcrumbs">
            <ul>
                <li><a href="/">Home</a>  |   </li>
                <li><span>Pengembangan Ide Bisnis TIK</span></li>
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
                Pengembangan Ide Bisnis TIK | ITCC 2020
            </h5>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-12">
                <p>
                    Lomba Pengembangan Ide Bisnis TIK merupakan salah satu perlombaan
yang diadakan oleh Himpunan Mahasiswa Teknologi Informasi Fakultas Teknik
Universitas Udayana. Lomba ini merupakan salah satu kategori lomba dari ITCC untuk
mengajak masyarakat Indonesia untuk mengembangkan ide bisnis dengan
memanfaatkan teknologi saat ini.
Pengembangan Ide Bisnis TIK diperuntukkan untuk kalangan umum dan
mahasiswa dengan usia maksimal 24 tahun diseluruh Indonesia. Peserta
berkompetisi dalam bentuk tim yang beranggotakan minimal dua orang dan maksimal
tiga orang.
                <br> 
                    #YesWeCan
                </p>
                <a href="{{asset('guidebook/Guidebook_Lomba_Pengembangan_Ide_Bisnis_TIK_ITCC_2020.pdf')}}" class="btn btn-sm btn-primary btn-rounded" style="margin-top: 10px;">
                    Download Guidebook
                </a>
                <!--<a href="{{url('/daftar/idebisnis')}}" class="btn btn-kuning btn-rounded" style="margin: 10px;">
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
                Ide Bisnis | ITCC 2020
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
                            03 Agustus s.d 22 Oktober 2020
                        </div>
                        <div class="ketSchedule">
                            <i class="fa fa-trophy"></i>
                            Cabang Lomba Pengembangan Ide Bisnis TIK
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
                            28 September s.d 22 Oktober 2020
                        </div>
                        <div class="ketSchedule">
                            <i class="fa fa-trophy"></i>
                            Cabang Lomba Pengembangan Ide Bisnis TIK
                        </div>
                    </div>
                </div>
                <div class="kotakSchedule">
                    <div class="schedule50">
                        <div class="titleSchedule">
                            Pengumuman Finalis
                        </div>
                        <div class="subtitleSchedule">
                            Pengumuman Finalis
                        </div>
                    </div>
                    <div class="schedule50 scheduleRight">
                        <div class="ketSchedule">
                            <i class="fa fa-calendar"></i>
                            28 Oktober 2020
                        </div>
                        <div class="ketSchedule">
                            <i class="fa fa-trophy"></i>
                            Cabang Lomba Pengembangan Ide Bisnis TIK
                        </div>
                    </div>
                </div>
                <div class="kotakSchedule">
                    <div class="schedule50">
                        <div class="titleSchedule">
                            Pengumpulan Poster Finalis
                        </div>
                        <div class="subtitleSchedule">
                            Pengumpulan Poster Finalis
                        </div>
                    </div>
                    <div class="schedule50 scheduleRight">
                        <div class="ketSchedule">
                            <i class="fa fa-calendar"></i>
                            28 Oktober s.d 31 Oktober 2020
                        </div>
                        <div class="ketSchedule">
                            <i class="fa fa-trophy"></i>
                            Cabang Lomba Pengembangan Ide Bisnis TIK
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
                            05 November 2020
                        </div>
                        <div class="ketSchedule">
                            <i class="fa fa-trophy"></i>
                            Cabang Lomba Pengembangan Ide Bisnis TIK
                        </div>
                    </div>
                </div>
                <div class="kotakSchedule">
                    <div class="schedule50">
                        <div class="titleSchedule">
                            Final
                        </div>
                        <div class="subtitleSchedule">
                            Final
                        </div>
                    </div>
                    <div class="schedule50 scheduleRight">
                        <div class="ketSchedule">
                            <i class="fa fa-calendar"></i>
                            06 November 2020
                        </div>
                        <div class="ketSchedule">
                            <i class="fa fa-trophy"></i>
                            Cabang Lomba Pengembangan Ide Bisnis TIK
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
                Pengembangan Ide Bisnis TIK | ITCC 2020
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
            <div class="col-md-4 col-12">
                <div class="price_box active">
                    <div class="price_highlight juara">
                        #Favorit
                    </div>
                   <div class="price_header header_juara">
                       <h4>
                           Juara Favorit
                       </h4>
                       <h6>
                           Rp. 500.000
                       </h6>
                   </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--price section end -->
@endsection
