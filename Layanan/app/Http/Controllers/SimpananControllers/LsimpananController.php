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

    public function tsarjanastore()
    {
        DB::table('tabungan')->insert([
            'id_user' => request('id_user'),
            'paket' => request('paket'),
            'tgl_awal' => request('tgl_awal'),
            'jenis_tabungan' => 'sarjana'
        ]);
        return redirect('/tskonfirmasipembayaran');
    }
    
}