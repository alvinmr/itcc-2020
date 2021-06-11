@extends('layout.template2020')
@section('title')
	FAQ - ITCC 2020
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
                <a class="dropdown-item" href="{{url('/daftar/softwaredevelopment')}}">Lomba Mobile App Development</a>
                <a class="dropdown-item" href="{{url('/daftar/idebisnis')}}">Lomba Pengembangan Ide Bisnis TIK</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link " href="/faq">FAQ</a>
    </li>
</ul>
@endsection

@section('intro')
<div id="bg-content">
    <div id="bg-signup-graphics" style="background: url('{{asset('assets2020/img/desain-2020/grafis-banner.png')}}');">
    	<div class="container">
    		<div class="row" style="margin-top: 130px;">
    			<div class="col-md-2 hidden-sm hidden-sx"></div>
    			<div class="col-md-8 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
    				<div class="box">

    					<div class="box-head" style="background-color: #000000c9; text-align: center;">
    						<h3>Frequently Asked Questions (FAQ)</h3>
    					</div>

    					<div class="box-body">
    						<dl>
                                <dt>Cara Mendaftar ITCC 2020</dt>
                                <dd style="padding: 10px;"><p>Caranya sangat mudah.
                                <br>
                                    Daftar pada bagian pendaftaran di navbar atas atau pada section lomba pada halaman utama web ITCC 2020.
                                    <br>
                                    Lengkapi data diri dan data anggota tim.<br>
                                    Bayar lomba melalui ATM pada rekening <b>BNI</b>, <b><i>0861271823 a.n Putu Piska Pradnya Paramitha S</i></b>
                                    <b>Ingat ! jangan melakukan pembayaran sebelum periode pendaftaran dibuka</b>
                                    Kirim foto bukti pembayaran pada <a href="/verifikasi" style="color: #3c5dda;">halaman verifikasi</a>. Pastikan kamu sudah masuk(login) pada website ITCC 2020.
                                    Tunggu proses verifikasi selesai.<p></dd>
                                
                                <dt>Kartu Identitas Pada Saat Pendaftaran</dt>
                                <dd style="padding: 10px;"><p>Kartu identitas yang dimaksud adalah KTP/Kartu Tanda Mahasiswa/Kartu Pelajar.</p></dd>
                                
                                <dt>Lokasi Lomba Diadakan</dt>
                                <dd>Lomba akan diadakan secara online, untuk lebih lengkap bisa download Guidebook masing-masing lomba pada link berikut <a href="{{asset('guidebook/Guidebook_Lomba_Inovasi_Kreatif_ITCC_2020.pdf')}}">Inovasi Kreatif</a>, <a href="{{asset('guidebook/Guidebook_Lomba_Mobile_App_Development_ITCC_2020.pdf')}}">Mobile App Development</a>, <a href="{{asset('guidebook/Guidebook_Lomba_Pengembangan_Ide_Bisnis_TIK_ITCC_2020.pdf')}}">Pengembangan Ide Bisnis TIK</a>, atau menuju ke halaman masing-masing lomba melalui navigasi web ITCC 2020</dd>
                                
                                <dt>Kalangan yang dapat Mengikuti Kategori Lomba Umum</dt>
                                <dd>Pada kategori lomba umum dibatasi dengan usia maksimal 24 tahun.</dd>

                                <dt>Pendaftaran ITCC 2020</dt>
                                <dd>Pendaftaran masing-masing cabang lomba akan dibuka pada tanggal :
                                <br>Inovasi Kreatif : 3 Agustus 2020
                                <br>Mobile App Development : 13 Juli 2020
                                <br>Pengembangan Ide Bisnis TIK : 3 Agustus 2020</dd>

                                <dt>Pembayaran Biaya Pendaftaran di ATM</dt>
                                <dd>Pembayaran biaya pendaftaran dapat dilakukan dengan cara trasnfer ke:<br><b>No Rek: 0861271823</b><br><b>Bank: BNI</b><br><b>Atas Nama: Putu Piska Pradnya Paramitha S</b><br>Nominal biaya pendaftaran dapat dilihat pada Guidebook masing-masing lomba</dd>

                                <dt>Arti dari Tema ITCC 2020</dt>
                                <dd>Kegiatan Information Technology Creative Competition 2020 ini mengangkat tema <b>“Creative Innovation Society 5.0 to Prevent The Effects of Pandemic Outbreak”</b>.  Saat ini dunia tengah dihadapi dengan situasi yang mengkhawatirkan sehingga dibutuhkan solusi untuk mencegah dampak pandemi ini baik dampak ketika wabah pandemi sedang berlangsung maupun ketika wabah pandemi berakhir yaitu dengan trobosan trobosan inovatif yang arahnya lebih ke masyarakat itu sendiri seperti konsep society 5.0 yang menggunakan teknologi lebih ke arah kesejahteraan masyarakat dimana jika hal ini dilakukan akan dapat mencegah efek dari wabah pandemi yang sedang terjadi saat ini.</dd>
                            </dl>
                            <style type="text/css">
                                dl {
                                    background: #e3e3e3;
                                    border: 1px solid rgba(0,0,0, .2);
                                }

                                dl, dt, dd{
                                    /*border-radius: 5px;*/
                                }

                                dt {
                                    background-color:#ba0000;
                                    border-bottom: 1px solid #070707;
                                    border-top: 1px solid #070707;
                                    color: #FAFAFA;
                                    cursor: pointer;
                                    font-size: 12pt;                                    
                                    line-height: 2em;
                                    padding: 5px;
                                }

                                dt:first-child {
                                    border-top: 0;
                                }

                                dt:last-of-type {
                                    border-bottom: 0;
                                }

                                dd {
                                    margin-left: 0;
                                    padding: 0;
                                }
                            </style>
                            <script type="text/javascript">
                                (function() {
                                   
                                    $('dd').filter(':nth-child(n+4)').hide();
                                        
                                    $('dl').on("mouseenter", 'dt', function() {
                                        $(this)
                                            .next()
                                            .slideDown(300)
                                            .siblings('dd')
                                            .slideUp(300);
                                    });    
                                })();
                            </script>
    					</div>

    				</div>
    			</div>
    			<div class="col-md-2 hidden-sm hidden-xs"></div>
    		</div>
    	</div>
    </div>
</div>
@endsection
