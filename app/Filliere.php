<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Filliere extends Model
{
    //
    public function user(){
        return $this->belongsTo('App\User','iduser','id');
    }
}
