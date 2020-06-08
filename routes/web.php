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

//fronted
Route::get('/', function () {
    return view('welcome');
});
Route::get('/panduan', function () {
    return view('panduanpembelian');
});
Route::get('/peraturan', function () {
    return view('peraturan');
});
Route::get('/tanggal', function(){
    return view('tanggal');
});
Route::get('/pembelian', function(){
    return view('pembelian');
});

//admin
Route::get('/coba', 'coba@index');
Route::get('/dashboard', 'DashboardController@index');
//Route::get('/kategori', 'KategoriController@index');
Route::get('/laporan', 'LaporanController@index');

//admin>controller
Route::resource('kategori','KategoriController');
Route::resource('users','UserController');
Route::resource('offline','TransaksiController');

//auth
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
