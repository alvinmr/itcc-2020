<div id="bg-signup">
    <div id="bg-signup-graphics" style="background: url('{{asset('desain-2020/grafis-banner.png')}}');">
        <div class="container">
        	<div class="row" style="margin-top: 90px;">

        		<div class="d-none d-xl-block col-md-4 box" style="background: #232323; height: 650px; margin-top: 50px;">
                    <img src="{{asset('desain-2020/logo-white.png')}}" style=" width: 70%;margin-left: 65px;margin-top: 70px;margin-bottom:20px;" class="img-responsive center-block ">
                         
                    <h5 style="color:#a2c8cc; text-align: center;">"Creative Innovation Society 5.0 to Prevent The Effects of Pandemic Outbreak"</h5>
                    <h4 style="color: white; text-align: center;">{{$competition->long_name}}</h4>
                    <hr style="width: 80%; color: white; margin-bottom: 5px;">
                    <p style="color: white; text-align: center; font-size: 12px;">
                        {{$competition->description}}
                    </p>

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
                            <img style="height: 30px;" src="{{asset('desain-2020/askfm-w.png')}}">
                        </a>
                        <a href="https://bit.ly/ITCCUdayana">
                            <img style="height: 30px;" src="{{asset('desain-2020/line-w.png')}}">
                        </a>
                    </p>

                    <!-- <p style="margin-left: 105px;"><a href="https://www.facebook.com/ITCC.Udayana"><img style="width: 30px;" src="{{asset('asset/images/facebook.png')}}"></a><a href="https://twitter.com/ITCCUdayana"><img style="width: 30px;" src="{{asset('asset/images/twitter.png')}}"></a><a href="https://www.instagram.com/itcc_udayana/"><img style="width: 30px;" src="{{asset('asset/images/instagram.png')}}"></a><a href="https://ask.fm/itcc_udayana"><img style="width: 30px;" src="{{asset('asset/images/Askfm.png')}}"></a><a href="https://bit.ly/ITCCUdayana"><img style="width: 30px;" src="{{asset('asset/images/line.png')}}"></a></p> -->
                </div>

                <div class="col-md-8 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms" style="margin-top: 50px;">
                	<form action="{{url('/daftar')}}" method="post" accept-charset="utf-8" enctype="multipart/form-data">
    				{{ csrf_field() }}
    				<input type="hidden" value="{{$competition->id}}" name="competition_id" />
                	<div class="card mb-2" style="border-radius: 0px;background-color:#fff;">
            			<div class="card-body" style="padding: 32px;">
            				<h4 class="card-title mb-4" style="text-align: center">DATA TIM</h4>
            				<div class="form-group row">
                 				<label for="group_name" class="col-md-3 col-form-label">Nama Tim</label>
                                <div class="col-md-9">
                                    <input value="{{old('group_name')}}" class="form-control{{ $errors->has('group_name') ? ' is-invalid' : '' }}" placeholder="ex. 'Team Greentea'" name="group_name" type="text" id="group_name">

                                    @if ($errors->has('group_name'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('group_name') }}</strong>
                                        </span>
                                    @endif
                                </div>
               				</div>
               				<div class="form-group row">
                 				<label for="institution" class="col-md-3 col-form-label">Asal Institusi</label>
                 				<div class="col-md-9">
                     				<input value="{{old('institution')}}" class="form-control{{ $errors->has('institution') ? ' is-invalid' : '' }}" placeholder="ex. 'Universitas Udayana' atau 'SMA Negeri 1 Abcd'" name="institution" type="text">
                     				@if ($errors->has('institution'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('institution') }}</strong>
                                        </span>
                                    @endif
                 				</div>
               				</div>
            			</div>
            		</div>

            		<div class="card mb-2" style="border-radius: 0px;background-color:#fff;">
            			<div class="card-body" style="padding: 32px;">
            				<h4 class="card-title mb-4" style="text-align: center">DATA KETUA TIM</h4>
            				<div class="form-group row">
                                <label for="fullname" class="col-md-3 col-form-label">Nama Lengkap</label>
                                <div class="col-md-9">
                                    <input value="{{old('full_name')}}" class="form-control{{ $errors->has('full_name') ? ' is-invalid' : '' }}" placeholder="ex. 'Nama Brata'" name="full_name" type="text">
                                    @if ($errors->has('full_name'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('full_name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="birthday" class="col-md-3 col-form-label">Tanggal Lahir</label>
                                <div class="col-md-9">
                                    <input value="{{old('birthdate')}}" class="form-control{{ $errors->has('birthdate') ? ' is-invalid' : '' }}" placeholder="ex. '1995/12/27'" name="birthdate" type="date">
                                    @if ($errors->has('birthdate'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('birthdate') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-md-3 col-form-label">Email</label>
                                <div class="col-md-9">
                                    <input value="{{old('email')}}" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="ex. 'mail@site.com'" name="email" type="email">
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                            	<label for="contact" class="col-md-3 col-form-label">Nomor Kontak</label>
                                <div class="col-md-9">
                                    <input value="{{old('contact')}}" class="form-control{{ $errors->has('contact') ? ' is-invalid' : '' }}" placeholder="ex. '081632111111'" name="contact" type="number">
                                    @if ($errors->has('contact'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('contact') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            {{-- <div class="form-group row">
                                <label class="col-md-3 col-form-label">Vegetarian</label>
                                <div class="col-md-9">
                                   <label><input {{ old('vegetarian')=="1"?"checked":"" }} class="{{ $errors->has('vegetarian') ? ' is-invalid' : '' }}" type="radio" value="1" name="vegetarian"> Ya </label> <label><input {{ old('vegetarian')=="0"?"checked":"" }}  type="radio" value="0" class="{{ $errors->has('vegetarian') ? ' is-invalid' : '' }}" name="vegetarian"> Tidak</label>
                                   @if ($errors->has('vegetarian'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('vegetarian') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div> --}}
                            <input type="hidden" name="vegetarian" value="0">
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Kartu Identitas</label>
                                <div class="col-md-9">
                                    <input name="photo" type="file" class="form-control{{ $errors->has('photo') ? ' is-invalid' : '' }}" accept="image/*" id="imgInp">
                                    <small>Gambar dalam bentuk file jpeg atau png</small>
                                    @if ($errors->has('photo'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('photo') }}</strong>
                                        </span>
                                    @endif
                                    <br><img id="blah" class="img-fluid" src="#" alt="" style="margin-top: 20px; max-height: 500px; margin-bottom: 10px;"/><br><br>
                                </div>
                            </div>
                            @if ($competition->id == 3)
                                {{-- <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Baju Peserta</label>
                                    <div class="col-md-9">
                                        <label><input {{ old('buy_shirt')=="1"?"checked":"" }} type="radio" id="baju-yes" class="{{ $errors->has('buy_shirt') ? ' is-invalid' : '' }}" value="1" name="buy_shirt"> Ya </label> <label><input {{ old('buy_shirt')=="0"?"checked":"" }} type="radio" id="baju-no" class="{{ $errors->has('buy_shirt') ? ' is-invalid' : '' }}" value="0" name="buy_shirt"> Tidak</label><br>
                                        <small>Apabila Anda membeli baju peserta, akan dikenakan biaya tambahan sebesar Rp</small><small id="harga_baju">{{$harga_baju}} dan apabila anda ingin membeli maka otomatis anggota tim anda juga membeli</small>
                                        @if ($errors->has('buy_shirt'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('buy_shirt') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row" id="ukuran-baju" style="display: none;">
                                    <label class="col-md-3 col-form-label">Ukuran Baju</label>
                                    <div class="col-md-9">
                                        <select id="select-ukuran" name="size" class="form-control" >
                                            <option value="">Pilih Ukuran Baju</option>
                                            <option value="s">Small</option>
                                            <option value="m">Medium</option> 
                                            <option value="l">Large</option>
                                            <option value="xl">Extra Large</option>          
                                        </select>
                                        <small>Desain dapat dilihat </small> <a data-toggle="modal" data-target="#sizeChart">disini</a>
                                        @if ($errors->has('size'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('size') }}</strong>
                                            </span>
                                        @endif
                                  </div>
                                </div> --}}
                                <input type="hidden" name="buy_shirt" value="0">
                                <input type="hidden" name="size" value="s">
                            @else
                            {{-- <div class="form-group row" id="ukuran-baju">
                                <label class="col-md-3 col-form-label">Ukuran Baju</label>
                                <div class="col-md-9">
                                    <select id="select-ukuran" name="size" class="form-control" >
                                        <option value="">Pilih Ukuran Baju</option>
                                        <option value="s">Small</option>
                                        <option value="m">Medium</option> 
                                        <option value="l">Large</option>
                                        <option value="xl">Extra Large</option>          
                                    </select>
                                    <small>*peserta yang lolos babak penyisihan akan mendapatkan baju ITCC gratis. Desain dapat dilihat </small> <a data-toggle="modal" data-target="#sizeChart" href="#">disini</a>
                                    @if ($errors->has('size'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('size') }}</strong>
                                        </span>
                                    @endif
                              </div>
                            </div> --}}
                            <input type="hidden" name="size" value="s">
                            @endif                            
            			</div>
            		</div>

            		<div class="card mb-2" style="border-radius: 0px;background-color:#fff;">
            			<div class="card-body" style="padding: 32px;">
            				<h4 class="card-title mb-4" style="text-align: center">DATA AUTENTIFIKASI</h4>
            				<div class="form-group row">
                            	<label class="col-md-3 col-form-label">Username</label>
                                <div class="col-md-9">
                                    <input value="{{old('username')}}" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" placeholder="nama pengguna" name="username" type="text">
                                    @if ($errors->has('username'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('username') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Password</label>
                                <div class="col-md-9">
                                    <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="kata sandi" name="password" id="pass" type="password">
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Konfirmasi Password</label>
                            	<div class="col-md-9">
                                    <input class="form-control{{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}" placeholder="ulangi kata sandi" name="password_confirmation" type="password">
                                    @if ($errors->has('password_confirmation'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
            			</div>
            		</div>
            		<div class="card" style="border-radius: 0px; margin-bottom: 30px;">
            			<div class="card-body">
            				<button class="btn btn-kuning btn-block" type="submit">Daftar</button>
            			</div>
            		</div>

            		</form>
                </div>
        	</div>
        </div>
    </div>
</div>
<!--//HEADER WEBSITE-->

<!--Modal-->
<div class="modal fade" id="sizeChart" role="dialog">
    <div class="modal-dialog modal-lg"> 
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-body">
                <img src="{{ asset('baju/desainbaju.jpg') }}" style="width:80%;
                    display: block;
                    margin-left: auto;
                    margin-right: auto;">
            </div>
        </div>
    </div>
</div>
<!--End Modal-->
<script>
	$('#baju-yes').click(function(e){
		$('#ukuran-baju').show();
	});
	$('#baju-no').click(function(e){
		$('#ukuran-baju').hide();
	});
</script>
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