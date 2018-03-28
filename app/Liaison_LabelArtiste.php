<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Liaison_LabelArtiste extends Model
{
    public $table = 'liaison_labels_artistes';

    protected $fillable = [
      'label_id', 'artiste_id'
    ];
}
