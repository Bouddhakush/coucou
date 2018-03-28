<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Label extends Model
{
    public function artistes()
    {
        return $this->belongsToMany('artistes');
    }
}