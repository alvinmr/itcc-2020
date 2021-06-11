 <!--footer start -->
<footer id="kontak" style="background-color: #070707;">
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-12 col-md-4">
                <div class="footer_box">
                    <div class="footer_header">
                        <h4 class="footer_title">
                            Twitter
                        </h4>
                    </div>
                    <div class="footer_box_body">
                        <a class="twitter-timeline" data-width="360" data-height="500" data-theme="light" data-link-color="#021b79" href="https://twitter.com/itcc_udayana" style="color: #0575e6;">Tweets by ITCCUdayana</a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4">
                <div class="footer_box">
                    <div class="footer_header">
                        <h4 class="footer_title">
                            Facebook
                        </h4>
                    </div>
                    <div class="footer_box_body">
                        <div class="fb-page" data-href="https://www.facebook.com/ITCC.Udayana/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                            <blockquote cite="https://www.facebook.com/ITCC.Udayana/" class="fb-xfbml-parse-ignore">
                                <a href="https://www.facebook.com/ITCC.Udayana/" style="color: #0575e6;">ITCC Udayana</a>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4">
                <div class="footer_box">
                    <div class="footer_header">
                        <h4 class="footer_title">
                            Contact Person
                        </h4>
                    </div>
                    <div class="footer_box_body">
                        <h6>Contact Person</h6>
                        <p style="text-align: justify;">Teknologi Informasi Jimbaran 
                                Gedung Teknologi Informasi-Fakultas Teknik, 
                                Jalan Raya Kampus UNUD, Jimbaran, Badung, Bali</p><br>
                        <h6 class="subtitle-kuning">Maulidy Ady (Ketua Panitia)</h6>
                        <p>089689946243 / ID Line : maulidyady666</p>
                        <h6 class="subtitle-kuning">Geksin (Hubungan Masyarakat)</h6>
                        <p>081339215274 / ID Line : adeliaprtwi13</p>
                        <ul class="footer_social">
                            <li id="line-msg">
                                <a href="https://bit.ly/ITCCUdayana">
                                    <img style="height: 23px; margin-bottom: 5px;" src="{{asset('desain-2020/line.png')}}" id="line-red">
                                    <img style="height: 23px; margin-bottom: 5px;" src="{{asset('desain-2020/line-w.png')}}" id="line-white" class="hide">
                                </a>
                            </li>
                            <li>
                                <a href="https://www.facebook.com/ITCC.Udayana"><i class="ion-social-facebook"></i></a>
                            </li>
                            <li>
                                <a href="https://twitter.com/itcc_udayana"><i class="ion-social-twitter"></i></a>
                            </li>
                            <li id="askfm">
                                <a href="https://ask.fm/itcc_udayana">
                                    <img style="height: 23px; margin-bottom: 5px;" src="{{asset('desain-2020/askfm.png')}}" id="ask-fm-red">
                                    <img style="height: 23px; margin-bottom: 5px;" src="{{asset('desain-2020/askfm-w.png')}}" id="ask-fm-white" class="hide">
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/itcc_udayana/"><i class="ion-social-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!--<section id="google-map" style="height:300px !important;" data-latitude="-8.796310" data-longitude="115.176455"></section>-->

<div class="copyright_footer">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 ">
                <p><a href="https://it.unud.ac.id">Teknologi Informasi Universitas Udayana</a> | ITCC 2020</p>
            </div>
            <div class="col-md-6 col-12">
                <p style="color: #070707; font-size: 12px;"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            </div>
        </div>
    </div>
</div>
<!--footer end -->

<!-- jquery -->
<script src="{{asset('assets2020/js/jquery.min.js')}}"></script>
<!-- bootstrap -->
<script src="{{asset('assets2020/js/popper.js')}}"></script>
<script src="{{asset('assets2020/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets2020/js/waypoints.min.js')}}"></script>
<!--slick carousel -->
<script src="{{asset('assets2020/js/owl.carousel.min.js')}}"></script>
<!--parallax -->
<script src="{{asset('assets2020/js/parallax.min.js')}}"></script>
<!--Counter up -->
<script src="{{asset('assets2020/js/jquery.counterup.min.js')}}"></script>
<!--Counter down -->
<script src="{{asset('assets2020/js/jquery.countdown.min.js')}}"></script>
<!-- WOW JS -->
<script src="{{asset('assets2020/js/wow.min.js')}}"></script>
<!-- Custom js -->
<script src="{{asset('assets2020/js/main.js')}}"></script>

<script type="text/javascript">
    $("#askfm a").hover(function(){
        $("#ask-fm-red").addClass("hide");
        $("#ask-fm-white").removeClass("hide");
    }, function() {
        $("#ask-fm-red").removeClass("hide");
        $("#ask-fm-white").addClass("hide");
    });

    $("#line-msg a").hover(function(){
        $("#line-red").addClass("hide");
        $("#line-white").removeClass("hide");
    }, function() {
        $("#line-red").removeClass("hide");
        $("#line-white").addClass("hide");
    });

    $("#inovasi-box").hover(function(){
        $("#logo-inovasi-red").addClass("hide");
        $("#logo-inovasi-white").removeClass("hide");
    }, function() {
        $("#logo-inovasi-red").removeClass("hide");
        $("#logo-inovasi-white").addClass("hide");
    });

    $("#softdev-box").hover(function(){
        $("#logo-softdev-red").addClass("hide");
        $("#logo-softdev-white").removeClass("hide");
    }, function() {
        $("#logo-softdev-red").removeClass("hide");
        $("#logo-softdev-white").addClass("hide");
    });

    $("#idebisnis-box").hover(function(){
        $("#logo-idebisnis-red").addClass("hide");
        $("#logo-idebisnis-white").removeClass("hide");
    }, function() {
        $("#logo-idebisnis-red").removeClass("hide");
        $("#logo-idebisnis-white").addClass("hide");
    });
    
    function competitionGallery() {
        document.getElementById("competitionGallery").style.display = "block";
        document.getElementById("sharingGallery").style.display = "none";
        document.getElementById("expoGallery").style.display = "none";
        document.getElementById("openingGallery").style.display = "none";
        
        document.getElementById("competitionGallery").firstElementChild.id = "multi-item-example";
        document.getElementById("sharingGallery").firstElementChild.id = "multi-item-example-1";
        document.getElementById("expoGallery").firstElementChild.id = "multi-item-example-2";
        document.getElementById("openingGallery").firstElementChild.id = "multi-item-example-3";
    }
    
    function sharingGallery() {
        document.getElementById("competitionGallery").style.display = "none";
        document.getElementById("sharingGallery").style.display = "block";
        document.getElementById("expoGallery").style.display = "none";
        document.getElementById("openingGallery").style.display = "none";
        
        document.getElementById("competitionGallery").firstElementChild.id = "multi-item-example-1";
        document.getElementById("sharingGallery").firstElementChild.id = "multi-item-example";
        document.getElementById("expoGallery").firstElementChild.id = "multi-item-example-2";
        document.getElementById("openingGallery").firstElementChild.id = "multi-item-example-3";
    }
    
    function expoGallery() {
        document.getElementById("competitionGallery").style.display = "none";
        document.getElementById("sharingGallery").style.display = "none";
        document.getElementById("expoGallery").style.display = "block";
        document.getElementById("openingGallery").style.display = "none";
        
        document.getElementById("competitionGallery").firstElementChild.id = "multi-item-example-1";
        document.getElementById("sharingGallery").firstElementChild.id = "multi-item-example-2";
        document.getElementById("expoGallery").firstElementChild.id = "multi-item-example";
        document.getElementById("openingGallery").firstElementChild.id = "multi-item-example-3";
    }
    
    function openingGallery() {
        document.getElementById("competitionGallery").style.display = "none";
        document.getElementById("sharingGallery").style.display = "none";
        document.getElementById("expoGallery").style.display = "none";
        document.getElementById("openingGallery").style.display = "block";
        
        document.getElementById("competitionGallery").firstElementChild.id = "multi-item-example-1";
        document.getElementById("sharingGallery").firstElementChild.id = "multi-item-example-2";
        document.getElementById("expoGallery").firstElementChild.id = "multi-item-example-3";
        document.getElementById("openingGallery").firstElementChild.id = "multi-item-example";
    }
    
    $('.img-fluid').click(function () {
       $(this).find('img').fadeTo(500, 0.5);
    });
</script>

<script type="text/javascript">
    $(function() {
      $(".img-w").each(function() {
        $(this).wrap("<div class='img-c'></div>")
        let imgSrc = $(this).find("img").attr("src");
         $(this).css('background-image', 'url(' + imgSrc + ')');
      })
                
      
      $(".img-c").click(function() {
        let w = $(this).outerWidth()
        let h = $(this).outerHeight()
        let x = $(this).offset().left
        let y = $(this).offset().top
        
        
        $(".active").not($(this)).remove()
        let copy = $(this).clone();
        copy.insertAfter($(this)).height(h).width(w).delay(500).addClass("active")
        $(".active").css('top', y - 8);
        $(".active").css('left', x - 8);
        
          setTimeout(function() {
        copy.addClass("positioned")
      }, 0)
        
      })     
      
    })

    $(document).on("click", ".img-c.active", function() {
      let copy = $(this)
      copy.removeClass("positioned active").addClass("postactive")
      setTimeout(function() {
        copy.remove();
      }, 500)
    })
    
    var click = 0;

    function toggle(it) {
        if (click != 1) {
            it.parentElement.parentElement.id = "full-screen-img";
            click = 1;
        } else {
            it.parentElement.parentElement.id = "";
            click = 0;
        }
    }
</script>