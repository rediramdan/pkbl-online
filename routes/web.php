<?php

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

Route::get('/', function () {
    return view('auth.login');
});
Route::get('/pengajuan_Mitra', 'dataPengajuanController@index')->name('pengajuan');
Route::post('/pengajuan_Mitra/tambah', 'dataPengajuanController@store')->name('pengajuan.tambah');
Route::put('/edit_pengajuan/{id}', 'dataPengajuanController@update')->name('dpengajuan.update');
Route::get('/pengajuan_Mitra/{id}/edit', 'dataPengajuanController@edit')->name('pengajuan.edit');
Route::put('/pengajuan_Mitra/{id}', 'dataPribadiController@update')->name('dpribadi.update');
Route::put('/data_usaha/{id}', 'dataUsahaController@update')->name('dusaha.update');
Route::put('/data_penjamin/{id}', 'dataPenjaminController@update')->name('dpenjamin.update');
Route::put('/data_agunan/{id}', 'dataAgunanController@update')->name('dagunan.update');
Route::put('/data_lampiran/{id}', 'lampiranController@update')->name('dlampiran.update');
Route::put('/data_lampiranlain/{id}', 'lampiranlainController@update')->name('dlampiranlain.update');
Route::put('/ajukan/{id}', 'dataPengajuanController@ajukan')->name('pengajuan.status');

Route::get('/penugasan_survey', 'penugasanController@index')->name('penugasan')->middleware('cekadmin');
Route::post('/penugasan_survey/tambah', 'penugasanController@store')->name('penugasan.tambah');

Route::get('/form_penilaian/{id}', 'penilaianController@index')->name('penilaian')->middleware('cekpenugasan', 'cekpetugas');
Route::put('/form_edit/{id}', 'penilaianController@update')->name('penilaian.update');
Route::get('/Daftar_penilaian', 'penilaianController@daftar')->name('penilaian.daftar')->middleware('cekpetugas');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');