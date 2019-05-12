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

Auth::routes();

Route::get('/home', 'SiswaController@index')->name('home');

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

//siswa
Route::get('/readsiswa', 'SiswaController@index');

Route::get('/editsiswa/{nis}', 'SiswaController@edit');

Route::post('/updatesiswa', 'SiswaController@update');

Route::get('/addsiswa', 'SiswaController@create');
Route::POST('/storesiswa', 'SiswaController@store');

Route::get('/deletesiswa/{nis}', 'SiswaController@destroy');

//pemasukan
Route::get('/readpemasukan', 'PemasukanController@index');

Route::get('/editpemasukan/{id_pemasukan}', 'PemasukanController@edit');

Route::post('/updatepemasukan', 'PemasukanController@update');

Route::get('/addpemasukan', 'PemasukanController@create');
Route::POST('/storepemasukan', 'PemasukanController@store');

Route::get('/deletepemasukan/{id_pemasukan}', 'PemasukanController@destroy');

//pengeluaran
Route::get('/readpengeluaran', 'PengeluaranController@index');

Route::get('/editpengeluaran/{id_pengeluaran}', 'PengeluaranController@edit');

Route::post('/updatepengeluaran', 'PengeluaranController@update');

Route::get('/addpengeluaran', 'PengeluaranController@create');
Route::POST('/storepengeluaran', 'PengeluaranController@store');

Route::get('/deletepengeluaran/{id_pengeluaran}', 'PengeluaranController@destroy');