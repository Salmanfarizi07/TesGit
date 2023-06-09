<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class BukuSafana extends Model 
{
    use HasFactory;

    protected $table = 'bukusafanas';
    public $timestamps = true;
    protected $fillable = ['IDBuku','Judul','Penulis','Penerbit',
    'TahunTerbit', 'JumlahStok','DendaBuku'];

    

}