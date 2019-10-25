<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{


    //
    public function artistes(){

            return $this->hasMany('App\Artiste');

      //  return $this->belongsTo('App\artiste_id')->withTimestamps();
    }
}
