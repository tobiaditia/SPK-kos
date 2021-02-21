<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdministrativeArea extends Model
{
    protected $table = 'administrative_area';
    protected $fillable = [
        'area_code', 'area_name'
    ];

    public function kos()
    {
        return $this->belongsTo('App\Kos');
    }
}
