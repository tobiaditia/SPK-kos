<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FasilitasKamar extends Model
{
    protected $table = 'fasilitas_kamar';
    protected $fillable = [
        'kamar_id',
        'fasilitas_id'
    ];

    public $timestamps = false;

    public function kamar()
    {
        return $this->belongsTo('App\Kamar');
    }
}
