<?php


namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class LadminController extends Controller
{
    public function index()
    {
            return view('Admin.menu');
    }

    
}
