<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    protected $table = 'peminjaman';
    protected $fillable = [
        'id','kode_peminjaman','nama_barang','nama_peminjam','tgl_pinjam','tgl_kembali','status','catatan',
    ];
}
