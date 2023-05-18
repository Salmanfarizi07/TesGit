<?php


namespace App\Http\Controllers\SimpananControllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DTsarjanaController extends Controller
{
    public function index()
    {
            return view('Simpanan.daftar-t-sarjana');
    }

    
}