<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fasilitas extends Model
{
    protected $table = 'fasilitas';
    protected $fillable = [
        'nama',
    ];

    public function kamar()
    {
        return $this->belongsToMany('App\Kamar');
    }
}
