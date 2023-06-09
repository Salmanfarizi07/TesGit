<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class buku_dappaController extends Controller
{
    public function index()
    {
    	$buku_dappa = DB::table('buku_dappa')->get();
    	return view('buku_dappa',['buku_dappa' => $buku_dappa]);
    }

    public function tambah()
    {
        return view('tambah');
    }

    public function store(Request $request)
    {
        DB::table('buku_dappa')->insert([
            'IDBuku' => $request->IDBuku,
            'Judul' => $request->Judul,
            'Penulis' => $request->Penulis,
            'Penerbit' => $request->Penerbit,
            'TahunTerbit' => $request->TahunTerbit,
            'JumlahStok' => $request->JumlahStok,
            'dendabuku' => $request->dendabuku
        ]);
        return redirect('/buku_dappa');
    }

    public function edit($IDBuku)
    {
        $buku_dappa = DB::table('buku_dappa')->where('IDBuku',$IDBuku)->get();
        return view('editbuku_dappa',['buku_dappa' => $buku_dappa]);
    }

    public function update(Request $request)
    {
        DB::table('buku_dappa')->where('IDBuku',$request->IDBuku)->update([
            'Judul' => $request->Judul,
            'Penulis' => $request->Penulis,
            'Penerbit' => $request->Penerbit,
            'TahunTerbit' => $request->TahunTerbit,
            'JumlahStok' => $request->JumlahStok,
            'dendabuku' => $request->dendabuku
        ]);
        return redirect('/buku_dappa');
    }

    public function hapus($IDBuku)
    {
        DB::table('buku_dappa')->where('IDBuku',$IDBuku)->delete();
        return redirect('/buku_dappa');
    }
}
