<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
     protected $fillable=
   [
       'libelle',
   ];
     public function souscategorie()
    {
        return $this->hasMany('App\SousCategorie');
    }
    public function besoins()
    {
        return $this->hasMany('App\Besoin');
    }
}
