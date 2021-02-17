@extends('master')
@section('konten')
<div class="col-sm-6">
    <h3 class="m-0 text-dark">Edit Data Penduduk</h3>
</div><!-- /.col -->
<br>
<form method="post" action="/penduduk/update/{{ $penduduk->id }}">
    {{ csrf_field() }}
    {{ method_field('PUT') }}
    <div class="form-group">
        <label>NIK</label>
        <input type="text" name="nik" class="form-control" placeholder="NIK .." value=" {{ $penduduk->nik }}">
        @if($errors->has('nik'))
        <div class="text-danger">
            {{ $errors->first('nik')}}
        </div>
        @endif
        </div>
        <div class="form-group">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" placeholder="Nama .." value=" {{ $penduduk->nama }}">
            @if($errors->has('nama'))
            <div class="text-danger">
                {{ $errors->first('nama')}}
            </div>
            @endif
        </div>
        <div class="form-group">
            <label>Jenis_Kelamin</label>
            <input type="text" name="jenis_kelamin" class="form-control" placeholder="Jenis Kelamin .." value=" {{ $penduduk->jenis_kelamin }}">
            @if($errors->has('jenis_kelamin'))
            <div class="text-danger">
                {{ $errors->first('jenis_kelamin')}}
            </div>
            @endif
        </div>
        <div class="form-group">
            <label>Alamat</label>
            <textarea name="alamat" class="form-control" placeholder="Alamat .."> {{ $penduduk->alamat }} </textarea>
            @if($errors->has('alamat'))
            <div class="text-danger">
                {{ $errors->first('alamat')}}
            </div>
            @endif
        </div>
        <div class="form-group">
            <label>Tanggal Input</label>
            <input type="date" id="tanggal_input" name="tanggal_input"  value=" {{ $penduduk->tanggal_input }}">
            @if($errors->has('tanggal_input'))
            <div class="text-danger">
                {{ $errors->first('tanggal_input')}}
            </div>
            @endif
        </div>
        <div class="form-group">
            <label>User_Input</label>
            <input type="text" name="user_input" class="form-control" placeholder="User Input .." value=" {{ $penduduk->user_input }}">
            @if($errors->has('user_input'))
            <div class="text-danger">
                {{ $errors->first('user_input')}}
            </div>
            @endif
        </div>
        <div class="form-group">
        <label>Tanggal Update</label>
        <input type="date" id="tanggal_input" name="tanggal_input" value=" {{ $penduduk->tanggal_update }}">
        @if($errors->has('tanggal_update'))
        <div class="text-danger">
            {{ $errors->first('tanggal_update')}}
        </div>
        @endif
    </div>
    <div class="form-group">
        <label>User Update</label>
        <input type="text" name="user_update" class="form-control" placeholder="User Update .." value=" {{ $penduduk->user_update }}">
        @if($errors->has('user_update'))
        <div class="text-danger">
            {{ $errors->first('user_update')}}
        </div>
        @endif
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-success" value="Simpan">
        </div>
    </form>
    @endsection