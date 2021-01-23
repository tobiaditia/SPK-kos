<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    protected $table = 'kamar';
    protected $fillable = [
        'id_kos',
        'nama',
        'kapasitas',
        'harga',
        'pembayaran',
    ];

    public function getKos()
    {
        return $this->belongsTo('App\Kos');
    }
}
