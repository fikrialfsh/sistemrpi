<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventaris extends Model
{
    //
    protected $table = 'inventaris';
    protected $fillable = [
        'id','nama_barang','kategori_id','tanggal_pengadaan','kondisi','stok',
    ];
    public function kategori(){
    	return $this->belongsTo('App\Models\Kategori');
    }
}
