<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        if (Auth::check()) {
            return view('home');
        }else{
            return redirect('/');
        }
    }
}
