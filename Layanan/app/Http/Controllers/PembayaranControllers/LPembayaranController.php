<?php


namespace App\Http\Controllers\PembayaranControllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class LPembayaranController extends Controller
{
    public function index()
    {
            return view('Pembayaran.menu');
    }

    public function ptagihan()
    {
            return view('Pembayaran.ptagihan');
    }

    public function simpananpokok()
    {
            return view('Pembayaran.simpananpokok');
    }

    public function tsarjanastore()
    {
        DB::table('tabungan')->insert([
            'id_user' => request('id_user'),
            'paket' => request('paket'),
            'tgl_awal' => request('tgl_awal'),
            'jenis_tabungan' => 'sarjana'
        ]);
        return redirect('/daftar-t-sarjana');
    }
    
}