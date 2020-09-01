<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crud extends Model
{
    protected $fillable = ['nama', 'nim', 'email', 'alamat', 'jurusan'];
}
