@extends('layout.dashboard-admin-template')

@section('title')
    Hasil Lomba @foreach($competition as $comp) {{ $comp->long_name }} @endforeach - ITCC 2020
@endsection

@section('content')
<div class="container-fluid">
    <!-- OVERVIEW -->

    @if (\Session::has('success'))
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <i class="fa fa-cross"></i> <strong>{{ \Session::get('success') }}</strong>
    </div>
    @endif
    
    <div class="col-sm-12">
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title"><center>Form Update Hasil Lomba</center></h3>
            </div>
            <div class="panel-body">
                <form action="/admin/update_hasil_lomba/{{ $id }}" class="form-horizontal" method="post">
                    {{ method_field('PUT') }}
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label class="control-label col-md-3">Nama Tim</label>
                        <div class="col-md-9">
                            <input type="text" name="nama_tim" class="form-control" placeholder="Input Nama Tim" value="{{ $nama_tim }}">
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
                            <input type="text" name="judul_karya" class="form-control" placeholder="Input Judul Karya" value="{{ $judul_karya }}">
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
                            <input type="text" name="predikat" class="form-control" placeholder="Input Predikat" value="{{ $predikat }}">
                            @if ($errors->has('predikat'))
                                <span class="invalid-feedback">
                                    <strong style="color: red;">{{ $errors->first('predikat') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <input type="hidden" name="competition_id" value="{{ $competition_id }}">

                    <button type="submit" class="btn btn-primary btn-block" style="margin-top: 10px;">Update</button>

                </form>
            </div>
        </div>
    </div>

</div>
@endsection

