<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class buku_salman extends Model 
{
    use HasFactory;

    protected $table = 'buku_salman';
    protected $primaryKey = 'id_buku';
    public $timestamps = true;
    protected $fillable = ['id_buku','judul','penulis','penerbit',
    'tahun', 'stok','denda','peminjam','kategori','tgl'];

    

}