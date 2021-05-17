<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    protected $table = 'anggota';
    protected $fillable = [
        'nama','foto','kelas','jurusan','alamat','divisi','nohp','hobi','status'
    ];
}
