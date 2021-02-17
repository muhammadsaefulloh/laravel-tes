@extends('master')
@section('konten')
<div class="col-sm-6">
    <h3 class="m-0 text-dark">Tambah Data Penduduk</h3>
</div><!-- /.col -->
<br>
<form method="post" action="/penduduk/store">
    {{ csrf_field() }}
    <div class="form-group">
    <label>NIK</label>
    <input type="text" name="nik" class="form-control" placeholder="NIK ..">
                            @if($errors->has('nik'))
                                <div class="text-danger">
                                    {{ $errors->first('nik')}}
                                </div>
                            @endif

                        </div>
                        
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama" class="form-control" placeholder="Nama ..">

                            @if($errors->has('nama'))
                                <div class="text-danger">
                                    {{ $errors->first('nama')}}
                                </div>
                            @endif

                        </div>
                        
                        <div class="form-group">
                            <label>Jenis Kelamin</label><br>
                            <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                                <option value="P">Pria</option>
                                <option value="W">Wanita</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea name="alamat" class="form-control" placeholder="Alamat .."></textarea>

                             @if($errors->has('alamat'))
                                <div class="text-danger">
                                    {{ $errors->first('alamat')}}
                                </div>
                            @endif

                        </div>
                        <div class="form-group">
                            <label>Tanggal Input</label><br>
                            <input type="date" id="tanggal_input" name="tanggal_input">
                            @if($errors->has('tanggal_input'))
                                <div class="text-danger">
                                    {{ $errors->first('tanggal_input')}}
                                </div>
                            @endif

                        </div>
                        
                        <div class="form-group">
                            <label>User Input</label>
                            <input type="text" name="user_input" class="form-control" placeholder="User Input ..">

                            @if($errors->has('user_input'))
                                <div class="text-danger">
                                    {{ $errors->first('user_input')}}
                                </div>
                            @endif

                        </div>
                        
                        <div class="form-group">
                            <label>Tanggal Update</label><br>
                            <input type="date" id="tanggal_update" name="tanggal_update">
                            @if($errors->has('tanggal_update'))
                                <div class="text-danger">
                                    {{ $errors->first('tanggal_update')}}
                                </div>
                            @endif

                        </div>
                        
                        <div class="form-group">
                            <label>User Update</label>
                            <input type="text" name="user_update" class="form-control" placeholder="User Update ..">

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