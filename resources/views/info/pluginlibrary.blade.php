<!DOCTYPE html>
<html lang="en">

    @include('landing.parts.head')

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- /Preloader -->

    @include('landing.parts.header')

    <!-- Breadcrumb Area Start -->
    <section class="breadcrumb-area bg-img bg-gradient-overlay jarallax" style="background-image: url({{asset('asset1/images2019/lcc3.jpg')}});">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2 class="page-title">Plugin dan Library Desain Web ITCC 2019</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Plugin dan Library Desain Web ITCC 2019</li>
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
                            <h4 class="post-title">Plugin dan Library Lomba Desain Web</h4>

                            <!-- Post Meta -->
                            <div class="post-meta">
                                <a class="post-date" href="#"><i class="zmdi zmdi-alarm-check"></i> 31 Juli 2019</a>
                            </div>

                            <p style="text-align:justify;">Plugin dan Library Lomba Desain Web akan tersedia pada tiap komputer peserta di Lomba Desain Web ITCC 2019. Sebagai sarana latihan, peserta dapat mendownload Plugin dan Library Lomba Desain Web ITCC 2019 pada link dibawah ini.</p>

                            <!-- Blockquote -->
                            {{-- <blockquote class="confer-blockquote">
                                <h5 style="text-align:justify;">Guidebook masing-masing cabang lomba dapat diunduh pada tautan dibawah ini.</h5>
                            </blockquote> --}}

                            <a href="{{asset('pluginlibrary/Plugin_Library_DesainWeb_ITCC2019.zip')}}">Plugin dan Library Desain Web ITCC 2019</a><br>

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