<!DOCTYPE html>
<html lang="en">

@include('landing2020.parts.head')

<body>
<!--<div class="loader">
    <div class="loader-outter"></div>
    <div class="loader-inner"></div>
</div>-->

    @include('landing2020.parts.header')
    <!--cover section slider -->
    <section id="home" class="home-cover">
        <div class="cover_slider owl-carousel owl-theme" style="background: rgb(0,0,0);
     background: linear-gradient(90deg, rgba(0,0,0,1) 26%, rgba(24,3,4,1) 39%, rgba(188,25,31,1) 88%);">
           
            <div class="cover_item" style="background: url('desain-2020/grafis-banner.png');">
                <div class="slider_content">
                    <div class="slider-content-inner">
                        <div class="container">
                            <div class="slider-content-center" style="max-width: 1500px;">
                                <h2 class="banner-itcc cover-title">
                                    INFORMATION TECHNOLOGY CREATIVE COMPETITION
                                </h2>
                                <strong class="banner-tema cover-xl-text">Creative Innovation Society 5.0 <br>to Prevent The Effects of <br>Pandemic Outbreak</strong><br>
                                <p class="cover-date">
                                    Main Event  <i class="fa fa-calendar"></i> 6 November 2020
                                </p>
                                <a href="#about" class=" btn btn-primary btn-rounded" >
                                    More Information
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cover_item" style="background: url('desain-2020/grafis-banner.png');">
                 <div class="slider_content">
                    <div class="slider-content-inner">
                        <div class="container">
                            <div class="slider-content-left">
                                <h2 class="cover-title">
                                    LETS JOIN US
                                </h2>
                                <strong class="cover-xl-text" style="text-transform: none;">#YesWeCan</strong>
                                <p class="cover-date">
                                    Main Event  <i class="fa fa-calendar"></i> 6 November 2020
                                </p>
                                <a href="#about" class=" btn btn-primary btn-rounded" >
                                    More Information
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cover_nav">
            <ul class="cover_dots">
                <li class="active" data="0"><span>1</span></li>
                <li  data="1"><span>2</span></li>
            </ul>
        </div>
    </section>
    <!--cover section slider end -->

    <!--event info -->
    <section class="pt55 pb100" id="about">
        <div class="container">
           <div class="section_title">
                <h3 class="title">
                    About the event
                </h3>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-md-6">
                    <h5>CREATIVE INNOVATION SOCIETY 5.0 TO PREVENT THE EFFECTS OF PANDEMIC OUTBREAK</h5>
                    <p>
                        Information Technology Creative Competition (ITCC) adalah kompetisi bidang Teknologi Informasi yang diselenggarakan oleh Himpunan Mahasiswa Teknologi Informasi (HMTI) Universitas Udayana. ITCC 2020 hadir dengan 3 cabang lomba yang bertujuan untuk menumbuhkan kreativitas peserta khususnya dalam bidang TIK dengan menciptakan inovasi baru untuk memecahkan permasalahan yang ada di masyarakat. <br> 
                        <span class="gradient-yellow-text" style="margin-top:20px;">#YesWeCan</span>
                    </p>
                </div>
                <div class="col-12 col-md-6 videoteaser-frame">
                    <iframe class="videoteaser-bottom" src="https://www.youtube.com/embed/54_wPOAQAtM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>

    <!--event countdown -->
    <section class="bg-img pt70 pb70 countdown-bg">
        <div class="overlay_dark"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10">
                    <h4 class="mb30 text-center color-light">Road to Main Event ITCC 2020</h4>
                    <div class="countdown"></div>
                </div>
            </div>
        </div>
    </section>
    <!--event count down end-->

    <!-- MASKOT -->
    <section class="pt100 pb100" style="background-color:#070707;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-6" style="text-align: center">
                    <img src="desain-2020/maskot.png" alt="" style="height: 350px; display: inline-block !important;">
                </div>
                <div class="col-12 col-md-6">
                    <h3 class="title" style="font-size: 30px; margin-top: 40px;">
                        <span style="color: #FFF; font-size: 20px;">MEET OUR MASCOT, </span> <br>CION!
                    </h3>
                    <p style="font-size: 17px">
                        Cion (dibaca: sion) berasal dari kata 'itcC Online'. Cion mengajak masyarakat khususnya pelajar untuk  menjadi solusi dalam mengatasi efek wabah pandemi dengan inovasi teknologi.
                        <br> 
                        <span class="gradient-yellow-text">#YesWeCan</span>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- KATEGORI LOMBA -->
    <section class="inner_cover parallax-window pt100 pb100" data-parallax="scroll" data-image-src="desain-2020/Background/Background-02.jpg" id="lomba">
        <div class="container">
            <div class="section_title">
                <h3 class="title title-white" style="margin-bottom: 0px !important">
                    KATEGORI LOMBA
                </h3>
                <h5 class="subtitle-kuning">
                    Information Technology Creative Competition 2020
                </h5>
            </div>

            <!--event features-->
            <div class="row justify-content-center mt30">
                <div class="col-12 col-md-4 col-lg-4">
                    <div class="icon_box_one" id="inovasi-box">
                        <img src="desain-2020/Simbol-Lomba/inovasi-kreatif.png" alt="" id="logo-inovasi-red">
                        <img src="desain-2020/Simbol-Lomba/inovasi-kreatif-w.png" alt="" id="logo-inovasi-white" class="hide">
                        <div class="content">
                            <h5>LOMBA</h5>
                            <h4>Inovasi Kreatif</h4>
                            <a href="{{url('/daftar/inovasikreatif')}}" class="btn btn-kuning btn-rounded" style="padding: 5px 20px;color:#fff;margin-bottom:5px;">
                                Daftar
                            </a>
                            <p>
                                Cabang Lomba <b>Inovasi Kreatif</b> diperuntukan kepada siswa SMA/SMK/Sederajat se-Indonesia.
                            </p>
                            <a href="/landing/inovasiKreatif" class="gradient-yellow-text">read more</a>
                            
                            <a href="{{asset('guidebook/Guidebook_Lomba_Inovasi_Kreatif_ITCC_2020.pdf')}}" style="float:right" class="gradient-yellow-text">Download Guidebook</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-4 col-lg-4">
                    <div class="icon_box_one" id="softdev-box">
                        <img src="desain-2020/Simbol-Lomba/software-development.png" alt="" id="logo-softdev-red">
                        <img src="desain-2020/Simbol-Lomba/software-development-w.png" alt="" id="logo-softdev-white" class="hide">
                        <div class="content">
                            <h5>LOMBA</h5>
                            <h4>Mobile App Development</h4>
                            <a href="{{url('/daftar/mobileappdevelopment')}}" class="btn btn-kuning btn-rounded" style="padding: 5px 20px;color:#fff;margin-bottom:5px;">
                                Daftar
                            </a>
                            <p>
                                Cabang Lomba <b>Mobile App Development</b> diperuntukan kepada kalangan mahasiswa aktif sarjana dan diploma di seluruh Indonesia.
                            </p>
                            <a href="/landing/mobileAppDevelopment" class="gradient-yellow-text">read more</a>
                            
                            <a href="{{asset('guidebook/Guidebook_Lomba_Mobile_App_Development_ITCC_2020.pdf')}}" style="float:right" class="gradient-yellow-text">Download Guidebook</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-4 col-lg-4">
                    <div class="icon_box_one" id="idebisnis-box">
                        <img src="desain-2020/Simbol-Lomba/ide-bisnis.png"s alt="" id="logo-idebisnis-red">
                        <img src="desain-2020/Simbol-Lomba/ide-bisnis-w.png"s alt="" id="logo-idebisnis-white" class="hide">
                        <div class="content">
                            <h5>LOMBA</h5>
                            <h4>Pengembangan Ide Bisnis TIK</h4>
                            <a href="{{url('/daftar/idebisnis')}}" class="btn btn-kuning btn-rounded" style="padding: 5px 20px;color:#fff;margin-bottom:5px;">
                                Daftar
                            </a>
                            <p>
                                Cabang Lomba <b>Pengembangan Ide Bisnis TIK</b> diperuntukan kepada kalangan Mahasiswa/Umum (maksismal 24 tahun) seluruh Indonesia.
                            </p>
                            <a href="/landing/ideBisnis" class="gradient-yellow-text">read more</a>
                            
                            <a href="{{asset('guidebook/Guidebook_Lomba_Pengembangan_Ide_Bisnis_TIK_ITCC_2020.pdf')}}" style="float:right" class="gradient-yellow-text">Download Guidebook</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--event info end -->

    <!--speaker section-->
    <section class="pt100 pb100" id="jadwal">
        <div class="container">
            <div class="section_title mb50">
                <h3 class="title "  style="margin-bottom: 0px !important">
                   Time Schedule
                </h3>
                <h5 style="color: #e2e2e2 !important">
                    Information Technology Creative Competition 2020
                </h5>
            </div>
            
            <div class="row justify-content-center">
                <div class="col-md-12 col-12">
                    <ul class="nav ts" style="margin-bottom: 30px;">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">
                                LOMBA <br>
                                <span>Inovasi Kreatif</span>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">
                                LOMBA <br>
                                <span>Mobile App Development</span>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">
                                LOMBA <br>
                                <span>Pengembangan Ide Bisnis TIK</span>
                            </a>
                        </li>
                    </ul>
                    
                    <!--jadwal inovasi kreatif-->
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
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
                        
                        <!--jadwal mobile app-->
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
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
                        
                        <!--jadwal ide bisnis-->
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
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
            </div>
        </div>
    </section>
    <!--speaker section end -->

    <!--Price section-->
    <section class="inner_cover parallax-window pt100 pb100" data-parallax="scroll" data-image-src="desain-2020/Background/Background-03.jpg" id="informasi">
        <div class="container">
            <div class="section_title mb50">
                <h3 class="title title-white"  style="margin-bottom: 0px !important">
                    Informasi Terkini
                </h3>
                <h5 class="subtitle-kuning">
                    Information Technology Creative Competition 2020
                </h5>
            </div>

            <div class="row">
                <div class="owl-carousel owl-theme owl-informasi">
                    <div class="item">
                       <div class="col-md-12 col-12">
                           <div class="price_box active">
                                <div class="price_highlight">
                                    Terbaru
                                </div>
                                <div class="price_header">
                                   <h4>
                                       Perubahan Jadwal Lomba Mobile App, Pengembangan Ide Bisnis TIK &amp; Inovasi Kreatif
                                       </h4>
                                   <h6>
                                        <i class="fa fa-calendar"></i>
                                        20 September 2020
                                   </h6>
                                   <p>
                                        Telah ditetapkan perubahan jadwal dan perpanjangan pendaftaran untuk masing-masing lomba. Jadwal terbaru juga telah tercantum pada guidebook yang dapat diunduh dengan melihat detail info ini.
                                    </p>
                                </div>
                                <div class="price_footer">
                                    <a href="{{url('info/3')}}" class="btn btn-primary btn-rounded">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                       <div class="col-md-12 col-12">
                            <div class="price_box">
                                <div class="price_highlight">
                                    13 Juli 2020
                                </div>
                                <div class="price_header">
                                   <h4>
                                       Guidebook Lomba Mobile App & Informasi Pendaftaran
                                       </h4>
                                   <h6>
                                        <i class="fa fa-calendar"></i>
                                        13 Juli 2020
                                   </h6>
                                   <p>
                                        Pendaftaran ITCC 2020 akan dibuka pada tanggal 13 Juli 2020 untuk Lomba Mobile Application Development dan 3 Agustus 2020 untuk lomba lainnya. Lihat detail info ini untuk mendownload guidebook.
                                    </p>
                                </div>
                                <div class="price_footer">
                                    <a href="{{url('info/1')}}" class="btn btn-primary btn-rounded">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="item">
                        <div class="col-md-12 col-12">
                            <div class="price_box active">
                                <div class="price_header">
                                   <h4>
                                       Plugin dan Library Lomba Desain Web
                                   </h4>
                                   <h6>
                                        <i class="fa fa-calendar"></i>
                                        1 Juli 2020
                                   </h6>
                                   <p>
                                        Plugin dan Library lomba desain web sudah dapat didownload. Lihat detail info ini untuk mendownload Plugin dan Library.
                                    </p>
                                </div>
                                <div class="price_footer">
                                    <a href="{{url('info/2')}}" class="btn btn-primary btn-rounded">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </section>
    <!--price section end -->
    
    <!--gallery section-->
    <section class="pt100 pb100" id="jadwal">
        <div class="container">
            <div class="section_title mb50">
                <h3 class="title "  style="margin-bottom: 0px !important">
                   ITCC GALLERY
                </h3>
                <h5 style="color: #e2e2e2 !important">
                    ITCC 2019 MOMENTS
                </h5>
            </div>
            
            <ul class="nav ts" style="margin-bottom: 30px;">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" onclick="competitionGallery()">
                        COMPETITION <br>
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" onclick="sharingGallery()">
                        SHARING SESSION <br>
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" onclick="expoGallery()">
                        EXPO <br>
                    </a>
                </li>
                <li class="nav-item" role="presentation" style="margin-top:10px;">
                    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" onclick="openingGallery()">
                        OPENING & ACCOUSTIC SESSION <br>
                    </a>
                </li>
            </ul>
            
            <div class="row justify-content-center">
                
                <div class="col-md-12 col-12" id="competitionGallery">
                   
                   <div id="multi-item-example" class="carousel slide carousel-multi-item carousel-multi-item-2" data-ride="carousel">

                      <!--Controls-->
                      <div class="controls-top" style="text-align: center; margin-bottom: 20px;">
                        <a class="black-text" href="#multi-item-example" data-slide="prev"><i class="fa fa-angle-left fa-3x pr-3"></i></a>
                        <a class="black-text" href="#multi-item-example" data-slide="next"><i class="fa fa-angle-right fa-3x pl-3"></i></a>
                      </div>
                      <!--/.Controls-->

                      <!--Slides-->
                      <div class="carousel-inner" role="listbox">

                        <!--First slide-->
                        <div class="carousel-item active">

                          <div class="col-md-3 mb-3">
                            <div class="card">
                              <img class="img-fluid" src="{{asset('assets2020/img/gallery/competition/comp1.jpg')}}"
                                alt="Competition" onclick="toggle(this)">
                            </div>
                          </div>

                          <div class="col-md-3 mb-3">
                            <div class="card">
                              <img class="img-fluid" src="{{asset('assets2020/img/gallery/competition/comp2.jpg')}}"
                                alt="Card image cap" onclick="toggle(this)">
                            </div>
                          </div>

                          <div class="col-md-3 mb-3">
                            <div class="card">
                              <img class="img-fluid" src="{{asset('assets2020/img/gallery/competition/comp3.jpg')}}"
                                alt="Card image cap" onclick="toggle(this)">
                            </div>
                          </div>

                          <div class="col-md-3 mb-3">
                            <div class="card">
                              <img class="img-fluid" src="{{asset('assets2020/img/gallery/competition/comp4.jpg')}}"
                                alt="Card image cap" onclick="toggle(this)">
                            </div>
                          </div>

                        </div>
                        <!--/.First slide-->

                        <!--Second slide-->
                        <div class="carousel-item">

                          <div class="col-md-3 mb-3">
                            <div class="card">
                              <img class="img-fluid" src="{{asset('assets2020/img/gallery/competition/comp5.jpg')}}"
                                alt="Card image cap" onclick="toggle(this)">
                            </div>
                          </div>

                          <div class="col-md-3 mb-3">
                            <div class="card">
                              <img class="img-fluid" src="{{asset('assets2020/img/gallery/competition/comp6.jpg')}}"
                                alt="Card image cap" onclick="toggle(this)">
                            </div>
                          </div>

                          <div class="col-md-3 mb-3">
                            <div class="card">
                              <img class="img-fluid" src="{{asset('assets2020/img/gallery/competition/comp7.jpg')}}"
                                alt="Card image cap" onclick="toggle(this)">
                            </div>
                          </div>

                          <div class="col-md-3 mb-3">
                            <div class="card">
                              <img class="img-fluid" src="{{asset('assets2020/img/gallery/competition/comp8.jpg')}}"
                                alt="Card image cap" onclick="toggle(this)">
                            </div>
                          </div>

                        </div>
                        <!--/.Second slide-->

                        <!--Third slide-->
                        <div class="carousel-item">

                          <div class="col-md-3 mb-3">
                            <div class="card">
                              <img class="img-fluid" src="{{asset('assets2020/img/gallery/competition/comp9.jpg')}}"
                                alt="Card image cap" onclick="toggle(this)">
                            </div>
                          </div>

                          <div class="col-md-3 mb-3">
                            <div class="card">
                              <img class="img-fluid" src="{{asset('assets2020/img/gallery/competition/comp10.jpg')}}"
                                alt="Card image cap" onclick="toggle(this)">
                            </div>
                          </div>

                          <div class="col-md-3 mb-3">
                            <div class="card">
                              <img class="img-fluid" src="{{asset('assets2020/img/gallery/competition/comp11.jpg')}}"
                                alt="Card image cap" onclick="toggle(this)">
                            </div>
                          </div>

                          <div class="col-md-3 mb-3">
                            <div class="card">
                              <img class="img-fluid" src="{{asset('assets2020/img/gallery/competition/comp12.jpg')}}"
                                alt="Card image cap" onclick="toggle(this)">
                            </div>
                          </div>

                        </div>
                        <!--/.Third slide-->
                        
                        <!--Third slide-->
                        <div class="carousel-item">

                          <div class="col-md-3 mb-3">
                            <div class="card">
                              <img class="img-fluid" src="{{asset('assets2020/img/gallery/competition/comp13.jpg')}}"
                                alt="Card image cap" onclick="toggle(this)">
                            </div>
                          </div>

                          <div class="col-md-3 mb-3">
                            <div class="card">
                              <img class="img-fluid" src="{{asset('assets2020/img/gallery/competition/comp14.jpg')}}"
                                alt="Card image cap" onclick="toggle(this)">
                            </div>
                          </div>

                          <div class="col-md-3 mb-3">
                            <div class="card">
                              <img class="img-fluid" src="{{asset('assets2020/img/gallery/competition/comp15.jpg')}}"
                                alt="Card image cap" onclick="toggle(this)">
                            </div>
                          </div>

                          <div class="col-md-3 mb-3">
                            <div class="card">
                              <img class="img-fluid" src="{{asset('assets2020/img/gallery/competition/comp16.jpg')}}"
                                alt="Card image cap" onclick="toggle(this)">
                            </div>
                          </div>

                        </div>
                        <!--/.Third slide-->
                        
                        <!--Third slide-->
                        <div class="carousel-item">

                          <div class="col-md-3 mb-3">
                            <div class="card">
                              <img class="img-fluid" src="{{asset('assets2020/img/gallery/competition/comp17.jpg')}}"
                                alt="Card image cap" onclick="toggle(this)">
                            </div>
                          </div>

                          <div class="col-md-3 mb-3">
                            <div class="card">
                              <img class="img-fluid" src="{{asset('assets2020/img/gallery/competition/comp18.jpg')}}"
                                alt="Card image cap" onclick="toggle(this)">
                            </div>
                          </div>

                          <div class="col-md-3 mb-3">
                            <div class="card">
                              <img class="img-fluid" src="{{asset('assets2020/img/gallery/competition/comp28.jpg')}}"
                                alt="Card image cap" onclick="toggle(this)">
                            </div>
                          </div>

                          <div class="col-md-3 mb-3">
                            <div class="card">
                              <img class="img-fluid" src="{{asset('assets2020/img/gallery/competition/comp29.jpg')}}"
                                alt="Card image cap" onclick="toggle(this)">
                            </div>
                          </div>

                        </div>
                        <!--/.Third slide-->
                        
                        <!--Third slide-->
                        <div class="carousel-item">

                          <div class="col-md-3 mb-3">
                            <div class="card">
                              <img class="img-fluid" src="{{asset('assets2020/img/gallery/competition/comp21.jpg')}}"
                                alt="Card image cap" onclick="toggle(this)">
                            </div>
                          </div>

                          <div class="col-md-3 mb-3">
                            <div class="card">
                              <img class="img-fluid" src="{{asset('assets2020/img/gallery/competition/comp22.jpg')}}"
                                alt="Card image cap" onclick="toggle(this)">
                            </div>
                          </div>

                          <div class="col-md-3 mb-3">
                            <div class="card">
                              <img class="img-fluid" src="{{asset('assets2020/img/gallery/competition/comp23.jpg')}}"
                                alt="Card image cap" onclick="toggle(this)">
                            </div>
                          </div>

                          <div class="col-md-3 mb-3">
                            <div class="card">
                              <img class="img-fluid" src="{{asset('assets2020/img/gallery/competition/comp24.jpg')}}"
                                alt="Card image cap" onclick="toggle(this)">
                            </div>
                          </div>

                        </div>
                        <!--/.Third slide-->
                        
                        <!--Third slide-->
                        <div class="carousel-item">

                          <div class="col-md-3 mb-3">
                            <div class="card">
                              <img class="img-fluid" src="{{asset('assets2020/img/gallery/competition/comp25.jpg')}}"
                                alt="Card image cap" onclick="toggle(this)">
                            </div>
                          </div>

                          <div class="col-md-3 mb-3">
                            <div class="card">
                              <img class="img-fluid" src="{{asset('assets2020/img/gallery/competition/comp26.jpg')}}"
                                alt="Card image cap" onclick="toggle(this)">
                            </div>
                          </div>

                        </div>
                        <!--/.Third slide-->

                      </div>
                      <!--/.Slides-->

                    </div>
                    <!--/.Carousel Wrapper-->
                   
                </div>
                
                <div class="col-md-12 col-12" id="sharingGallery" style="display:none">
                    
                    <div id="multi-item-example2" class="carousel slide carousel-multi-item carousel-multi-item-2" data-ride="carousel">

                      <!--Controls-->
                      <div class="controls-top" style="text-align: center; margin-bottom: 20px;">
                        <a class="black-text" href="#multi-item-example" data-slide="prev"><i class="fa fa-angle-left fa-3x pr-3"></i></a>
                        <a class="black-text" href="#multi-item-example" data-slide="next"><i class="fa fa-angle-right fa-3x pl-3"></i></a>
                      </div>
                      <!--/.Controls-->

                      <!--Slides-->
                      <div class="carousel-inner" role="listbox">

                        <!--First slide-->
                        <div class="carousel-item active">

                          <div class="col-md-3 mb-3">
                            <div class="card">
                              <img class="img-fluid" src="{{asset('assets2020/img/gallery/sharing session/sharing1.jpg')}}"
                                alt="Card image cap" onclick="toggle(this)">
                            </div>
                          </div>

                        </div>
                        <!--/.First slide-->

                        <!--Second slide-->
                        <div class="carousel-item">

                          <div class="col-md-3 mb-3">
                            <div class="card">
                              <img class="img-fluid" src="{{asset('assets2020/img/gallery/sharing session/sharing5.jpg')}}"
                                alt="Card image cap" onclick="toggle(this)">
                            </div>
                          </div>

                          <div class="col-md-3 mb-3">
                            <div class="card">
                              <img class="img-fluid" src="{{asset('assets2020/img/gallery/sharing session/sharing6.jpg')}}"
                                alt="Card image cap" onclick="toggle(this)">
                            </div>
                          </div>

                          <div class="col-md-3 mb-3">
                            <div class="card">
                              <img class="img-fluid" src="{{asset('assets2020/img/gallery/sharing session/sharing7.jpg')}}"
                                alt="Card image cap" onclick="toggle(this)">
                            </div>
                          </div>

                          <div class="col-md-3 mb-3">
                            <div class="card">
                              <img class="img-fluid" src="{{asset('assets2020/img/gallery/sharing session/sharing8.jpg')}}"
                                alt="Card image cap" onclick="toggle(this)">
                            </div>
                          </div>

                        </div>
                        <!--/.Second slide-->

                        <!--Third slide-->
                        <div class="carousel-item">

                          <div class="col-md-3 mb-3">
                            <div class="card">
                              <img class="img-fluid" src="{{asset('assets2020/img/gallery/sharing session/sharing9.jpg')}}"
                                alt="Card image cap" onclick="toggle(this)">
                            </div>
                          </div>

                          <div class="col-md-3 mb-3">
                            <div class="card">
                              <img class="img-fluid" src="{{asset('assets2020/img/gallery/sharing session/sharing10.jpg')}}"
                                alt="Card image cap" onclick="toggle(this)">
                            </div>
                          </div>

                          <div class="col-md-3 mb-3">
                            <div class="card">
                              <img class="img-fluid" src="{{asset('assets2020/img/gallery/sharing session/sharing11.jpg')}}"
                                alt="Card image cap" onclick="toggle(this)">
                            </div>
                          </div>

                        </div>
                        <!--/.Third slide-->

                      </div>
                      <!--/.Slides-->

                    </div>
                    <!--/.Carousel Wrapper-->
                    
                </div>
                
                <div class="col-md-12 col-12" id="expoGallery" style="display:none">
                   
                   <div id="multi-item-example2" class="carousel slide carousel-multi-item carousel-multi-item-2" data-ride="carousel">

                      <!--Controls-->
                      <div class="controls-top" style="text-align: center; margin-bottom: 20px;">
                        <a class="black-text" href="#multi-item-example" data-slide="prev"><i class="fa fa-angle-left fa-3x pr-3"></i></a>
                        <a class="black-text" href="#multi-item-example" data-slide="next"><i class="fa fa-angle-right fa-3x pl-3"></i></a>
                      </div>
                      <!--/.Controls-->

                      <!--Slides-->
                      <div class="carousel-inner" role="listbox">

                        <!--First slide-->
                        <div class="carousel-item active">

                          <div class="col-md-3 mb-3">
                            <div class="card">
                              <img class="img-fluid" src="{{asset('assets2020/img/gallery/expo/expo1.png')}}"
                                alt="Card image cap" onclick="toggle(this)">
                            </div>
                          </div>

                          <div class="col-md-3 mb-3">
                            <div class="card">
                              <img class="img-fluid" src="{{asset('assets2020/img/gallery/expo/expo2.png')}}"
                                alt="Card image cap" onclick="toggle(this)">
                            </div>
                          </div>

                          <div class="col-md-3 mb-3">
                            <div class="card">
                              <img class="img-fluid" src="{{asset('assets2020/img/gallery/expo/expo3.jpg')}}"
                                alt="Card image cap" onclick="toggle(this)">
                            </div>
                          </div>

                          <div class="col-md-3 mb-3">
                            <div class="card">
                              <img class="img-fluid" src="{{asset('assets2020/img/gallery/expo/expo4.png')}}"
                                alt="Card image cap" onclick="toggle(this)">
                            </div>
                          </div>

                        </div>
                        <!--/.First slide-->

                        <!--Second slide-->
                        <div class="carousel-item">

                          <div class="col-md-3 mb-3">
                            <div class="card">
                              <img class="img-fluid" src="{{asset('assets2020/img/gallery/expo/expo5.png')}}"
                                alt="Card image cap" onclick="toggle(this)">
                            </div>
                          </div>

                          <div class="col-md-3 mb-3">
                            <div class="card">
                              <img class="img-fluid" src="{{asset('assets2020/img/gallery/expo/expo6.png')}}"
                                alt="Card image cap" onclick="toggle(this)">
                            </div>
                          </div>

                          <div class="col-md-3 mb-3">
                            <div class="card">
                              <img class="img-fluid" src="{{asset('assets2020/img/gallery/expo/expo7.png')}}"
                                alt="Card image cap" onclick="toggle(this)">
                            </div>
                          </div>

                          <div class="col-md-3 mb-3">
                            <div class="card">
                              <img class="img-fluid" src="{{asset('assets2020/img/gallery/expo/expo8.png')}}"
                                alt="Card image cap" onclick="toggle(this)">
                            </div>
                          </div>

                        </div>
                        <!--/.Second slide-->

                      </div>
                      <!--/.Slides-->

                    </div>
                    <!--/.Carousel Wrapper-->
                   
                </div>
                
                <div class="col-md-12 col-12" id="openingGallery" style="display:none">
                   
                   <div id="multi-item-example2" class="carousel slide carousel-multi-item carousel-multi-item-2" data-ride="carousel">

                      <!--Controls-->
                      <div class="controls-top" style="text-align: center; margin-bottom: 20px;">
                        <a class="black-text" href="#multi-item-example" data-slide="prev"><i class="fa fa-angle-left fa-3x pr-3"></i></a>
                        <a class="black-text" href="#multi-item-example" data-slide="next"><i class="fa fa-angle-right fa-3x pl-3"></i></a>
                      </div>
                      <!--/.Controls-->

                      <!--Slides-->
                      <div class="carousel-inner" role="listbox">

                        <!--First slide-->
                        <div class="carousel-item active">
                          <div class="col-md-3 mb-3">
                            <div class="card">
                              <img class="img-fluid" src="{{asset('assets2020/img/gallery/opening/open1.jpg')}}"
                                alt="Card image cap" onclick="toggle(this)">
                            </div>
                          </div>
                          
                          <div class="col-md-3 mb-3">
                            <div class="card">
                              <img class="img-fluid" src="{{asset('assets2020/img/gallery/opening/open2.jpg')}}"
                                alt="Card image cap" onclick="toggle(this)">
                            </div>
                          </div>

                          <div class="col-md-3 mb-3">
                            <div class="card">
                              <img class="img-fluid" src="{{asset('assets2020/img/gallery/opening/open3.png')}}"
                                alt="Card image cap" onclick="toggle(this)">
                            </div>
                          </div>

                          <div class="col-md-3 mb-3">
                            <div class="card">
                              <img class="img-fluid" src="{{asset('assets2020/img/gallery/opening/open4.png')}}"
                                alt="Card image cap" onclick="toggle(this)">
                            </div>
                          </div>

                        </div>
                        <!--/.First slide-->

                        <!--Second slide-->
                        <div class="carousel-item">
                            
                          <div class="col-md-3 mb-3">
                            <div class="card">
                              <img class="img-fluid" src="{{asset('assets2020/img/gallery/opening/open5.png')}}"
                                alt="Card image cap" onclick="toggle(this)">
                            </div>
                          </div>

                          <div class="col-md-3 mb-3">
                            <div class="card">
                              <img class="img-fluid" src="{{asset('assets2020/img/gallery/opening/open8.png')}}"
                                alt="Card image cap" onclick="toggle(this)">
                            </div>
                          </div>

                      </div>
                      <!--/.Slides-->

                    </div>
                    <!--/.Carousel Wrapper-->
                   
                </div>
                
            </div>
        </div>
    </section>
    <!--gallery section end -->

    <!--brands section -->
    <section class="pt100 pb100" style="background-color: #070707; z-index: -1; position: relative;">
        <div class="container">
            <div class="section_title mb50">
                <h3 class="title "  style="margin-bottom: 0px !important">
                   Sponsorship
                </h3>
                <h5 style="color: #e2e2e2 !important">
                    Information Technology Creative Competition 2020
                </h5>
            </div>
            <div class="row">
                <div class="row">
                    <div class="col text-center" style="padding:10px;">
                        <img src="{{asset('assets2020/img/sponsor/sponsor5.jpg')}}" alt="brand">
                    </div>
                    <div class="col text-center" style="padding:10px;">
                        <img src="{{asset('assets2020/img/sponsor/dewaweb.png')}}" alt="brand">
                    </div>
                    <div class="col text-center" style="padding:10px;">
                        <img src="{{asset('assets2020/img/sponsor/sponsor8.jpg')}}" alt="brand">
                    </div>
                    <div class="col text-center" style="padding:10px;">
                        <img src="{{asset('assets2020/img/sponsor/sponsor11.jpg')}}" alt="brand">
                    </div>
                    <div class="col text-center" style="padding:10px;">
                        <img src="{{asset('assets2020/img/sponsor/sponsor20.jpg')}}" alt="brand">
                    </div>
                </div>
                <div class="row">
                    <div class="col text-center" style="padding:10px;">
                        <img src="{{asset('assets2020/img/sponsor/sponsor6.jpg')}}" alt="brand">
                    </div>
                    <div class="col text-center" style="padding:10px;">
                        <img src="{{asset('assets2020/img/sponsor/sponsor4.jpg')}}" alt="brand">
                    </div>
                    <div class="col text-center" style="padding:10px;">
                        <img src="{{asset('assets2020/img/sponsor/sponsor18.png')}}" alt="brand">
                    </div>
                    <div class="col text-center" style="padding:10px;">
                        <img src="{{asset('assets2020/img/sponsor/sponsor19.jpg')}}" alt="brand">
                    </div>
                    <div class="col text-center" style="padding:10px;">
                        <img src="{{asset('assets2020/img/sponsor/sponsor2.png')}}" alt="brand">
                    </div>
                    <div class="col text-center" style="padding:10px;">
                        <img src="{{asset('assets2020/img/sponsor/sponsor3.jpg')}}" alt="brand">
                    </div>
                </div>
                <div class="row">
                    <div class="col text-center" style="padding:10px;">
                        <img src="{{asset('assets2020/img/sponsor/sponsor10.jpg')}}" alt="brand">
                    </div>
                    <div class="col text-center" style="padding:10px;">
                        <img src="{{asset('assets2020/img/sponsor/sponsor9.jpg')}}" alt="brand">
                    </div>
                    <div class="col text-center" style="padding:10px;">
                        <img src="{{asset('assets2020/img/sponsor/sponsor14.jpg')}}" alt="brand">
                    </div>
                    <div class="col text-center" style="padding:10px;">
                        <img src="{{asset('assets2020/img/sponsor/sponsor16.jpg')}}" alt="brand">
                    </div>
                    <div class="col text-center" style="padding:10px;">
                        <img src="{{asset('assets2020/img/sponsor/sponsor13.jpg')}}" alt="brand">
                    </div>
                    <div class="col text-center" style="padding:10px;">
                        <img src="{{asset('assets2020/img/sponsor/sponsor12.jpg')}}" alt="brand">
                    </div>
                    <div class="col text-center" style="padding:10px;">
                        <img src="{{asset('assets2020/img/sponsor/sponsor1.jpg')}}" alt="brand">
                    </div>
                    <div class="col text-center" style="padding:10px;">
                        <img src="{{asset('assets2020/img/sponsor/sponsor21.jpg')}}" alt="brand">
                    </div>
                </div>
            </div>
            <!--<div class="brand_carousel owl-carousel">
                <div class="brand_item text-center">
                    <img src="{{asset('assets2020/img/sponsor/sponsor5.jpg')}}" alt="brand">
                </div>
                <div class="brand_item text-center">
                    <img src="{{asset('assets2020/img/sponsor/dewaweb.png')}}" alt="brand">
                </div>
                <div class="brand_item text-center">
                    <img src="{{asset('assets2020/img/sponsor/sponsor8.jpg')}}" alt="brand">
                </div>
                <div class="brand_item text-center">
                    <img src="{{asset('assets2020/img/sponsor/sponsor11.jpg')}}" alt="brand">
                </div>
                <div class="brand_item text-center">
                    <img src="{{asset('assets2020/img/sponsor/sponsor20.jpg')}}" alt="brand">
                </div>
                <div class="brand_item text-center">
                    <img src="{{asset('assets2020/img/sponsor/sponsor2.png')}}" alt="brand">
                </div>
                <div class="brand_item text-center">
                    <img src="{{asset('assets2020/img/sponsor/sponsor6.jpg')}}" alt="brand">
                </div>
                <div class="brand_item text-center">
                    <img src="{{asset('assets2020/img/sponsor/sponsor4.jpg')}}" alt="brand">
                </div>
                <div class="brand_item text-center">
                    <img src="{{asset('assets2020/img/sponsor/sponsor9.jpg')}}" alt="brand">
                </div>
                <div class="brand_item text-center">
                    <img src="{{asset('assets2020/img/sponsor/sponsor10.jpg')}}" alt="brand">
                </div>
                <div class="brand_item text-center">
                    <img src="{{asset('assets2020/img/sponsor/sponsor2.png')}}" alt="brand">
                </div>
                <div class="brand_item text-center">
                    <img src="{{asset('assets2020/img/sponsor/sponsor3.jpg')}}" alt="brand">
                </div>
                <div class="brand_item text-center">
                    <img src="{{asset('assets2020/img/sponsor/sponsor19.jpg')}}" alt="brand">
                </div>
                <div class="brand_item text-center">
                    <img src="{{asset('assets2020/img/sponsor/sponsor18.png')}}" alt="brand">
                </div>
                <div class="brand_item text-center">
                    <img src="{{asset('assets2020/img/sponsor/sponsor14.jpg')}}" alt="brand">
                </div>
                <div class="brand_item text-center">
                    <img src="{{asset('assets2020/img/sponsor/sponsor16.jpg')}}" alt="brand">
                </div>
                <div class="brand_item text-center">
                    <img src="{{asset('assets2020/img/sponsor/sponsor13.jpg')}}" alt="brand">
                </div>
                <div class="brand_item text-center">
                    <img src="{{asset('assets2020/img/sponsor/sponsor12.jpg')}}" alt="brand">
                </div>
                <div class="brand_item text-center">
                    <img src="{{asset('assets2020/img/sponsor/sponsor1.jpg')}}" alt="brand">
                </div>
                <div class="brand_item text-center">
                    <img src="{{asset('assets2020/img/sponsor/sponsor21.jpg')}}" alt="brand">
                </div>
            </div>-->
        </div>
    </section>
    <!--brands section end-->

    <!--media section -->
    <section class="pt100 pb100">
        <div class="container">
            <div class="section_title_right mb50" style="text-align: right;">
                <h3 class="title"  style="margin-bottom: 0px !important; color: #fff; right: 0;">
                   Media Partners
                </h3>
                <h5 class="subtitle-kuning">
                    Information Technology Creative Competition 2020
                </h5>
            </div>
            <div class="brand_carousel owl-carousel">
                <div class="brand_item text-center">
                    <img src="{{asset('assets2020/img/media_partners/media32.jpg')}}" alt="brand">
                </div>
                <div class="brand_item text-center" style="background-color:#fff;">
                    <img src="{{asset('assets2020/img/media_partners/media33.png')}}" alt="brand">
                </div>
                <div class="brand_item text-center">
                    <img src="{{asset('assets2020/img/media_partners/media31.jpg')}}" alt="brand">
                </div>
                <div class="brand_item text-center">
                    <img src="{{asset('assets2020/img/media_partners/media4.jpg')}}" alt="brand">
                </div>
                <div class="brand_item text-center">
                    <img src="{{asset('assets2020/img/media_partners/media5.jpg')}}" alt="brand">
                </div>
                <div class="brand_item text-center">
                    <img src="{{asset('assets2020/img/media_partners/media6.jpg')}}" alt="brand">
                </div>
                <div class="brand_item text-center">
                    <img src="{{asset('assets2020/img/media_partners/media7.jpg')}}" alt="brand">
                </div>
                <div class="brand_item text-center">
                    <img src="{{asset('assets2020/img/media_partners/media8.jpg')}}" alt="brand">
                </div>
                <div class="brand_item text-center">
                    <img src="{{asset('assets2020/img/media_partners/media9.jpg')}}" alt="brand">
                </div>
                <div class="brand_item text-center">
                    <img src="{{asset('assets2020/img/media_partners/media10.jpg')}}" alt="brand">
                </div>
                <div class="brand_item text-center">
                    <img src="{{asset('assets2020/img/media_partners/media11.jpg')}}" alt="brand">
                </div>
                <div class="brand_item text-center">
                    <img src="{{asset('assets2020/img/media_partners/media12.jpg')}}" alt="brand">
                </div>
                <div class="brand_item text-center">
                    <img src="{{asset('assets2020/img/media_partners/media13.jpg')}}" alt="brand">
                </div>
                <div class="brand_item text-center">
                    <img src="{{asset('assets2020/img/media_partners/media14.jpg')}}" alt="brand">
                </div>
                <div class="brand_item text-center">
                    <img src="{{asset('assets2020/img/media_partners/media15.jpg')}}" alt="brand">
                </div>
                <div class="brand_item text-center">
                    <img src="{{asset('assets2020/img/media_partners/media16.jpg')}}" alt="brand">
                </div>
                <div class="brand_item text-center">
                    <img src="{{asset('assets2020/img/media_partners/media17.jpg')}}" alt="brand">
                </div>
                <div class="brand_item text-center">
                    <img src="{{asset('assets2020/img/media_partners/media18.jpg')}}" alt="brand">
                </div>
                <div class="brand_item text-center">
                    <img src="{{asset('assets2020/img/media_partners/media19.jpg')}}" alt="brand">
                </div>
                <div class="brand_item text-center">
                    <img src="{{asset('assets2020/img/media_partners/media20.jpg')}}" alt="brand">
                </div>
                <div class="brand_item text-center">
                    <img src="{{asset('assets2020/img/media_partners/media21.jpg')}}" alt="brand">
                </div>
                <div class="brand_item text-center">
                    <img src="{{asset('assets2020/img/media_partners/media22.jpg')}}" alt="brand">
                </div>
                <div class="brand_item text-center">
                    <img src="{{asset('assets2020/img/media_partners/media23.jpg')}}" alt="brand">
                </div>
                <div class="brand_item text-center">
                    <img src="{{asset('assets2020/img/media_partners/media24.jpg')}}" alt="brand">
                </div>
                <div class="brand_item text-center">
                    <img src="{{asset('assets2020/img/media_partners/media25.jpg')}}" alt="brand">
                </div>
                <div class="brand_item text-center">
                    <img src="{{asset('assets2020/img/media_partners/media26.jpg')}}" alt="brand">
                </div>
                <div class="brand_item text-center">
                    <img src="{{asset('assets2020/img/media_partners/media27.jpg')}}" alt="brand">
                </div><div class="brand_item text-center">
                    <img src="{{asset('assets2020/img/media_partners/media28.jpg')}}" alt="brand">
                </div>
                <div class="brand_item text-center">
                    <img src="{{asset('assets2020/img/media_partners/media29.jpg')}}" alt="brand">
                </div>
                <div class="brand_item text-center">
                    <img src="{{asset('assets2020/img/media_partners/media30.jpg')}}" alt="brand">
                </div>
                <div class="brand_item text-center">
                    <img src="{{asset('assets2020/img/media_partners/media1.jpg')}}" alt="brand">
                </div>
                <div class="brand_item text-center">
                    <img src="{{asset('assets2020/img/media_partners/media2.jpg')}}" alt="brand">
                </div>
                <div class="brand_item text-center">
                    <img src="{{asset('assets2020/img/media_partners/media3.jpg')}}" alt="brand">
                </div>
                <div class="brand_item text-center">
                    <img src="{{asset('assets2020/img/media_partners/media34.jpg')}}" alt="brand">
                </div>
                <div class="brand_item text-center">
                    <img src="{{asset('assets2020/img/media_partners/media35.jpg')}}" alt="brand">
                </div>
            </div>
        </div>
    </section>
    <!--media section end-->

    @include('landing2020.parts.contactandfooter')
</body>

</html>