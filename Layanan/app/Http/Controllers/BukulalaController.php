<?php

namespace App\Http\Controllers;

//import Model "Post
use App\Models\Buku_lala;

//return type View
use Illuminate\View\View;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class BukulalaController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    
    public function index(): View
    {
        //get posts
        $Buku_lala = buku_lala::latest()->paginate(5);

        //render view with posts
        return view('bukulala.index', compact('Buku_lala'));
    }

    public function create(): View
    {
        return view('bukulala.create');
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
        Buku_lala::create([
            
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
        return redirect()->route('bukulala.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function edit(string $id): View
    {
        //get post by ID
        $Buku_lala = buku_lala::findOrFail($id);

        //render view with post
        return view('bukulala.edit', compact('Buku_lala'));
    }
    
    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id): RedirectResponse
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

        //get post by ID
        $Buku_lala = buku_lala::findOrFail($id);

        //update post data
        
        $Buku_lala->id_buku = $request->id_buku;
        $Buku_lala->judul = $request->judul;
        $Buku_lala->penulis = $request->penulis;
        $Buku_lala->penerbit = $request->penerbit;
        $Buku_lala->tahun = $request->tahun;
        $Buku_lala->stok = $request->stok;
        $Buku_lala->denda = $request->denda;
        $Buku_lala->peminjam = $request->peminjam;
        $Buku_lala->kategori = $request->kategori;
        $Buku_lala->tgl = $request->tgl;

        //save post data
        $Buku_lala->save();


        //redirect to index
        return redirect()->route('bukulala.index')->with(['success' => 'Data Berhasil Diubah!']);
    }
    
}