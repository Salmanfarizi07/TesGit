<?php


namespace App\Http\Controllers;
use app\User;
use app\Role;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class buku_zanoController extends Controller
{
    public function index()
    {
        // mengambil data dari table Saham
    	$buku_zano = DB::table('buku_zano')->get();
        
    	// mengirim data Saham ke view index
    	return view('buku_zano',['buku_zano' => $buku_zano]);
        
 
    }
    
    // method untuk menampilkan view form tambah buku_zano
    public function tambah()
    {
        
        // memanggil view tambah
        return view('tambah');
   
    }

    // method untuk insert data ke table buku_zano
    public function store(Request $request)
    {
        // insert data ke table buku_zano
        DB::table('buku_zano')->insert([
            'IDBuku' => $request->IDBuku,
            'Judul' => $request->Judul,
            'Penulis' => $request->Penulis,
            'Penerbit' => $request->Penerbit,
            'TahunTerbit' => $request->TahunTerbit,
            'JumlahStok' => $request->JumlahStok,
            'dendabuku' => $request->dendabuku
        ]);
        // alihkan halaman ke halaman buku_zano
        return redirect('/buku_zano');
    
    }

    // method untuk edit data buku_zano
    public function edit($IDBuku)
    {
        // mengambil data buku_zano berdasarkan id yang dipilih
        $buku_zano = DB::table('buku_zano')->where('IDBuku',$IDBuku)->get();
        // passing data buku_zano yang didapat ke view edit.blade.php
        return view('editbuku_zano',['buku_zano' => $buku_zano]);
    
    }

    // update data buku_zano
    public function update(Request $request)
    {
        // update data buku_zano
        DB::table('buku_zano')->where('IDBuku',$request->IDBuku)->update([
            
            'Judul' => $request->Judul,
            'Penulis' => $request->Penulis,
            'Penerbit' => $request->Penerbit,
            'TahunTerbit' => $request->TahunTerbit,
            'JumlahStok' => $request->JumlahStok,
            'dendabuku' => $request->dendabuku
        ]);
        // alihkan halaman ke halaman buku_zano
        return redirect('/buku_zano');
    }

    // method untuk hapus data buku_zano
    public function hapus($IDBuku)
    {
        // menghapus data buku_zano berdasarkan id yang dipilih
        DB::table('buku_zano')->where('IDBuku',$IDBuku)->delete();
            
        // alihkan halaman ke halaman buku_zano
        return redirect('/buku_zano');
    }
}
