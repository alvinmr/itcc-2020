<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<!--fav icon-->
    <link rel="icon" type="image/jpg" href="{{asset('/desain-2020/logo-red.png')}}">

    <!-- Google Fonts -->
	  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">
	  <link href="https://fonts.googleapis.com/css?family=Montserrat|Raleway&display=swap" rel="stylesheet">

  	<!-- Bootstrap CSS File -->
  	<link href="{{asset('asset1/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  	<!-- Libraries CSS Files -->
  	<link href="{{asset('asset1/lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  	<link href="{{asset('asset1/lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
  	<link href="{{asset('asset1/lib/animate/animate.min.css')}}" rel="stylesheet">

  	<!-- Main Stylesheet File -->
  	<link href="{{asset('asset1/css/style.css')}}" rel="stylesheet">
  	<link href="{{asset('asset1/css/custom.css')}}" rel="stylesheet">
  	<link href="{{asset('asset1/css/myStyle.css')}}" rel="stylesheet">
  	<!--link href="{{ asset('css/app.css') }}" rel="stylesheet"-->

    <!-- Custom styles for this template -->
    <link href="{{asset('assets2020/css/main.css')}}" rel="stylesheet">
    <!-- Custom styles by gungkrisna -->
    <link href="{{asset('assets2020/css/custom.css')}}" rel="stylesheet">

    <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v3.1';
    fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
    </script>

    <script id="twitter-wjs" type="text/javascript" async defer src="//platform.twitter.com/widgets.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVsIiuzFRNvG7RRSfKLM8o4QY2-qzCtR8"></script>

  	<!--meta-->
    <meta name       ="description" content="Information Technology Creative Competition (ITCC) adalah kompetisi bidang Teknologi Informasi yang diselenggarakan oleh Himpunan Mahasiswa Teknologi Informasi (HMTI), Fakultas Teknik, Universitas Udayana.">
    <meta name       ='keywords' content="ITCC 2019, TI Udayana, Fakultas Teknik, Universitas Udayana, ITCC Unud, ITCC Udayana"/>
    <meta http-equiv ="content-type" content="text/html;charset=UTF-8">
    <meta property   ="og:type" content="website" />
    <meta property   ="og:title" content="ITCC 2019" />
    <meta property   ="og:site_name" content="ITCC 2019"/>
    <meta property   ="og:image" itemprop="image" content="images/capture1.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- JavaScript Libraries -->
	<script src="{{asset('asset1/lib/jquery/jquery.min.js')}}"></script>
	<script src="{{asset('asset1/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
	<script src="{{asset('asset1/lib/easing/easing.min.js')}}"></script>
	<script src="{{asset('asset1/lib/wow/wow.min.js')}}"></script>
	<script id="twitter-wjs" type="text/javascript" async defer src="//platform.twitter.com/widgets.js"></script>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v3.1';
    fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVsIiuzFRNvG7RRSfKLM8o4QY2-qzCtR8"></script>

	<!--script src="lib/waypoints/waypoints.min.js"></script-->
	<script src="{{asset('asset1/lib/counterup/counterup.min.js')}}"></script>
	<script src="{{asset('asset1/lib/superfish/hoverIntent.js')}}"></script>
	<script src="{{asset('asset1/lib/superfish/superfish.min.js')}}"></script>

	<!-- Template Main Javascript File -->
	<script src="{{asset('asset1/js/main.js')}}"></script>
	<script src="{{asset('asset1/js/plugins.js')}}"></script>

  <style>
    .has-error {
      border: 1px solid red;
    }
  </style>

	@yield('head')

</head>
<body>
	<!--==========================
  				Header
  	============================-->
	<header id="header" style="margin: 0;">
    	<div class="container">

	      	<div id="logo" class="pull-left">
	        	<a href="/" title="Information Technology Creative Competition"><img src="{{asset('/desain-2020/logo-red.png')}}"/></img></a>
	      	</div>

		    <nav id="nav-menu-container">
		      	<ul class="nav-menu">
		      		@yield('navbar')
		        </ul>
		    </nav>

    	</div>
  	</header>

  	@yield('intro')

  	<main id="main">

  		@yield('content')

	  	<!--==========================
	  				Sponsor
	  	============================-->
	  	@include('landing2020.parts.contactandfooter')

	<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>

  	</main>

</body>
</html>