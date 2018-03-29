<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artiste extends Model
{
    /*public function labels()
    {
        return $this->belongsToMany('labels');
    }*/
    protected $fillable = [
        'nom_artiste'
    ];
}
