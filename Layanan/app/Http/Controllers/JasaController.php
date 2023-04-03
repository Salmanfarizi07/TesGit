<?php


namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class JasaController extends Controller
{
    public function index()
    {
    	// mengambil data dari table Jasa
    	$Jasa = DB::table('Jasa')->get();
 
    	// mengirim data Jasa ke view index
    	return view('Jasa',['Jasa' => $Jasa]);
 
    }
    
    // method untuk menampilkan view form tambah Jasa
    public function tambah()
    {
    
        // memanggil view tambah
        return view('tambah');
    
    }

    // method untuk insert data ke table Jasa
    public function store(Request $request)
    {
        // insert data ke table Jasa
        DB::table('Jasa')->insert([
            'Id_Jasa' => $request->Id_Jasa,
            'Id_User' => $request->Id_User,
            'Nama_Jasa' => $request->Nama_Jasa,
            'Jenis_Jasa' => $request->Jenis_Jasa,
            'Desc_Jasa' => $request->Desc_Jasa,
            'Tgl_Pengajuan' => $request->Tgl_Pengajuan,
            'Status_Jasa' => $request->Status_Jasa
        ]);
        // alihkan halaman ke halaman Jasa
        return redirect('/Jasa');
    
    }

    // method untuk edit data Jasa
    public function edit($Id_Jasa)
    {
        // mengambil data Jasa berdasarkan id yang dipilih
        $Saham = DB::table('Jasa')->where('Id_Jasa',$Id_Jasa)->get();
        // passing data Jasa yang didapat ke view edit.blade.php
        return view('editJasa',['Jasa' => $Jasa]);
    
    }

    // update data Jasa
    public function update(Request $request)
    {
        // update data Jasa
        DB::table('Jasa')->where('Id_Jasa',$request->Id_Jasa)->update([
            
            'Nama_Jasa' => $request->Nama_Jasa,
            'Jenis_Jasa' => $request->Jenis_Jasa,
            'Jenis_Jasa' => $request->Jenis_Jasa,
            'Desc_Jasa' => $request->Desc_Jasa,
            'Tgl_Pengajuan' => $request->tgl_Pengajuan,
            'Status_Jasa' => $request->Status_Jasa
        ]);
        // alihkan halaman ke halaman Jasa
        return redirect('/Jasa');
    }

    // method untuk hapus data Jasa
    public function hapus($Id_Jasa)
    {
        // menghapus data Jasa berdasarkan id yang dipilih
        DB::table('Jasa')->where('Id_Jasa',$Id_Jasa)->delete();
            
        // alihkan halaman ke halaman Jasa
        return redirect('/Jasa');
    }
}
