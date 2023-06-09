<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\BukuSafanaController;

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

//LOGIN
Route::get('/', [LoginController::class, 'login'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');

Route::get('home', [HomeController::class, 'index'])->name('home');
Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout');

//REGISTER
Route::get('/Register', [RegisterController::class, 'register'])->name('register');
Route::post('actionregister', [RegisterController::class, 'actionregister'])->name('actionregister');

//read, edit, delete tabel user
Route::resource('/user', \App\Http\Controllers\UserController::class);
//buku ujian
Route::resource('/bukulala', \App\Http\Controllers\BukulalaController::class);
//buku safana
Route::resource('bukusafana', BukuSafanaController::class);
//salman
Route::resource('/bukusalman', \App\Http\Controllers\BukusalmanController::class);

Route::get('/Surat', function () {
    return view('Surat');
});

Route::get('/tambahSurat', function () {
    return view('tambah');
});

Route::get('/Pembayaran', function () {
    return view('Pembayaran');
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

Route::get('/buku_zano', function () {
    return view('buku_zano');
});

Route::get('/tambahbuku_zano', function () {
    return view('tambahbuku_zano');
});

Route::get('/kategori_zano', function () {
    return view('kategori_zano');
});

Route::get('/buku_dappa', function () {
    return view('buku_dappa');
});

Route::get('/tambahbuku_dappa', function () {
    return view('tambahbuku_dappa');
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

Route::get('/buku_zano','App\Http\Controllers\buku_zanoController@index');
Route::get('/buku_zano/tambah','App\Http\Controllers\buku_zanoController@tambah');
Route::post('/buku_zano/store','App\Http\Controllers\buku_zanoController@store');
Route::get('/buku_zano/edit/{IDBuku}','App\Http\Controllers\buku_zanoController@edit');
Route::post('/buku_zano/update','App\Http\Controllers\buku_zanoController@update');
Route::get('/buku_zano/hapus/{IDBuku}','App\Http\Controllers\buku_zanoController@hapus');

Route::get('/kategori_zano','App\Http\Controllers\kategori_zanoController@index');
Route::get('/kategori_zano/tambah','App\Http\Controllers\kategori_zanoController@tambah');
Route::post('/kategori_zano/store','App\Http\Controllers\kategori_zanoController@store');
Route::get('/kategori_zano/edit/{IDKategori}','App\Http\Controllers\kategori_zanoController@edit');
Route::post('/kategori_zano/update','App\Http\Controllers\kategori_zanoController@update');
Route::get('/kategori_zano/hapus/{IDKategori}','App\Http\Controllers\kategori_zanoController@hapus');

Route::get('/buku_dappa','App\Http\Controllers\buku_dappaController@index');
Route::get('/buku_dappa/tambah','App\Http\Controllers\buku_dappaController@tambah');
Route::post('/buku_dappa/store','App\Http\Controllers\buku_dappaController@store');
Route::get('/buku_dappa/edit/{IDBuku}','App\Http\Controllers\buku_dappaController@edit');
Route::post('/buku_dappa/update','App\Http\Controllers\buku_dappaController@update');
Route::get('/buku_dappa/hapus/{IDBuku}','App\Http\Controllers\buku_dappaController@hapus');

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
    Route::get('/tskonfirmasipembayaran', 'SimpananControllers\LsimpananController@tskonfirmasipemb');
    

    //view anggota layanan pembayaran
    Route::get('/LPembayaran', 'PembayaranControllers\LPembayaranController@index');
    Route::get('/Ptagihan', 'PembayaranControllers\LPembayaranController@ptagihan');
    Route::get('/SimpananPokok', 'PembayaranControllers\LPembayaranController@simpananpokok');
});
