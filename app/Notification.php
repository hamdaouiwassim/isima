<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    //
    public function stage(){
        return $this->belongsTo('App\Stage','idstage','id');
    }
    public function enseignant(){
        return $this->belongsTo('App\Enseignant','idenseignant','id');
    }
}
