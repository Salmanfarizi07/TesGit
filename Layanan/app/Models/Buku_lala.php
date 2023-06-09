<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class Buku_lala extends Model 
{
    use HasFactory;

    protected $table = 'buku_lala';
    protected $primaryKey = 'id_buku';
    public $timestamps = true;
    protected $fillable = ['id_buku','judul','penulis','penerbit',
    'tahun', 'stok','denda','peminjam','kategori','tgl'];

    

}