<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kos extends Model
{
    protected $table = 'kos';
    protected $fillable = [
        'nama',
        'id_lokasi',
        'deskripsi',
        'no_hp',
    ];

    public function getKamar()
    {
        return $this->hasMany('App\Kamar','id_kos','id');
    }
}
