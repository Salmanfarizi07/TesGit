<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SimpananController extends Controller
{
    public function simpanan()
    {
        // mengambil data dari table simpanan
        $simpanan = DB::table('simpanan')->get();
 
        // mengirim data simpanan ke view index
        return view('simpanan',['simpanan' => $simpanan]);
 
    }

    // method untuk menampilkan view form tambah simpanan
    public function tambahsimpanan()
    {
 
        // memanggil view tambah
        return view('tambahsimpanan');
    }

    // method untuk insert data ke table simpanan
    public function input(Request $request)
    {
        // insert data ke table simpanan
        DB::table('simpanan')->insert([
            'id_user' => $request->id_user,
            'jenis_simpanan' => $request->jenis_simpanan,
            'tgl_awal' => $request->tgl_awal,
            'jumlah_simpanan' => $request->jumlah_simpanan
        ]);
        // alihkan halaman ke halaman simpanan
        return redirect('/simpanan');
    }

    // method untuk edit data simpanan
    public function editsimpanan($id)
    {
        // mengambil data simpanan berdasarkan id yang dipilih
        $simpanan = DB::table('simpanan')->where('id_simpanan',$id)->get();
        // passing data simpanan yang didapat ke view edit.blade.php
        return view('editsimpanan',['simpanan' => $simpanan]);
    }


        // method untuk insert data ke table simpanan
    public function update(Request $request)
    {
        // insert data ke table simpanan
        DB::table('simpanan')->update([
            'jenis_simpanan' => $request->jenis_simpanan,
            'tgl_awal' => $request->tgl_awal,
            'jumlah_simpanan' => $request->jumlah_simpanan
        ]);
        // alihkan halaman ke halaman simpanan
        return redirect('/simpanan');
    }

    // method untuk hapus data simpanan
    public function hapus($id)
    {
        // menghapus data simpanan berdasarkan id yang dipilih
        DB::table('simpanan')->where('id_simpanan',$id)->delete();
            
        // alihkan halaman ke halaman simpanan
        return redirect('/simpanan');
    }
     
}

