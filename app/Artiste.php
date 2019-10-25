<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artiste extends Model
{
//
    public function media()
    {
        return $this->belongsTo('App\Media');
    }


//    public function enfants(){
//        return $this->hasMany('App\Categorie','parent_id');
//    }
}

