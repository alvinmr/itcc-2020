@extends('layout.dashboard-template')

@section('title')
    Verifikasi - ITCC 2020
@endsection

@section('pesan')
@if(count($jumlahPesan)!=0)
	<span class="badge bg-danger">{{count($jumlahPesan)}}</span>
@endif
@endsection

@section('content')
<div class="container-fluid">

    @if (\Session::has('success'))
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <i class="fa fa-cross"></i> <strong>{{ \Session::get('success') }}</strong>
    </div>
    @endif

	<div class="row">
		<div class="col-sm-12">
			@if(Auth::user()->verif == NULL)
				<div class="alert alert-warning">
					<p style="font-weight: bold;">Hai, {{Auth::user()->group_name}}</p>
					<p style="text-align: justify; text-justify: inter-word;">Silahkan melakukan pembayaran pendaftaran ke :<br>--------<br> <b>Jenis Bank : BNI<br>No. Rekening : 0861271823 a.n Putu Piska Pradnya Paramitha S<br>Nominal : Rp {{number_format($biaya_pendaftaran)}}</b><br>--------<br></p>
					<p style="text-align: left">Rincian Biaya sebagai berikut :
						<ul>
							<li style="text-align: left">Biaya Pendaftaran Rp {{number_format($biaya_pendaftaran)}}</li>
						</ul>
					</p><br>
					<p><b>INGAT! Nominal harus sesuai dengan yang disebutkan diatas. Jika tidak, maka data tidak akan diproses.</b></p>
					Setelah melakukan pembayaran, upload bukti pembayaran dan mohon menunggu verifikasi oleh panitia ITCC maksimal 2 x 24 jam.
					<br>Contact Person : Dewa - dewa271 (line ID) / 087862034525 (WA)
				</div>
			@elseif(Auth::user()->verified == 0 || Auth::user()->verified == null)
				<div class="alert alert-warning">
					<p style="font-weight: bold;">Hai, {{Auth::user()->group_name}}</p>
					<p style="text-align: justify; text-justify: inter-word;">Tunggu sebentar ya, Bukti Pembayaran anda sedang diproses panitia. Mohon bersabar. Jika anda melakukan kesalahan dalam pengunggahan bukti pembayaran, anda dapat mengunggahnya kembali dan bukti pembayaran lama akan terhapus dan tergantikan dengan yang baru.</p><br>
					mohon menunggu verifikasi oleh panitia ITCC maksimal 2 x 24 jam.
					<br>Contact Person : Dewa - dewa271 (line ID) / 087862034525 (WA)<br><br>
					<p><b>Bukti Pembayaran saat ini adalah<b></p>
					@if(Auth::user()->verif->filetype == "pdf")
					<a href="{{asset($dir.'/'.Auth::user()->verif->filename)}}">{{ Auth::user()->verif->filename }}</a>
					@else
					<img src="{{asset($dir.'/'.Auth::user()->verif->filename)}}" alt="" style="margin-top: 20px; max-height: 500px; margin-bottom: 10px;"/>
					@endif
				</div>
			@else
				<div class="alert alert-success">
					<p style="font-weight: bold;">Hai, {{Auth::user()->group_name}}</p>
					<p style="text-align: justify; text-justify: inter-word;">Terimakasih sudah melakukan pembayaran. Kami dari segenap Panitia ITCC 2020 mengucapkan terimakasih dan Selamat! anda sudah menjadi peserta sah ITCC 2020.</p>
					
				</div>
			@endif
		</div>
		@if(Auth::user()->verified != 1)
		<div class="col-sm-12">
			<div class="panel">
					<div class="panel-heading">
						<h3 class="panel-title"><center>Upload Bukti Pembayaran</center></h3>
					</div>
					<div class="panel-body">
						<form action="{{url('verifikasi')}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
							<div class="form-group">
								<label class="control-label col-md-3">Bukti Pembayaran</label>
								<div class="col-md-9">
									<input type="file" name="photo" class="form-control" accept="images/*" id="imgInp">
									<small style="color: red;">*Bukti pembayaran dalam bentuk file JPEG, PNG atau PDF</small>
									@if ($errors->has('photo'))
	                                    <span class="invalid-feedback">
	                                        <small style="color: red;">*{{ $errors->first('photo') }}</small>
	                                    </span>
	                                @endif
									<br><img id="blah" src="#" alt="" style="margin-top: 20px; max-height: 500px; margin-bottom: 10px;"/>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3">Keterangan</label>
								<div class="col-md-9">
									<textarea class="form-control" name="note" placeholder="Input Keterangan"></textarea>
								</div>
							</div>
							<button type="submit" class="btn btn-primary">Submit</button>

						</form>
					</div>
			</div>
		</div>
		@endif
	</div>
</div>
<script type="text/javascript">
function readURL(input) {

  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function(e) {
      $('#blah').attr('src', e.target.result);
    }

    reader.readAsDataURL(input.files[0]);
  }
}

$("#imgInp").change(function() {
  readURL(this);
});
</script>
@endsection