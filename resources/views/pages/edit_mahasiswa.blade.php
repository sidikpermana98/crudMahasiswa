@extends('layout.main')

@section('title','daftar mahasiswa')

@section('container')

<div class="container">
  <div class="row">

  <div class="col-6">
  	<form action="{{route('update_mahasiswa')}}" method="POST">
  		@csrf
  		<input type="hidden" name="id" value="{{$mhs->id}}">
  		<label>Nama</label>
  		<input type="text" name="nama" value="{{$mhs->nama}}" class="form-control" required="">
  		<label>Npm</label>
  		<input type="text" name="npm" value="{{$mhs->npm}}" class="form-control" required="">
  		<label>Tanggal Lahir</label>
  		<input type="date" name="tanggallahir" value="{{$mhs->tanggallahir}}" class="form-control" required="">
  		<label>alamat</label>
  		<textarea class="form-control" name="alamat" required="">{{$mhs->alamat}}</textarea>
  		<hr>
  		<button type="submit" class="btn btn-success">Simpan</button>
  	</form>
    <div>
      <div>
        <div>
 @endsection
