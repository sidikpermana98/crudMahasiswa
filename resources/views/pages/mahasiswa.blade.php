@extends('layout.main')

@section('title','daftar mahasiswa')

@section('container')

<div class="container">
  <div class="row">
  	<div class="col-md-3">
  		<a href="{{route('mahasiswatambah')}}" class="btn btn-primary btn-block">Tambah Mahasiswa</a>
  	</div>
  <div class="col-12">
    <hr>
    @if(Session::has('message'))
      <div class="alert alert-success" align="center"><b>{{Session::get('message')}}</b></div>
    @endif
    <table class="table table-bordered table-striped">
        
            <th>NPM</th>
            <th>NAMA</th>
            <th>TANGGAL LAHIR</th>
            <th>ALAMAT</th>
            <th>AKSI</th>
        @foreach($mhs as $m)
        <tr>
        	<td>{{$m->npm}}</td>
        	<td>{{$m->nama}}</td>
        	<td>{{$m->tanggallahir}}</td>
        	<td>{{$m->alamat}}</td>
        	<td>
            <a href="{{route('edit_mahasiswa',['id' => $m->id])}}" class="btn btn-warning">Edit</a>

            <a href="{{route('hapus_mahasiswa',['id' => $m->id])}}" class="btn btn-danger">Hapus</a>
          </td>
        </tr>
        @endforeach
    </table>

    <div>
      <div>
        <div>
 @endsection
