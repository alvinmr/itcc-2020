<header class="header navbar fixed-top navbar-expand-md">
    <div class="container">
        <a class="navbar-brand logo" href="#">
            <img src="{{asset('desain-2020/logo-red.png')}}" alt="ITCC 2020" style="height: 50px;" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#headernav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="lnr lnr-text-align-right"></span>
        </button>
        <div class="collapse navbar-collapse flex-sm-row-reverse" id="headernav">
            <ul class="nav navbar-nav menu">
                <li class="nav-item">
                    <a class="nav-link active" href="{{url('/')}}">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#lomba">Lomba</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#jadwal">Jadwal</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#informasi">Informasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#kontak">Kontak</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" href="#">Pendaftaran</a>
                    <ul>
                        <li><a href="{{url('/daftar/inovasikreatif')}}">Lomba Inovasi Kreatif</a></li>
                        <li><a href="{{url('/daftar/softwaredevelopment')}}" class="longtitled-header">Lomba Software Development</a></li>
                        <li><a href="{{url('/daftar/idebisnis')}}" class="longtitled-header">Lomba Pengembangan Ide Bisnis TIK</a></li>
                    </ul>
                </li> -->
                <li class="nav-item">
                    <div class="dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pendaftaran</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown01">
                            <a class="dropdown-item" href="{{url('/daftar/inovasikreatif')}}">Lomba Inovasi Kreatif</a>
                            <a class="dropdown-item" href="{{url('/daftar/mobileappdevelopment')}}">Lomba Mobile App Development</a>
                            <a class="dropdown-item" href="{{url('/daftar/idebisnis')}}">Lomba Pengembangan Ide Bisnis TIK</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="/faq">FAQ</a>
                </li>
                <li class="nav-item">
                    <a href="{{url('/login')}}" class="btn btn-kuning btn-rounded" style="margin: 10px;">
                        LOGIN
                    </a>
                </li>
                <!-- <li class="search_btn">
                    <a  href="#">
                       <i class="ion-ios-search"></i>
                    </a>
                </li> -->
            </ul>
        </div>
    </div>
</header>