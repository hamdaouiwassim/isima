<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Avie extends Model
{
    //
    public function matiere(){
        return $this->belongsTo('App\Matiere','idmatiere','id');
    }
}
