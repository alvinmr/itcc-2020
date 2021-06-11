<!DOCTYPE html>
<html lang="en">

    @include('landing.parts.head')

<body>
    <!-- Preloader -->
    <!-- <div id="preloader">
        <div class="loader"></div>
    </div> -->
    <!-- /Preloader -->

    @include('landing.parts.header')

    <!-- Breadcrumb Area Start -->
    <section class="breadcrumb-area bg-img bg-gradient-overlay jarallax" style="background-image: url({{asset('asset1/images2019/lcc3.jpg')}});">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2 class="page-title">Guidebook Lomba &amp; Informasi Pendaftaran</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Guidebook Lomba &amp; Informasi Pendaftaran</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Area End -->

    <!-- Blog Area Start -->
    <section class="confer-blog-details-area">
        <div class="container">
            <div class="row">
                <!-- Single Post Details Area -->
                <div class="col-12">
                        <!-- Post Content -->
                        <div class="post-details-content">

                            <!-- Post Thumbnail -->
                            <div class="post-blog-thumbnail mb-30">
                                <img src="img/bg-img/46.jpg" alt="">
                            </div>

                            <!-- Post Title -->
                            <h4 class="post-title">Guidebook Lomba &amp; Informasi Pendaftaran</h4>

                            <!-- Post Meta -->
                            <div class="post-meta">
                                <a class="post-date" href="#"><i class="zmdi zmdi-alarm-check"></i> 1 Juli 2019</a>
                            </div>

                            <p style="text-align:justify;">Pendaftaran ITCC 2019 akan dibuka pada tanggal 17 Juli 2019 untuk semua cabang lomba. Cabang Lomba Kategori SMA/SMK/Sederajat dibuka dalam dua gelombang yaitu Gelombang I mulai tanggal 17 Juli 2019 sampai 17 Agustus 2019 dan Gelombang II mulai tanggal 18 Agustus 2019 sampai 17 September 2019. Cabang Lomba Kategori Mahasiswa/Umum dibuka hanya satu gelombang mulai tanggal 17 Juli 2019 sampai 17 September 2019.</p>

                            <!-- Blockquote -->
                            <blockquote class="confer-blockquote">
                                <h5 style="text-align:justify;">Guidebook masing-masing cabang lomba dapat diunduh pada tautan dibawah ini.</h5>
                            </blockquote>

                            <a href="{{asset('guidebook/Guidebook_Lomba_Cerdas_Cermat_ITCC_2019.pdf')}}">Cabang Lomba Cerdas Cermat</a><br>
                            <a href="{{asset('guidebook/Guidebook_Lomba_Desain_Web_ITCC_2019.pdf')}}">Cabang Lomba Desain Web</a><br>
                            <a href="{{asset('guidebook/Guidebook_Lomba_Pemrograman_ITCC_2019.pdf')}}">Cabang Lomba Pemrograman</a><br>
                            <a href="{{asset('guidebook/Guidebook_Lomba_Pengembangan_Ide_Bisnis_TIK_ITCC_2019.pdf')}}">Cabang Lomba Pengembangan Ide Bisnis TIK</a><br>
                            <a href="{{asset('guidebook/Guidebook_Lomba_Pengembangan_Aplikasi_Android_ITCC_2019.pdf')}}">Cabang Lomba Pengembangan Aplikasi Android</a><br>

                        </div>
                        <br><br><br>
                        <!-- Leave A Reply -->
                        {{-- <div class="confer-leave-a-reply-form clearfix">
                            <h4 class="mb-30">Leave A Comment</h4>
                            
                            <!-- Leave A Reply -->
                            <div class="contact_form">
                                <form action="#" method="post">
                                    <div class="contact_input_area">
                                        <div class="row">
                                            <!-- Form Group -->
                                            <div class="col-12 col-lg-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control mb-30" name="name" id="name" placeholder="Your Name" required>
                                                </div>
                                            </div>
                                            <!-- Form Group -->
                                            <div class="col-12 col-lg-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control mb-30" name="name" id="name-2" placeholder="Last Name" required>
                                                </div>
                                            </div>
                                            <!-- Form Group -->
                                            <div class="col-12 col-lg-6">
                                                <div class="form-group">
                                                    <input type="email" class="form-control mb-30" name="email" id="email" placeholder="E-mail" required>
                                                </div>
                                            </div>
                                            <!-- Form Group -->
                                            <div class="col-12 col-lg-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control mb-30" name="subject" id="subject" placeholder="Your Number">
                                                </div>
                                            </div>
                                            <!-- Form Group -->
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <textarea name="message" class="form-control mb-30" id="message" cols="30" rows="6" placeholder="Message" required></textarea>
                                                </div>
                                            </div>
                                            <!-- Button -->
                                            <div class="col-12">
                                                <button type="submit" class="btn confer-btn">Send Message <i class="zmdi zmdi-long-arrow-right"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div> --}}
                </div>

            </div>
        </div>
    </section>
    <!-- Blog Area End -->

        @include('landing.parts.contactandfooter')

</body>

</html>