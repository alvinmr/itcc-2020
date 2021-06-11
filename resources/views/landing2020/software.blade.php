@extends('layout.template2020')
@section('title')
    Mobile App Development - ITCC 2020
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
                       Mobile Application Development
                    </h3>
                </div>
            </div>
        </div>

        <div class="breadcrumbs">
            <ul>
                <li><a href="/">Home</a>  |   </li>
                <li><span>Mobile Application Development</span></li>
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
                Mobile Applicaion Development | ITCC 2020
            </h5>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-12">
                <p>
                    Lomba Pengembangan Aplikasi Mobile merupakan salah satu perlombaan
yang diselenggarakan dalam kegiatan ITCC 2020, kompetisi ini
membangun Aplikasi Mobile berbasis Platform Android yang ditujukan bagi
mahasiswa aktif sarjana dan diploma di seluruh Indonesia untuk menuangkan ide,
kreativitas, inovasinya serta memberikan terobosan baru dalam produk aplikasi
mobile dalam platform Android. Peserta Lomba Pengembangan Aplikasi Mobile
berkompetisi dalam bentuk tim yang beranggotakan minimal dua orang dan
maksimal tiga orang. 
                <br> 
                    #YesWeCan
                </p>
                <a href="{{asset('guidebook/Guidebook_Lomba_Mobile_App_Development_ITCC_2020.pdf')}}" class="btn btn-sm btn-primary btn-rounded" style="margin-top: 10px;">
                    Download Guidebook
                </a>
                <a href="{{url('/daftar/mobileappdevelopment')}}" class="btn btn-kuning btn-rounded" style="margin: 10px;">
                    Daftar
                </a>
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
                Mobile App Development | ITCC 2020
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
                            Pendaftaran secara online dibuka pada tanggal
                        </div>
                    </div>
                    <div class="schedule50 scheduleRight">
                        <div class="ketSchedule">
                            <i class="fa fa-calendar"></i>
                            13 Juli - 3 Oktober 2020
                        </div>
                        <div class="ketSchedule">
                            <i class="fa fa-trophy"></i>
                            Lomba Mobile Application Development
                        </div>
                    </div>
                </div>
                <div class="kotakSchedule">
                    <div class="schedule50">
                        <div class="titleSchedule">
                            Babak Penyisihan
                        </div>
                        <div class="subtitleSchedule">
                            Pengumpulan proposal secara online dibuka dari tanggal
                        </div>
                    </div>
                    <div class="schedule50 scheduleRight">
                        <div class="ketSchedule">
                            <i class="fa fa-calendar"></i>
                            13 Juli - 3 Oktober 2020
                        </div>
                        <div class="ketSchedule">
                            <i class="fa fa-trophy"></i>
                            Lomba Mobile Application Development
                        </div>
                    </div>
                </div>
                <div class="kotakSchedule">
                    <div class="schedule50">
                        <div class="titleSchedule">
                            Pengumuman Finalis
                        </div>
                        <div class="subtitleSchedule">
                            Pengumuman melalui website dan media sosial pada tanggal
                        </div>
                    </div>
                    <div class="schedule50 scheduleRight">
                        <div class="ketSchedule">
                            <i class="fa fa-calendar"></i>
                            10 Oktober 2020
                        </div>
                        <div class="ketSchedule">
                            <i class="fa fa-trophy"></i>
                            Lomba Mobile Application Development
                        </div>
                    </div>
                </div>
                <div class="kotakSchedule">
                    <div class="schedule50">
                        <div class="titleSchedule">
                            Babak Pre-Final
                        </div>
                        <div class="subtitleSchedule">
                            Babak pre-final akan dilaksanakan pada
                        </div>
                    </div>
                    <div class="schedule50 scheduleRight">
                        <div class="ketSchedule">
                            <i class="fa fa-calendar"></i>
                            11 Oktober - 23 Oktober 2020
                        </div>
                        <div class="ketSchedule">
                            <i class="fa fa-trophy"></i>
                            Lomba Mobile Application Development
                        </div>
                    </div>
                </div>
                <div class="kotakSchedule">
                    <div class="schedule50">
                        <div class="titleSchedule">
                            Babak Online Expo
                        </div>
                        <div class="subtitleSchedule">
                            Online expo akan dilaksanakan pada
                        </div>
                    </div>
                    <div class="schedule50 scheduleRight">
                        <div class="ketSchedule">
                            <i class="fa fa-calendar"></i>
                            25 Oktober - 6 November 2020
                        </div>
                        <div class="ketSchedule">
                            <i class="fa fa-trophy"></i>
                            Lomba Mobile Application Development
                        </div>
                    </div>
                </div>
                <div class="kotakSchedule">
                    <div class="schedule50">
                        <div class="titleSchedule">
                            Technical Meeting
                        </div>
                        <div class="subtitleSchedule">
                            Technical Meeting secara online akan dilaksanakan pada tanggal
                        </div>
                    </div>
                    <div class="schedule50 scheduleRight">
                        <div class="ketSchedule">
                            <i class="fa fa-calendar"></i>
                            5 November 2020
                        </div>
                        <div class="ketSchedule">
                            <i class="fa fa-trophy"></i>
                            Lomba Mobile Application Development
                        </div>
                    </div>
                </div>
                <div class="kotakSchedule">
                    <div class="schedule50">
                        <div class="titleSchedule">
                            Babak Final
                        </div>
                        <div class="subtitleSchedule">
                            Babak Final akan dilaksanakan secara online pada tanggal
                        </div>
                    </div>
                    <div class="schedule50 scheduleRight">
                        <div class="ketSchedule">
                            <i class="fa fa-calendar"></i>
                            6 November 2020
                        </div>
                        <div class="ketSchedule">
                            <i class="fa fa-trophy"></i>
                            Lomba Mobile Application Development
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
                Mobile Application Development | ITCC 2020
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
                    <!--<div class="price_features">
                        <ul>
                            <li>
                                Hosting Dewaweb (Scout) senilai Rp. 720.000,-
                            </li>
                            <li>
                                1 Buah e-Voucher, senilai Rp. 200.000,-
                            </li>
                            <li>
                                Sertifikat
                            </li>
                            <li>
                                Plakat
                            </li>
                            <li>
                                hadiah menarik lainnya
                            </li>
                        </ul>
                    </div>-->
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
