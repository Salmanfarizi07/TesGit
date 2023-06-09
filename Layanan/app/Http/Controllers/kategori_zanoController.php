<?php


namespace App\Http\Controllers;
use app\User;
use app\Role;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class kategori_zanoController extends Controller
{
    public function index()
    {
        // mengambil data dari table Saham
        $buku_zano = DB::table('buku_zano')->get();
    	$kategori_zano = DB::table('kategori_zano')->get();
        
    	// mengirim data Saham ke view index
    	return view('kategori_zano',['kategori_zano' => $kategori_zano, 'buku_zano' => $buku_zano]); 

 
    }
    
    // method untuk menampilkan view form tambah kategori_zano
    public function tambah()
    {
        
        // memanggil view tambah
        return view('tambah');
   
    }

    // method untuk insert data ke table kategori_zano
    public function store(Request $request)
    {
        // insert data ke table kategori_zano
        DB::table('kategori_zano')->insert([
            'IDKategori' => $request->IDKategori,
            
            'dendabuku' => $request->dendabuku
        ]);
        // alihkan halaman ke halaman kategori_zano
        return redirect('/kategori_zano');
    
    }

    // method untuk edit data kategori_zano
    public function edit($IDKategori)
    {
        // mengambil data kategori_zano berdasarkan id yang dipilih
        $kategori_zano = DB::table('kategori_zano')->where('IDKategori',$IDKategori)->get();
        // passing data kategori_zano yang didapat ke view edit.blade.php
        return view('editkategori_zano',['kategori_zano' => $kategori_zano]);
    
    }

    // update data kategori_zano
    public function update(Request $request)
    {
        // update data kategori_zano
        DB::table('kategori_zano')->where('IDKategori',$request->IDKategori)->update([
            
            'Judul' => $request->Judul,
            'Penulis' => $request->Penulis,
            'Penerbit' => $request->Penerbit,
            'TahunTerbit' => $request->TahunTerbit,
            'JumlahStok' => $request->JumlahStok,
            'dendabuku' => $request->dendabuku
        ]);
        // alihkan halaman ke halaman kategori_zano
        return redirect('/kategori_zano');
    }

    // method untuk hapus data kategori_zano
    public function hapus($IDKategori)
    {
        // menghapus data kategori_zano berdasarkan id yang dipilih
        DB::table('kategori_zano')->where('IDKategori',$IDKategori)->delete();
            
        // alihkan halaman ke halaman kategori_zano
        return redirect('/kategori_zano');
    }
}
