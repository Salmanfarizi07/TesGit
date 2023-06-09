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

    
    
}