<?php


namespace App\Http\Controllers\SimpananControllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class LsimpananController extends Controller
{
    public function index()
    {
            return view('Simpanan.menu');
    }

    public function ptabungan()
    {
            return view('Simpanan.ptabungan');
    }

    public function dtsarjana()
    {
            return view('Simpanan.daftar-t-sarjana');
    }

    
}