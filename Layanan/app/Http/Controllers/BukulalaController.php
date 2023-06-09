<?php

namespace App\Http\Controllers;

//import Model "Post
use App\Models\Buku_lala;

//return type View
use Illuminate\View\View;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class UserController extends Controller
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
        return view('buku_lala.index', compact('Buku_lala'));
    }

    
    
}