<?php

namespace App\Http\Controllers;

use App\Models\user;
use Illuminate\View\View;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(): View
    {
        //get users
        $users = user::latest()->paginate(5);

        //render view with posts
        return view('users.index', compact('users'));
    }

    public function create(): View
    {
        return view('users.create');
    }

    public function store(Request $request): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'id'     => 'required',
            'status'     => 'required',
            'nama'   => 'required',
            'no'   => 'required',
            'email'   => 'required',
            'password'   => 'required'
        ]);

        //upload image
        //$image = $request->file('image');
        //$image->storeAs('public/posts', $image->hashName());

        //create post
        user::create([
            'id user'      => $request->id,
            'status user'     => $request-statususer,
            'nama user'   => $request->namauser,
            'no telepon'   => $request->notelepon,
            'email user'   => $request->emailuser,
            'password user'   => $request->passworduser
        ]);

        //redirect to index
        return redirect()->route('users.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }
}
