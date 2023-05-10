<?php

namespace App\Http\Controllers;

//import Model "Post
use App\Models\User;

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
        $user = user::latest()->paginate(5);

        //render view with posts
        return view('user.index', compact('user'));
    }

    public function edit(string $id): View
    {
        //get post by ID
        $user = user::findOrFail($id);

        //render view with post
        return view('user.edit', compact('user'));
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
            'status_user' ,
        'username' => 'required',
        'no_telp',
        'email' => 'required',
        'password' => 'required',

        ]);

        //get post by ID
        $user = user::findOrFail($id);

        //update post data
        $user->status_user = $request->status_user;
        $user->username = $request->username;
        $user->no_telp = $request->no_telp;
        $user->email = $request->email;
        $user->password = $request->password;

        //save post data
        $user->save();


        //redirect to index
        return redirect()->route('user.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    /**
     * destroy
     *
     * @param  mixed $post
     * @return void
     */
    public function destroy($id): RedirectResponse
    {
        //get post by ID
        $user = user::findOrFail($id);

        

        //delete post
        $user->delete();

        //redirect to index
        return redirect()->route('user.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
    
}