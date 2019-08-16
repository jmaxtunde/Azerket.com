<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Besoin extends Model
{
     protected $fillable=
   [
       'titre',
       'description',
       'location',
       'phoneNumber',
       'statut',
       'categorie_id',
   ];
     public function categorie()
    {
        return $this->belongsTo('App\Categorie');
    }
}
