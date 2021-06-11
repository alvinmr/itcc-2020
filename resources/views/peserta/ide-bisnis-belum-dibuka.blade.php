@extends('layout.template')
@section('title')
	Pendaftaran - Pengembangan Ide Bisnis TIK - ITCC 2020
@endsection

@section('navbar')
<li><a href="/">Beranda</a></li>
<li class="menu-has-children"><a href="#">Pendaftaran</a>
    <ul>
      <li><a href="/daftar/inovasikreatif">Lomba Inovasi Kreatif</a></li>
      <li><a href="/daftar/mobileappdevelopment">Lomba Mobile App Development</a></li>
      <li><a href="/daftar/idebisnis">Lomba Pengembangan Ide Bisnis TIK</a></li>
    </ul>
</li>
<li><a href="/login">Masuk</a></li>
<li><a href="/faq">FAQ</a></li>
@endsection

@section('content')
<div id="bg-signup">
    <div id="bg-signup-graphics" style="background: url('{{asset('assets2020/img/desain-2020/grafis-banner.png')}}');">
        <div class="container">
        	<div class="row" style="margin-top: 90px;">

        		<div class="d-none d-xl-block col-md-4 box" style="background: #232323; height: 650px; margin-top: 50px;">
                    <img src="{{asset('assets2020/img/desain-2020/logo-white.png')}}" style=" width: 70%;margin-left: 65px;margin-top: 70px;margin-bottom:20px;" class="img-responsive center-block ">
                         
                    <h5 style="color:#a2c8cc; text-align: center;">"Creative Innovation Society 5.0 to Prevent The Effects of Pandemic Outbreak"</h5>
                    <h4 style="color: white; text-align: center;">Pengembangan Ide Bisnis TIK</h4>
                    <hr style="width: 80%; color: white; margin-bottom: 5px;">

                    <p class="sosmed-footer" style="text-align: center;">
                        <a href="https://www.facebook.com/ITCC.Udayana">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a href="https://twitter.com/ITCCUdayana">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a href="https://www.instagram.com/itcc_udayana/">
                            <i class="fa fa-instagram"></i>
                        </a>
                        <a href="https://ask.fm/itcc_udayana">
                            <img style="height: 30px;" src="{{asset('asset1/images/Askfm-w.png')}}">
                        </a>
                        <a href="https://bit.ly/ITCCUdayana">
                            <img style="height: 30px;" src="{{asset('asset1/images/line-w.png')}}">
                        </a>
                    </p>

                    <!-- <p style="margin-left: 105px;"><a href="https://www.facebook.com/ITCC.Udayana"><img style="width: 30px;" src="{{asset('asset/images/facebook.png')}}"></a><a href="https://twitter.com/ITCCUdayana"><img style="width: 30px;" src="{{asset('asset/images/twitter.png')}}"></a><a href="https://www.instagram.com/itcc_udayana/"><img style="width: 30px;" src="{{asset('asset/images/instagram.png')}}"></a><a href="https://ask.fm/itcc_udayana"><img style="width: 30px;" src="{{asset('asset/images/Askfm.png')}}"></a><a href="https://bit.ly/ITCCUdayana"><img style="width: 30px;" src="{{asset('asset/images/line.png')}}"></a></p> -->
                </div>

                <div class="col-md-8 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms" style="margin-top: 50px;">
            		<div class="card" style="border-radius: 0px; margin-bottom: 30px; background-color: #fff;">
            			<div class="card-body">
            				<h4>Maaf, periode pendaftaran cabang lomba Pengembangan Ide Bisnis TIK baru dibuka pada tanggal 3 Agustus 2020</h4>
            			</div>
            		</div>
                </div>
        	</div>
        </div>
    </div>
</div>
<!--//HEADER WEBSITE-->
@endsection