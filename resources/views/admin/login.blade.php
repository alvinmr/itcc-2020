@extends('layout.template')
@section('title')
	Login Admin - ITCC 2020
@endsection

@section('intro')
<!--HEADER WEBSITE-->
<div id="bg-signup" >
	<div id="bg-signup-graphics" style="background: url('{{asset('assets2020/img/desain-2020/grafis-banner.png')}}');">
	    <div class="container">
	        <div class="row pendaftaran-body" style="margin-bottom: 50px;">
	           
	            <div class="col-md-2 hidden-sm hidden-xs"></div>
	            <div class="col-md-8 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
	                  
	                <section id="daftar">
	                  	<div class="form" style="background-color: white;">
	                  		<form method="post" action="{{ route('admin.login') }}" class="contactForm">
							  	{{ csrf_field() }}
		                        <div class="row" style="width: 100%; min-height: 450px; margin-right: 0px; margin-left: 0px; margin-top: 40px;">

		                     		<div class="col-md-4 login-page" style="background: #101010; height: 450px;">
					                    <img src="{{asset('assets2020/img/desain-2020/logo-white.png')}}" style="width: 90%;margin-left: 10px;margin-top: 70px;" class="img-responsive center-block ">
					                    {{-- <h3 style="color: white; text-align: center;">ITCC 2020</h3> --}}
					                    <h4 style="color:#a2c8cc; text-align: center;font-size:16px;margin-top:20px;">"Creative Innovation Society 5.0 to Prevent The Effects of Pandemic Outbreak"</h4>
					                    <hr style="width: 80%; color: white; margin-bottom: 5px;">
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
					                    		<img style="height: 30px;" src="{{asset('asset1/images/Askfm-w.png')}}">
					                    	</a>
					                    	<a href="https://bit.ly/ITCCUdayana">
					                    		<img style="height: 30px;" src="{{asset('asset1/images/line-w.png')}}">
					                    	</a>
					                    </p>		                        
		                     		</div>
		                     		<div class="col-md-8" style="margin-top: 70px; padding-left: 50px; padding-right: 50px; ">
		                        		<h1 style="text-align: center; color: #232323; margin-bottom: 50px;">Login Panitia</h1>
		                        		<hr style="color: black;">
		                        		<div class="input-group">
		                        			<div class="input-group-prepend">
		                        				<span class="input-group-text"><i class="fa fa-user fa-fw"></i></span>
		                        			</div>
		                        			<input value="{{ old('uname') }}" type="text" class="form-control" placeholder="username" name="uname">
		                        		</div>
		                        		<br>
		                        		<div class="input-group">
		                        			<div class="input-group-prepend">
		                        				<span class="input-group-text"><i class="fa fa-key fa-fw"></i></span>
		                        			</div>
		                           			<input type="password" class="form-control" placeholder="kata sandi" name="pword">
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