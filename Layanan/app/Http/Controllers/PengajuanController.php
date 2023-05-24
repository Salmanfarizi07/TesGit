<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PengajuanController extends Controller
{
    public function pengajuan()
    {
        // mengambil data dari table pengajuan
        $pengajuan = DB::table('pengajuan')->get();
 
        // mengirim data pengajuan ke view index
        return view('pengajuan',['pengajuan' => $pengajuan]);
 
    }

    // method untuk menampilkan view form tambah pengajuan
    public function tambahpengajuan()
    {
 
        // memanggil view tambah
        return view('tambahpengajuan');
    }

    // method untuk insert data ke table pengajuan
    public function input(Request $request)
    {
        // insert data ke table pengajuan
        DB::table('pengajuan')->insert([
            'id_user' => $request->id_user,
            'jenis_pengajuan' => $request->jenis_pengajuan,
            'tgl_awal' => $request->tgl_awal,
            'jumlah_pengajuan' => $request->jumlah_pengajuan
        ]);
        // alihkan halaman ke halaman pengajuan
        return redirect('/pengajuan');
    }

    // method untuk edit data pengajuan
    public function editpengajuan($id)
    {
        // mengambil data pengajuan berdasarkan id yang dipilih
        $simpanan = DB::table('pengajuan')->where('id_pengajuan',$id)->get();
        // passing data pengajuan yang didapat ke view edit.blade.php
        return view('editpengajuan',['pengajuan' => $pengajuan]);
    }


        // method untuk insert data ke table pengajuan
    public function update(Request $request)
    {
        // insert data ke table pengajuan
        DB::table('pengajuan')->update([
            'jenis_pengajuan' => $request->jenis_pengajuan,
            'tgl_awal' => $request->tgl_awal,
            'jumlah_pengajuan' => $request->jumlah_pengajuan
        ]);
        // alihkan halaman ke halaman pengajuan
        return redirect('/pengajuan');
    }

    // method untuk hapus data pengajuan
    public function hapus($id)
    {
        // menghapus data pengajuan berdasarkan id yang dipilih
        DB::table('pengajuan')->where('id_pengajuan',$id)->delete();
            
        // alihkan halaman ke halaman pengajuan
        return redirect('/pengajuan');
    }
     
}

