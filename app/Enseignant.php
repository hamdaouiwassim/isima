<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enseignant extends Model
{
    //
    public function user(){
        return $this->belongsTo('App\User','iduser','id');
    }


    
}
