@extends('layout.dashboard-admin-template')

@section('title')
    Hasil Lomba @foreach($competition as $comp) {{ $comp->long_name }} @endforeach - ITCC 2020
@endsection

@section('content')
<div class="container-fluid">
    <!-- OVERVIEW -->

    <div class="alert alert-warning alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <i class="fa fa-info"></i> <strong> Masukan hasil lomba peserta berurutan sesuai predikat, (juara 1 dimasukan pertama)</strong>
    </div>

    @if (\Session::has('success'))
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <i class="fa fa-cross"></i> <strong>{{ \Session::get('success') }}</strong>
    </div>
    @endif
    
    <div class="col-sm-12">
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title"><center>Form Input Hasil Lomba</center></h3>
            </div>
            <div class="panel-body">
                <form action="/admin/hasil_lomba" class="form-horizontal" method="post">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label class="control-label col-md-3">Nama Tim</label>
                        <div class="col-md-9">
                            <input type="text" name="nama_tim" class="form-control" placeholder="Input Nama Tim">
                            @if ($errors->has('nama_tim'))
                                <span class="invalid-feedback">
                                    <strong style="color: red;">{{ $errors->first('nama_tim') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group" style="margin-top: 20px; margin-bottom: 20px;">
                        <label class="control-label col-md-3">Judul Karya</label>
                        <div class="col-md-9">
                            <input type="text" name="judul_karya" class="form-control" placeholder="Input Judul Karya">
                            @if ($errors->has('judul_karya'))
                                <span class="invalid-feedback">
                                    <strong style="color: red;">{{ $errors->first('judul_karya') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Predikat</label>
                        <div class="col-md-9">
                            <input type="text" name="predikat" class="form-control" placeholder="Input Predikat">
                            @if ($errors->has('predikat'))
                                <span class="invalid-feedback">
                                    <strong style="color: red;">{{ $errors->first('predikat') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <input type="hidden" name="competition_id" value="{{ Auth::user()->competition_id }}">

                    <button type="submit" class="btn btn-primary btn-block" style="margin-top: 10px;">Insert</button>

                </form>
            </div>
        </div>
    </div>

    <!-- END OVERVIEW -->
    <div class="row">
        <div class="col-md-12">
            <!-- DATA ANGGOTA -->
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title"><center>Hasil Lomba @foreach($competition as $comp) {{ $comp->long_name }} @endforeach</center></h3>
                </div>
                <div class="panel-body table-responsive">
                    <table class="table table-striped" id="example">
                        <thead>
                            <tr>
                               <th>Nama Tim</th>
                               <th>Judul Karya</th>
                               <th>Predikat</th>
                               <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($hasilLomba as $hasil)
                            <tr>
                                <td>{{$hasil->nama_tim}}</td>
                                <td>{{$hasil->judul_karya}}</td>
                                <td>{{$hasil->predikat}}</td>
                                <td>
                                    <a href="/admin/hapus_hasil_lomba/{{$hasil->id}}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                    <a href="/admin/edit_hasil_lomba/{{$hasil->id}}" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection

