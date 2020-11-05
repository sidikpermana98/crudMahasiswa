<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PageController@home')->name('home');
// Mahasiswa
Route::get('/mahasiswa', 'MahasiswaController@index')->name('mahasiswa');
Route::get('/mahasiswa/create', 'MahasiswaController@create')->name('mahasiswatambah');
Route::post('/mahasiswa/save', 'MahasiswaController@save')->name('save_mahasiswa');
Route::post('/mahasiswa/update', 'MahasiswaController@update')->name('update_mahasiswa');
Route::get('/mahasiswa/edit/{id}', 'MahasiswaController@edit')->name('edit_mahasiswa');
Route::get('/mahasiswa/hapus/{id}', 'MahasiswaController@hapus')->name('hapus_mahasiswa');

Route::get('/about', 'PageController@about')->name('about');
