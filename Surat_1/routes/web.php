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

Route::get('/Surat', function () {
    return view('Surat');
});

Route::get('/tambah', function () {
    return view('tambah');
});

Route::get('/Surat', 'App\Http\Controllers\SuratController@index');
Route::get('/Surat/tambah','App\Http\Controllers\SuratController@tambah');
Route::post('/Surat/store','App\Http\Controllers\SuratController@store');
Route::get('/Surat/edit/{Id_Surat}','App\Http\Controllers\SuratController@edit');
Route::post('/Surat/update','App\Http\Controllers\SuratController@update');
Route::get('/Surat/hapus/{Id_Surat}','App\Http\Controllers\SuratController@hapus');