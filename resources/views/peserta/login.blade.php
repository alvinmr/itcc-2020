@extends('layout.template2020')
@section('title')
	Login - ITCC 2020
@endsection

@section('navbar')
<ul class="nav navbar-nav menu">
    <li class="nav-item">
        <a class="nav-link active" href="{{url('/')}}">Beranda</a>
    </li>
    <li class="nav-item">
        <div class="dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pendaftaran</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
                <a class="dropdown-item" href="{{url('/daftar/inovasikreatif')}}">Lomba Inovasi Kreatif</a>
                <a class="dropdown-item" href="{{url('/daftar/mobileappdevelopment')}}">Lomba Mobile Application Development</a>
                <a class="dropdown-item" href="{{url('/daftar/idebisnis')}}">Lomba Ide Bisnis</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link " href="/faq">FAQ</a>
    </li>
</ul>
@endsection

@section('intro')
<!--HEADER WEBSITE-->
<div id="bg-signup" >
	<div id="bg-signup-graphics">
	    <div class="container">

	        <div class="row pendaftaran-body" style="margin-bottom: 50px; margin-top: 100px;">
	           
	            <div class="col-md-2 hidden-sm hidden-xs"></div>
	            <div class="col-md-8 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">

	            	@if (\Session::has('success'))
					    <div class="alert alert-success alert-dismissible" role="alert">
					        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					        <i class="fa fa-check"></i> <strong>{{ \Session::get('success') }}</strong>
					    </div>
					@elseif(\Session::has('error'))
						<div class="alert alert-danger alert-dismissible" role="alert">
					        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					        <i class="fa fa-check"></i> <strong>{{ \Session::get('error') }}</strong>
					    </div>
					@elseif(\Session::has('warning'))
						<div class="alert alert-warning alert-dismissible" role="alert">
					        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					        <i class="fa fa-check"></i> <strong>{{ \Session::get('warning') }}</strong>
					    </div>
					@endif
	                  
	                <section id="daftar">
	                  	<div class="form" style="background-color: white;">
	                  		<form method="post" action="{{ url('/login') }}" class="contactForm">
							  	{{ csrf_field() }}
		                        <div class="row" style="width: 100%; min-height: 450px; margin-right: 0px; margin-left: 0px; margin-top: 40px;">

		                     		<div class="col-md-4 login-page" style="background: #101010; height: 450px;">
					                    <img src="{{asset('/desain-2020/logo-white.png')}}" style="width: 90%;margin-left: 10px;margin-top: 70px;" class="img-responsive center-block ">
					                    {{-- <h3 style="color: white; text-align: center;">ITCC 2020</h3> --}}
					                    <h4 style="color:#a2c8cc; text-align: center;font-size:16px;margin-top:20px;">"Creative Innovation Society 5.0 to Prevent The Effects of Pandemic Outbreak"</h4>
					                    <hr style="width: 80%; color: white; margin-bottom: 5px;">
					                    <!-- <p style="margin-left: 35px;">
					                    	<a href="https://www.facebook.com/ITCC.Udayana">
					                    		<img style="width: 30px;" src="asset/images/facebook.png">
					                    	</a>
					                    	<a href="https://twitter.com/ITCCUdayana">
					                    		<img style="width: 30px;" src="asset/images/twitter.png">
					                    	</a>
					                    	<a href="https://www.instagram.com/itcc_udayana/">
					                    		<img style="width: 30px;" src="asset/images/instagram.png">
					                    	</a>
					                    	<a href="https://ask.fm/itcc_udayana">
					                    		<img style="width: 30px;" src="asset/images/Askfm.png">
					                    	</a>
					                    	<a href="https://bit.ly/ITCCUdayana">
					                    		<img style="width: 30px;" src="asset/images/line.png">
					                    	</a>
					                    </p> -->
					                    <p class="sosmed-footer">
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
					                    		<img style="height: 30px;" src="{{asset('/desain-2020/askfm-w.png')}}">
					                    	</a>
					                    	<a href="https://bit.ly/ITCCUdayana">
					                    		<img style="height: 30px;" src="{{asset('/desain-2020/line-w.png')}}">
					                    	</a>
					                    </p>
		                        
		                     		</div>
		                     		<div class="col-md-8" style="margin-top: 70px; padding-left: 50px; padding-right: 50px; margin-bottom: 50px;">

		                        		<h1 style="text-align: center; color: #232323; margin-bottom: 50px;">Login</h1>
		                        		<hr style="color: black;">
		                        		<div class="input-group">
		                        			<div class="input-group-prepend">
		                        				<span class="input-group-text"><i class="fa fa-user fa-fw"></i></span>
		                        			</div>
		                        			<input value="{{ old('username') }}"  type="text" class="form-control" placeholder="username" name="username">
		                        		</div>
		                        		<br>
		                        		<div class="input-group">
		                        			<div class="input-group-prepend">
		                        				<span class="input-group-text"><i class="fa fa-key fa-fw"></i></span>
		                        			</div>
		                           			<input type="password" class="form-control" placeholder="kata sandi" name="password">
		                        		</div>
		                     			<button class="btn-login" type="submit" style="margin: 0px;width: 100%;margin-top: 20px;"><i class="fa fa-sign-in fa-fw"></i> Masuk</button>
		                     		</div>
		                     	</div>
		                	</form>
	               		</div>
	                </section>

	            </div>
	        	<div class="col-md-2 hidden-sm hidden-xs"></div>

		    </div>
	    </div>
	</div>
</div>
<!--//HEADER WEBSITE-->
@endsection