<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    //
    public function user(){
        return $this->belongsTo('App\User','iduser','id');
    }
    public function filliere(){
        return $this->belongsTo('App\Filliere','idfilliere','id');
    }
    public function stage(){
        return $this->hasOne('App\Stage','idetudiant','id');
    }
}
