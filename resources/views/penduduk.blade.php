@extends('master')
@section('konten')
<h1>Data Penduduk</h1>
<table class="table table-bordered table-hover table-striped">
    <thead>
        <tr>
            <th>NIK</th>
            <th>Nama</th>
            <th>Jenis_Kelamin</th>
            <th>Alamat</th>
            <th>Tanggal_Input</th>
            <th>User_Input</th>
            <th>Tanggal_Update</th>
            <th>User_Update</th>
            <th>OPSI</th>
        </tr>
    </thead>
    <tbody>
    @foreach($penduduk as $k)
    <tr>
        <td>{{ $k->nik }}</td>
        <td>{{ $k->nama }}</td>
        <td>{{ $k->jenis_kelamin }}</td>
        <td>{{ $k->alamat }}</td>
        <td>{{ $k->tanggal_input }}</td>
        <td>{{ $k->user_input }}</td>
        <td>{{ $k->tanggal_update }}</td>
        <td>{{ $k->user_update }}</td>
        <td>
            <a href="/penduduk/edit/{{ $k->id }}" class="btn btn-warning">Edit</a>
            <a href="/penduduk/hapus/{{ $k->id }}" class="btn btn-danger">Hapus</a>
        </td>
    </tr>
    @endforeach
    </tbody>
    </table>
@endsection