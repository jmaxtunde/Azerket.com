<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SousCategorie extends Model
{
     protected $fillable=
   [
       'name',
       'categorie_id'
   ];
    
    public function categorie()
    {
        return $this->belongsTo('App\Categorie');
    }
}
