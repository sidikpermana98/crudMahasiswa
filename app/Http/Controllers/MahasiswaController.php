<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function index()
    {
    	$mahasiswa=Mahasiswa::all();
    	return view('pages.mahasiswa',['mhs'=> $mahasiswa]);
    }
    public function create()
    {
    	return view('pages.create_mahasiswa');
    }
    public function save(Request $request)
    {
    	Mahasiswa::create(['nama' => $request->nama,'npm' => $request->npm,'tanggallahir' => $request->tanggallahir, 'alamat' => $request->alamat]);
    	return redirect()->route('mahasiswa')->with(['message' => 'berhasil menambahkan data']);
    }

    public function edit($id)
    {
    	$mahasiswa=Mahasiswa::where('id',$id)->first();
    	return view('pages.edit_mahasiswa',['mhs'=> $mahasiswa]);
    }

    public function update(Request $request)
    {
    	Mahasiswa::where('id',$request->id)->update(['nama' => $request->nama,'npm' => $request->npm,'tanggallahir' => $request->tanggallahir, 'alamat' => $request->alamat]);
    	return redirect()->route('mahasiswa')->with(['message' => 'Berhasil Mengubah data']);
    }

    public function hapus($id)
    {
    	Mahasiswa::where('id',$id)->delete();
    	return redirect()->route('mahasiswa')->with(['message' => 'Berhasil Menghapus data']);

    }

}
