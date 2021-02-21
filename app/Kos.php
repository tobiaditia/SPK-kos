<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kos extends Model
{
    protected $table = 'kos';
    protected $fillable = [
        'nama',
        'id_lokasi',
        'gambar',
        'deskripsi',
        'no_hp',
    ];

    public function kamar()
    {
        return $this->hasMany('App\Kamar');
    }

    public function administrative_area()
    {
        return $this->hasOne('App\AdministrativeArea', 'area_code', 'id_lokasi');
    }
}
