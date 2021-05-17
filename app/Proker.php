<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proker extends Model
{
    protected $table = 'proker';
    protected $fillable = [
        'id','nama_kegiatan','tanggal','waktu','tempat','deskripsi_kegiatan',
    ];
}
