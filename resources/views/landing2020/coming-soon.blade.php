<!DOCTYPE html>
<html lang="en">

@include('landing2020.parts.head-coming')

<body>
<div class="loader">
    <div class="loader-outter"></div>
    <div class="loader-inner"></div>
</div>

    @include('landing2020.parts.header-coming')

    <!--cover section slider -->
    <section id="home" class="home-cover">
        <div class="cover_slider owl-carousel owl-theme" style="background: rgb(0,0,0);
     background: linear-gradient(90deg, rgba(0,0,0,1) 26%, rgba(24,3,4,1) 39%, rgba(188,25,31,1) 88%);">
           
            <div class="cover_item" style="background: url('desain-2020/grafis-banner.png');">
                 <div class="slider_content">
                    <div class="slider-content-inner">
                        <div class="container">
                            <div class="slider-content-left">
                                <h2 class="cover-title">
                                    COMING SOON
                                </h2>
                                <strong class="cover-xl-text">ITCC 2020</strong>
                                <p class="cover-date">
                                    "Creative Innovation Society 5.0 <br>to Prevent The Effects of <br>Pandemic Outbreak"
                                </p>
                                <h5 class="subtitle-kuning">
                                    OPEN REGISTRATION IN 4 AUGUST 2020
                                </h5>
                                <a href="#contact" class=" btn btn-primary btn-rounded" >
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
                                    Prepare yourself for the
                                </h2>
                                <strong class="cover-xl-text">ITCC 2020</strong>
                                <p class="cover-date" style="margin-bottom: 15px;">
                                    #YesWeCan
                                </p>
                                <h5 class="subtitle-kuning">
                                    OPEN REGISTRATION IN 4 AUGUST 2020
                                </h5>
                                <a href="#contact" class=" btn btn-primary btn-rounded" >
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
    <section class="pt55 pb100">
        <div class="container">
            <div class="section_title">
                <h3 class="title title-white" style="margin-bottom: 0px !important">
                    KATEGORI LOMBA
                </h3>
                <h5 class="subtitle-kuning">
                    Information Technology Creative Competition 2020
                </h5>
            </div>

            <div class="row justify-content-center">
                <div class="col-12 col-md-4 col-lg-4">
                    <div class="icon_box_one" id="inovasi-box">
                        <img src="desain-2020/Simbol-Lomba/inovasi-kreatif.png" alt="" id="logo-inovasi-red">
                        <img src="desain-2020/Simbol-Lomba/inovasi-kreatif-w.png" alt="" id="logo-inovasi-white" class="hide">
                        <div class="content">
                            <h5>SMA/SMK</h5>
                            <h4>Inovasi Kreatif</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. In rhoncus massa nec graviante.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-4 col-lg-4">
                    <div class="icon_box_one" id="softdev-box">
                        <img src="desain-2020/Simbol-Lomba/software-development.png" alt="" id="logo-softdev-red">
                        <img src="desain-2020/Simbol-Lomba/software-development-w.png" alt="" id="logo-softdev-white" class="hide">
                        <div class="content">
                            <h5>MAHASISWA/UMUM</h5>
                            <h4>Software Development</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. In rhoncus massa nec graviante.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-4 col-lg-4">
                    <div class="icon_box_one" id="idebisnis-box">
                        <img src="desain-2020/Simbol-Lomba/ide-bisnis.png"s alt="" id="logo-idebisnis-red">
                        <img src="desain-2020/Simbol-Lomba/ide-bisnis-w.png"s alt="" id="logo-idebisnis-white" class="hide">
                        <div class="content">
                            <h5>MAHASISWA/UMUM</h5>
                            <h4>Ide Bisnis</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. In rhoncus massa nec graviante.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--event countdown -->
    <section class="bg-img pt70 pb70" style="background-image: url('desain-2020/count_down_background2.jpg');">
        <div class="overlay_dark"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10">
                    <div class="section_title" style="text-align: center;">
                        <h3 class="title-no title-white"  style="margin-bottom: 0px !important; border: 0;">
                            COUNTDOWN
                        </h3>
                        <h5 class="subtitle-kuning">
                            PEMBUKAAN PENDAFTARAN ITCC 2020
                        </h5>
                    </div>
                    <div class="countdown"></div>
                </div>
            </div>
        </div>
    </section>
    <!--event count down end-->

    @include('landing2020.parts.footer-comming')

</body>

</html>