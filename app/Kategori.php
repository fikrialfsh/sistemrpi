<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'kategori';
    protected $fillable = [
        'kategori_name'
    ];
    public function inventaris(){
        return $this->hasMany('App\Inventaris');
    }
}
