<?php

namespace App\Http\Controllers;

//import Model "Post
use App\Models\Buku_salman;

//return type View
use Illuminate\View\View;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class BukusalmanController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    
    public function index(): View
    {
        //get posts
        $Buku_salman = buku_salman::latest()->paginate(5);

        //render view with posts
        return view('buku_salman.index', compact('Buku_salman'));
    }
    public function create(): View
    {
        return view('buku_salman.create');
    }
    public function store(Request $request): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            
        'id_buku' => 'required',
        'judul' => 'required',
        'penulis',
        'penerbit',
        'tahun',
        'stok',
        'denda',
        'peminjam',
        'kategori',
        'tgl'
        ]);

        //create post
        Buku_salman::create([
            
            'id_buku'    => $request->id_buku,
            'judul'  => $request->judul,
            'penulis' => $request->penulis,
            'penerbit' => $request->penerbit,
            'tahun' => $request->tahun,
            'stok' => $request->stok,
            'denda' => $request->denda,
            'peminjam' => $request->peminjam,
            'kategori' => $request->kategori,
            'tgl' => $request->tgl,

        ]);

        //redirect to index
        return redirect()->route('buku_salman.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }


    
    
}