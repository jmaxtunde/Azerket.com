<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendeurrecommande extends Model
{
    //
    protected $fillable=
    [
        
        'statut',
        'nbMois',
        'user_id',
    ];
      public function user()
     {
         return $this->belongsTo('App\User');
     }
}
