<?php


namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    public function index()
    {
    	// mengambil data dari table Peminjaman
    	$Peminjaman = DB::table('Peminjaman')->get();
 
    	// mengirim data Peminjaman ke view index
    	return view('Peminjaman',['Peminjaman' => $Pembayaran]);
 
    }
    
    // method untuk menampilkan view form tambah Peminjaman
    public function tambah()
    {
    
        // memanggil view tambah
        return view('tambah');
    
    }

    // method untuk insert data ke table Peminjaman
    public function store(Request $request)
    {
        // insert data ke table Peminjaman
        DB::table('Peminjaman')->insert([
            'Id_Peminjaman' => $request->Id_Peminjaman,
            'Id_User' => $request->Id_User,
            'Jenis_Peminjaman' => $request->Jenis_Peminjaman,
            'Desc_Peminjaman' => $request->Desc_Peminjaman,
            'Tanggal_Peminjaman' => $request->Tanggal_Peminjaman,
            'Jumlah_Peminjaman' => $request->Jumlah_Peminjaman,
            'Status_Peminjaman' => $request->Status_Peminjaman
        ]);
        // alihkan halaman ke halaman Peminjaman
        return redirect('/Peminjaman');
    
    }

    // method untuk edit data Peminjaman
    public function edit($Id_Peminjaman)
    {
        // mengambil data Peminjaman berdasarkan id yang dipilih
        $Peminjaman = DB::table('Peminjaman')->where('Id_Peminjaman',$Id_Peminjaman)->get();
        // passing data Peminjaman yang didapat ke view edit.blade.php
        return view('editPeminjaman',['Peminjaman' => $Peminjaman]);
    
    }

    // update data Peminjaman
    public function update(Request $request)
    {
        // update data Peminjaman
        DB::table('Peminjaman')->where('Id_Peminjaman',$request->Id_Peminjaman)->update([
            'Id_Peminjaman' => $request->Id_Peminjaman,
            'Id_User' => $request->Id_User,
            'Jenis_Peminjaman' => $request->Jenis_Peminjaman,
            'Desc_Peminjaman' => $request->Desc_Peminjaman,
            'Tanggal_Peminjaman' => $request->Tanggal_Peminjaman,
            'Jumlah_Peminjaman' => $request->Jumlah_Peminjaman,
            'Status_Peminjaman' => $request->Status_Peminjaman
        ]);
        // alihkan halaman ke halaman Peminjaman
        return redirect('/Peminjaman');
    }

    // method untuk hapus data Peminjaman
    public function hapus($Id_Peminjaman)
    {
        // menghapus data Pembayaran berdasarkan id yang dipilih
        DB::table('Peminjaman')->where('Id_Peminjaman',$Id_Peminjaman)->delete();
            
        // alihkan halaman ke halaman Peminjaman
        return redirect('/Peminjaman');
    }
}
