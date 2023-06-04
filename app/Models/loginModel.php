<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class loginModel extends Model
{
    protected $table = "login";
    public $timestamps = false;
    public $fillable = ['nombre_fruta','cantidad','proveedor'];
}
