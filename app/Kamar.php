<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    protected $table = 'kamar';
    protected $fillable = [
        'kos_id',
        'nama',
        'kapasitas',
        'harga',
        'pembayaran',
    ];

    public function kos()
    {
        return $this->belongsTo('App\Kos');
    }

    public function fasilitas()
    {
        return $this->belongsToMany('App\Fasilitas');
    }
}
