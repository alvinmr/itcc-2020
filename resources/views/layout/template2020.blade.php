<!DOCTYPE html>
<html>
<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta name="description" content="ITCC 2020 - Information Technology Creative Competition">
    <meta name="keywords" content="ITCC 2020 , ITCC , Information Technology Creative Competition, IT Competition">
    <meta name="author" content="ITCC 2020">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- ========== Title ========== -->
    <title>@yield('title')</title>
    <!-- ========== Favicon Ico ========== -->
    <link rel="icon" type="image/jpg" href="{{asset('desain-2020/logo-red.png')}}">
    <!-- ========== STYLESHEETS ========== -->
    <!-- Bootstrap CSS -->
    <link href="{{asset('assets2020/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Fonts Icon CSS -->
    <link href="{{asset('assets2020/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets2020/css/et-line.css')}}" rel="stylesheet">
    <link href="{{asset('assets2020/css/ionicons.min.css')}}" rel="stylesheet">
    <!-- Carousel CSS -->
    <link href="{{asset('assets2020/css/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets2020/css/owl.theme.default.min.css')}}" rel="stylesheet">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{asset('assets2020/css/animate.min.css')}}">
    <!-- Custom styles for this template -->
    <link href="{{asset('assets2020/css/main.css')}}" rel="stylesheet">
    <!-- Custom styles by gungkrisna -->
    <link href="{{asset('assets2020/css/custom.css')}}" rel="stylesheet">
    <link href="{{asset('asset1/css/custom.css')}}" rel="stylesheet">

    <div id="fb-root"></div>
    <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v3.1';
    fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
    </script>

    <script id="twitter-wjs" type="text/javascript" async defer src="//platform.twitter.com/widgets.js"></script>
    <!--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVsIiuzFRNvG7RRSfKLM8o4QY2-qzCtR8"></script>-->

    <script src="{{asset('asset1/lib/jquery/jquery.min.js')}}"></script>
</head>
<body>
	<!--==========================
  				Header
  	============================-->
	<header class="header navbar fixed-top navbar-expand-md">
        <div class="container">
            <a class="navbar-brand logo" href="/">
                <img src="{{asset('desain-2020/logo-red.png')}}" alt="ITCC 2020" style="height: 50px;" />
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#headernav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="lnr lnr-text-align-right"></span>
            </button>
            <div class="collapse navbar-collapse flex-sm-row-reverse" id="headernav">
                @yield('navbar')
            </div>
        </div>
    </header>

  	@yield('intro')

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