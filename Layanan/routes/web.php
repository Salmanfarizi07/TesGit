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



Route::get('/Surat', function () {
    return view('Surat');
});

Route::get('/tambah', function () {
    return view('tambah');
});

Route::get('/Pembayaran', function () {
    return view('Pembayaran');
});

Route::get('/tambahPembayaran', function () {
    return view('tambahPembayaran');
});

Route::get('/Peminjaman', function () {
    return view('Peminjaman');
});

Route::get('/tambahPeminjaman', function () {
    return view('tambahPeminjaman');
});

Route::get('/Saham', function () {
    return view('Saham');
});

Route::get('/tambahSaham', function () {
    return view('tambahSaham');
});

Route::get('/Surat', 'App\Http\Controllers\SuratController@index');
Route::get('/Surat/tambah','App\Http\Controllers\SuratController@tambah');
Route::post('/Surat/store','App\Http\Controllers\SuratController@store');
Route::get('/Surat/edit/{Id_Surat}','App\Http\Controllers\SuratController@edit');
Route::post('/Surat/update','App\Http\Controllers\SuratController@update');
Route::get('/Surat/hapus/{Id_Surat}','App\Http\Controllers\SuratController@hapus');

Route::get('/Pembayaran', 'App\Http\Controllers\PembayaranController@index');
Route::get('/Pembayaran/tambah','App\Http\Controllers\PembayaranController@tambah');
Route::post('/Pembayaran/store','App\Http\Controllers\PembayaranController@store');
Route::get('/Pembayaran/edit/{Id_Pembayaran}','App\Http\Controllers\PembayaranController@edit');
Route::post('/Pembayaran/update','App\Http\Controllers\PembayaranController@update');
Route::get('/Pembayaran/hapus/{Id_Pembayaran}','App\Http\Controllers\PembayaranController@hapus');

Route::get('/Peminjaman', 'App\Http\Controllers\PeminjamanController@index');
Route::get('/Peminjaman/tambah','App\Http\Controllers\PeminjamanController@tambah');
Route::post('/Peminjaman/store','App\Http\Controllers\PeminjamanController@store');
Route::get('/Peminjaman/edit/{Id_Peminjaman}','App\Http\Controllers\PeminjamanController@edit');
Route::post('/Peminjaman/update','App\Http\Controllers\PeminjamanController@update');
Route::get('/Peminjaman/hapus/{Id_Peminjaman}','App\Http\Controllers\PeminjamanController@hapus');

Route::get('/Saham', 'App\Http\Controllers\SahamController@index');
Route::get('/Saham/tambah','App\Http\Controllers\SahamController@tambah');
Route::post('/Saham/store','App\Http\Controllers\SahamController@store');
Route::get('/Saham/edit/{Id_Saham}','App\Http\Controllers\SahamController@edit');
Route::post('/Saham/update','App\Http\Controllers\SahamController@update');
Route::get('/Saham/hapus/{Id_Saham}','App\Http\Controllers\SahamController@hapus');

    /**
     * Home Routes
     */
    Route::get('/', 'HomeController@index')->name('home.index');
    /**
     * Read table Routes
     */
    Route::resource('/user', \App\Http\Controllers\UserController::class);

    Route::group(['middleware' => ['guest']], function() {
        /**
         * Register Routes
         */
        Route::get('/register', 'RegisterController@show')->name('register.show');
        Route::post('/register', 'RegisterController@register')->name('register.perform');

        /**
         * Login Routes
         */
        Route::get('/login', 'LoginController@show')->name('login.show');
        Route::post('/login', 'LoginController@login')->name('login.perform');

    });

    Route::group(['middleware' => ['auth']], function() {
        /**
         * Logout Routes
         */
        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
    });

