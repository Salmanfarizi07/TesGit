<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    use HasFactory;
    protected $fillable = [
        'id user',
        'status user',
        'nama user',
        'no telepon',
        'email user',
        'password user',
    ];
}
