<?php

namespace App\Http\Controllers;

//import Model "Post
use App\Models\bukudappa;

//return type View
use Illuminate\View\View;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class BukuDappaController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    
    public function index(): View
    {
        //get posts
        $bukudappa = bukudappa::latest()->paginate(5);

        //render view with posts
        return view('bukudappa.index', compact('bukudappa'));
    }

    public function create(): View
    {
        return view('bukudappa.create');
    }

    public function store(Request $request): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            
        'IDBuku' => 'required',
        'Judul' => 'required',
        'Penulis',
        'Penerbit',
        'TahunTerbit',
        'JumlahStok',
        'DendaBuku',
        ]);

        //create post
        bukudappa::create([
            
            'IDBuku'    => $request->IDBuku,
            'Judul'  => $request->Judul,
            'Penulis' => $request->Penulis,
            'Penerbit' => $request->Penerbit,
            'TahunTerbit' => $request->TahunTerbit,
            'JumlahStok' => $request->JumlahsStok,
            'DendaBuku' => $request->DendaBuku,
        ]);

        //redirect to index
        return redirect()->route('bukudappa.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function edit(string $id): View
    {
        //get post by ID
        $bukudappa = bukudappa::findOrFail($id);

        //render view with post
        return view('bukudappa.edit', compact('bukudappa'));
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
            'IDBuku' => 'required',
            'Judul' => 'required',
            'Penulis',
            'Penerbit',
            'TahunTerbit',
            'JumlahStok',
            'DendaBuku',

        ]);

        //get post by ID
        $bukudappa = bukudappa::findOrFail($id);

        //update post data
        
        $bukudappa->IDBuku = $request->IDBuku;
        $bukudappa->Judul = $request->Judul;
        $bukudappa->Penulis = $request->Penulis;
        $bukudappa->Penerbit = $request->Penerbit;
        $bukudappa->TahunTerbit = $request->TahunTerbit;
        $bukudappa->JumlahStok = $request->JumlahStok;
        $bukudappa->DendaBuku = $request->DendaBuku;

        //save post data
        $bukudappa->save();


        //redirect to index
        return redirect()->route('bukudappa.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function destroy($id): RedirectResponse
    {
        //get post by ID
        $bukudappa = bukudappa::findOrFail($id);



        //delete post
        $bukudappa->delete();

        //redirect to index
        return redirect()->route('bukudappa.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
    
}