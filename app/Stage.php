<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stage extends Model
{
    //
    public function notifications(){
        return $this->hasMany('App\Notification','idstage','id');
    }
    public function etudiant(){
        return $this->belongsTo('App\Etudiant','idetudiant','id');
    }
}
