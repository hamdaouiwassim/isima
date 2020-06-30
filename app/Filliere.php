<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Filliere extends Model
{
    //
    public function user(){
        return $this->belongsTo('App\User','iduser','id');
    }
    public function avies(){
        return $this->hasMany('App\Avie','idfilliere','id');
    }
    public function supports(){
        return $this->hasMany('App\Support','idfilliere','id');
    }
    public function etudiants(){
        return $this->hasMany('App\Etudiant','idfilliere','id');
    }

}
