<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class User extends Model implements AuthenticatableContract
{
    use HasFactory;
    use Authenticatable;
    protected $table = 'user';
    protected $fillable = ['status_user','username','no_telp','email','password',];
    protected $primaryKey = 'id_user';
    public $timestamps = true;
}


