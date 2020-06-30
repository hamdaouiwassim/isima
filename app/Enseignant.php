<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enseignant extends Model
{
    //
    public function user(){
        return $this->belongsTo('App\User','iduser','id');
    }

    public function notifications(){
        return $this->hasMany('App\Notification','idenseignant','id');
    }


    
}
