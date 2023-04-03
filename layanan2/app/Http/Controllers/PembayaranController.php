<?php


namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    public function index()
    {
    	// mengambil data dari table Pembayaran
    	$Pembayaran = DB::table('Pembayaran')->get();
 
    	// mengirim data Pembayaran ke view index
    	return view('Pembayaran',['Pembayaran' => $Pembayaran]);
 
    }
    
    // method untuk menampilkan view form tambah Pembayaran
    public function tambah()
    {
    
        // memanggil view tambah
        return view('tambah');
    
    }

    // method untuk insert data ke table Pembayaran
    public function store(Request $request)
    {
        // insert data ke table Pembayaran
        DB::table('Pembayaran')->insert([
            'Id_Pembayaran' => $request->Id_Pembayaran,
            'Id_User' => $request->Id_User,
            'Jenis_Pembayaran' => $request->Jenis_Pembayaran,
            'Metode_Pembayaran' => $request->Metode_Pembayaran,
            'Status_Pembayaran' => $request->Status_Pembayaran
        ]);
        // alihkan halaman ke halaman Pembayaran
        return redirect('/Pembayaran');
    
    }

    // method untuk edit data Pembayaran
    public function edit($Id_Pembayaran)
    {
        // mengambil data Pembayaran berdasarkan id yang dipilih
        $Pembayaran = DB::table('Pembayaran')->where('Id_Pembayaran',$Id_Pembayaran)->get();
        // passing data Pembayaran yang didapat ke view edit.blade.php
        return view('editPembayaran',['Pembayaran' => $Pembayaran]);
    
    }

    // update data Pembayaran
    public function update(Request $request)
    {
        // update data Pembayaran
        DB::table('Pembayaran')->where('Id_Pembayaran',$request->Id_Pembayaran)->update([
            
            'Jenis_Pembayaran' => $request->Jenis_Pembayaran,
            'Metode_Pembayaran' => $request->Metode_Pembayaran,
            'Status_Pembayaran' => $request->Status_Pembayaran
        ]);
        // alihkan halaman ke halaman Pembayaran
        return redirect('/Pembayaran');
    }

    // method untuk hapus data Pembayaran
    public function hapus($Id_Pembayaran)
    {
        // menghapus data Pembayaran berdasarkan id yang dipilih
        DB::table('Pembayaran')->where('Id_Pembayaran',$Id_Pembayaran)->delete();
            
        // alihkan halaman ke halaman Pembayaran
        return redirect('/Pembayaran');
    }
}
