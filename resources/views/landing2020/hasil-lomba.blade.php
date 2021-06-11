@extends('layout.template2020')
@section('title')
    Hasil Lomba {{ $lomba }} - ITCC 2020
@endsection

@section('navbar')
<ul class="nav navbar-nav menu">
    <li class="nav-item">
        <a class="nav-link active" href="{{url('/')}}">Beranda</a>
    </li>
</ul>
@endsection

@section('intro')
<!--page title section-->
<section class="inner_cover parallax-window" data-parallax="scroll" data-image-src="{{asset('desain-2020/grafis-banner.png')}}">
    <div class="overlay_dark"></div>
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-12">
                <div class="inner_cover_content">
                    <h3>
                       Hasil Lomba {{ $lomba }}
                    </h3>
                </div>
            </div>
        </div>

        <div class="breadcrumbs">
            <ul>
                <li><a href="/">Home</a>  |   </li>
                <li><span>Hasil Lomba {{ $lomba }}</span></li>
            </ul>
        </div>
    </div>
</section>
<!--page title section end-->


<!--events section -->
<section class="pt100 pb100">
    <div class="container">
       <div class="section_title">
            <h3 class="title" style="margin-bottom: 0px !important">
                HASIL LOMBA {{ $lomba }}
            </h3>
            <h5 style="color: #e2e2e2 !important">
                Information Technology Creative Competition 2020
            </h5>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-12">
                <table class="table table-striped" style="color: #fff;">
                  <thead>
                    <tr>
                      <th scope="col">Nama Tim</th>
                      <th scope="col">Judul Karya</th>
                      <th scope="col">Predikat</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($hasilLomba as $hasil)
                    <tr>
                      <td>{{ $hasil->nama_tim }}</td>
                      <td>{{ $hasil->judul_karya }}</td>
                      <td>{{ $hasil->predikat }}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<!--event section end -->
@endsection
