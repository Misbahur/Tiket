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
Route::get('/pembayaran', function(){
    return view('pembayaran');
});
Route::get('status', 'TransaksiOnlineController@edit')->name('status');
Route::POST('/buktiup','TransaksiOnlineController@update')->name('buktiup');
Route::get('/pemesanan','PemesananController@create');
Route::post('/otransaksi', 'TransaksiOnlineController@store');

Route::get('/wilayah/{provinsi}','WilayahController@kota');
//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/kirimemail','SendEmailController@index');
Route::get('/sendemail/{id}','SendEmailController@edit');


//auth
Auth::routes();
Route::resource('dashboard', 'DashboardController');
// Route::resource('laporan', 'LaporanController');
// Route::resource('offline','TransaksiController');
// Route::resource('datatiket','DataTiketController');
// Route::resource('users','UserController');

// Route::group(['middleware'=>['auth','roleuser:kepala']],function(){
// //admin>controller
// Route::resource('laporan', 'LaporanController');
// });
Route::group(['middleware'=>['auth','roleuser:petugas,koordinator,kepala']],function(){
    //admin>controller
    Route::resource('laporan', 'LaporanController');
    Route::get('pdf', 'LaporanController@getPDF')->name('getPDF');
    Route::get('csv', 'LaporanController@getCSV')->name('getCSV');
    });

Route::group(['middleware'=>['auth','roleuser:petugas,koordinator']],function(){
//admin>controller
Route::resource('offline','TransaksiController');
Route::resource('online', 'TransaksiOnlineController');
});

Route::group(['middleware'=>['auth','roleuser:it']],function(){
//admin>controller
Route::resource('datatiket','DataTiketController');
Route::resource('users','UserController');
});
