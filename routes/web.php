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
    return view('welcome');
});
/*HOME*/
Route::get('/home','HomeController@index')->name('home.index');
/*Petugas*/
Route::get('/login','LoginController@login')->name('login');
Route::post('/loginPost', 'LoginController@loginPost');
Route::get('/register', 'LoginController@register');
Route::post('/registerPost', 'LoginController@registerPost');
Route::post('dashboard', 'LoginController@postRegistration'); 
Route::get('/logout', 'LoginController@logout')->name('login.logout');

/*inventaris*/
Route::get('/inven','InvenController@index')->name('inven.index');
Route::get('/inven/create','InvenController@create')->name('inven.create');
Route::post('/inven/store','InvenController@store')->name('inven.store');
Route::get('/inven/edit','InvenController@edit')->name('inven.edit');
Route::post('/inven/update','InvenController@update');

/*Petugas*/
Route::get('/petugas','PetugasController@index')->name('petugas.index');
Route::get('/petugas/create','PetugasController@create');
Route::post('/petugas/store','PetugasController@store')->name('petugas.store'); 
Route::get('/petugas/edit/{id}','PetugasController@edit')->name('petugas.edit');
Route::post('/petugas/update/{id}','PetugasController@update')->name('petugas.update');
Route::get('/petugas/destroy/{id}','PetugasController@destroy')->name('petugas.destroy');
Route::get('/petugas/show/{id}','PetugasController@show')->name('petugas.show');

/*pegawai*/
Route::get('/pegawai','PegawaiController@index')->name('pegawai.index');
Route::get('/pegawai/create','PegawaiController@create')->name('pegawai.create');
Route::post('/pegawai/store','PegawaiController@store')->name('pegawai.store');
Route::get('/pegawai/edit/{id}','PegawaiController@edit')->name('pegawai.edit');
Route::post('/pegawai/update/{id}','PegawaiController@update')->name('pegawai.update');
Route::get('/pegawai/destroy/{id}','PegawaiController@destroy')->name('pegawai.destroy');

/*pinjam*/
Route::get('/pinjam','PinjamController@index')->name('pinjam.index');

Route::get('/kembali','KembaliController@index')->name('kembali.index');

