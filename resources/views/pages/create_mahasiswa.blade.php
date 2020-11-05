@extends('layout.main')

@section('title','daftar mahasiswa')

@section('container')

<div class="container">
  <div class="row">

  <div class="col-6">
  	<form action="{{route('save_mahasiswa')}}" method="POST">
  		@csrf
  		<label>Nama</label>
  		<input type="text" name="nama" class="form-control" required="">
  		<label>Npm</label>
  		<input type="text" name="npm" class="form-control" required="">
  		<label>Tanggal Lahir</label>
  		<input type="date" name="tanggallahir" class="form-control" required="">
  		<label>alamat</label>
  		<textarea class="form-control" name="alamat" required=""></textarea>
  		<hr>
  		<button type="submit" class="btn btn-success">Simpan</button>
  	</form>
    <div>
      <div>
        <div>
 @endsection
