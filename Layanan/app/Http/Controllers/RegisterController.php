<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Session;

class RegisterController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }
    
    public function actionregister(Request $request)
    {
        $user = User::create([
            'email' => $request->email,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'no_telp' => $request->no_telp,
            'status_user' => $request->status_user
        ]);

        Session::flash('message', 'Register Berhasil. Akun Anda sudah Aktif silahkan Login menggunakan username dan password.');
        return redirect('/Register');
    }
}