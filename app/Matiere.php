<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matiere extends Model
{
    //
    public function supports()
    {
        return $this->hasMany('App\Support','idmatiere','id');
    }
      //
      public function avies()
      {
          return $this->hasMany('App\Avie','idmatiere','id');
      }
    
}
