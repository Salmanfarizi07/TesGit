<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class Tabungan extends Model 
{
    use HasFactory;

    protected $table = 'tabungan';
    protected $primaryKey = 'id_tabungan';
    public $timestamps = true;
    protected $fillable = ['id_user','jenis_tabungan','tgl_awal','semester','golongan_ukt','paket','jumlah_tabungan'];

    // Definisikan relasi dengan model User
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

}