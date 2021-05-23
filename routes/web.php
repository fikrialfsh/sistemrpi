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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/anggota', 'AnggotaController@index');
Route::get('/anggota/tambah','AnggotaController@create');
Route::post('/anggota/tambahdata','AnggotaController@store');
Route::get('/anggota/edit/{id}', 'AnggotaController@edit');
Route::put('/anggota/update/{id}', 'AnggotaController@update');
Route::get('/anggota/delete/{id}', 'AnggotaController@delete');

Route::get('/proker', 'ProkerController@index');
Route::get('/proker/tambah','ProkerController@create');
Route::post('/proker/tambahdata','ProkerController@store');
Route::get('/proker/edit/{id}', 'ProkerController@edit');
Route::put('/proker/update/{id}', 'ProkerController@update');
Route::get('/proker/delete/{id}', 'ProkerController@delete');

Route::get('/inventaris', 'InventarisController@index');
Route::get('/inventaris/tambah','InventarisController@create');
Route::post('/inventaris/tambahdata','InventarisController@store');
Route::get('/inventaris/edit/{id}', 'InventarisController@edit');
Route::put('/inventaris/update/{id}', 'InventarisController@update');
Route::get('/inventaris/delete/{id}', 'InventarisController@delete');


Route::get('/kategori', 'KategoriController@index');
Route::get('/kategori/tambah','KategoriController@create');
Route::post('/kategori/tambahdata','KategoriController@store');
Route::get('/kategori/edit/{id}', 'KategoriController@edit');
Route::put('/kategori/update/{id}', 'KategoriController@update');
Route::get('/kategori/delete/{id}', 'KategoriController@delete');

Route::get('/peminjaman', 'PeminjamanController@index');
Route::get('/peminjaman/tambah','PeminjamanController@create');
Route::post('/peminjaman/tambahdata','PeminjamanController@store');
Route::get('/peminjaman/edit/{id}', 'PeminjamanController@edit');
Route::put('/peminjaman/update/{id}', 'PeminjamanController@update');
Route::get('/peminjaman/delete/{id}', 'PeminjamanController@delete');
