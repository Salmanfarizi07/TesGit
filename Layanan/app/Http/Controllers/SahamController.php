<?php


namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SahamController extends Controller
{
    public function index()
    {
    	// mengambil data dari table Saham
    	$Saham = DB::table('Saham')->get();
 
    	// mengirim data Saham ke view index
    	return view('Saham',['Saham' => $Saham]);
 
    }
    
    // method untuk menampilkan view form tambah Saham
    public function tambah()
    {
    
        // memanggil view tambah
        return view('tambah');
    
    }

    // method untuk insert data ke table Saham
    public function store(Request $request)
    {
        // insert data ke table Saham
        DB::table('Saham')->insert([
            'Id_Saham' => $request->Id_Saham,
            'Id_User' => $request->Id_User,
            'Nama_Saham' => $request->Nama_Saham,
            'Biaya_Saham' => $request->Biaya_Saham,
            'Jenis_Saham' => $request->Jenis_Saham,
            'Status_Saham' => $request->Status_Saham
        ]);
        // alihkan halaman ke halaman Saham
        return redirect('/Saham');
    
    }

    // method untuk edit data Saham
    public function edit($Id_Saham)
    {
        // mengambil data Saham berdasarkan id yang dipilih
        $Saham = DB::table('Saham')->where('Id_Saham',$Id_Saham)->get();
        // passing data Saham yang didapat ke view edit.blade.php
        return view('editSaham',['Saham' => $Saham]);
    
    }

    // update data Saham
    public function update(Request $request)
    {
        // update data Saham
        DB::table('Saham')->where('Id_Saham',$request->Id_Saham)->update([
            
            'Nama_Saham' => $request->Nama_Saham,
            'Biaya_Saham' => $request->Biaya_Saham,
            'Jenis_Saham' => $request->Jenis_Saham,
            'Status_Saham' => $request->Status_Saham
        ]);
        // alihkan halaman ke halaman Saham
        return redirect('/Saham');
    }

    // method untuk hapus data Saham
    public function hapus($Id_Saham)
    {
        // menghapus data Saham berdasarkan id yang dipilih
        DB::table('Saham')->where('Id_Saham',$Id_Saham)->delete();
            
        // alihkan halaman ke halaman Saham
        return redirect('/Saham');
    }
}
