<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bukusafana extends Model
{
    use HasFactory;
    protected $fillable = [
        'IDBuku','Judul','Penulis','Penerbit','TahunTerbit','JumlahStok','DendaBuku'
    ];
}
