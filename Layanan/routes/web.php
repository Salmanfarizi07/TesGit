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

//read, edit, delete tabel user
Route::resource('/user', \App\Http\Controllers\UserController::class);

Route::get('/Surat', function () {
    return view('Surat');
});

Route::get('/tambahSurat', function () {
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

Route::get('/Jasa', function () {
    return view('Jasa');
});

Route::get('/tambahJasa', function () {
    return view('tambahJasa');
});

Route::get('/simpanan', function () {
    return view('simpanan');
});

Route::get('/tambahsimpanan', function () {
    return view('tambahsimpanan');
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

Route::get('/Jasa', 'App\Http\Controllers\JasaController@index');
Route::get('/Jasa/tambah','App\Http\Controllers\JasaController@tambah');
Route::post('/Jasa/store','App\Http\Controllers\JasaController@store');
Route::get('/Jasa/edit/{Id_Jasa}','App\Http\Controllers\JasaController@edit');
Route::post('/Jasa/update','App\Http\Controllers\JasaController@update');
Route::get('/Jasa/hapus/{Id_Jasa}','App\Http\Controllers\JasaController@hapus');

Route::get('/simpanan','App\Http\Controllers\SimpananController@simpanan');
Route::get('/simpanan/tambah','App\Http\Controllers\SimpananController@tambahsimpanan');
Route::post('/simpanan/input','App\Http\Controllers\SimpananController@input');
Route::get('/simpanan/edit/{id}','App\Http\Controllers\SimpananController@editsimpanan');
Route::post('/simpanan/update','App\Http\Controllers\SimpananController@update');
Route::get('/simpanan/hapus/{id}','App\Http\Controllers\SimpananController@hapus');

Route::group(['namespace' => 'App\Http\Controllers'], function()
{   
    /**
     * Home Routes
     */
    Route::get('/', 'HomeController@index')->name('home.index');
    

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

    Route::get('/Ladmin', 'LadminController@index');
    
    //view anggota layanan simpanan
    Route::get('/Lsimpanan', 'SimpananControllers\LsimpananController@index');
    Route::get('/Ptabungan', 'SimpananControllers\LsimpananController@ptabungan');
    Route::get('/daftar-t-sarjana', 'SimpananControllers\LsimpananController@dtsarjana');
    Route::post('/Tsarjana/store','SimpananControllers\LsimpananController@tsarjanastore');

    //view anggota layanan pembayaran
    Route::get('/LPembayaran', 'PembayaranControllers\LPembayaranController@index');
    Route::get('/Ptagihan', 'PembayaranControllers\LPembayaranController@ptagihan');
    Route::get('/SimpananPokok', 'PembayaranControllers\LPembayaranController@simpananpokok');
});
