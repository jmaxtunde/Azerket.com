<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Temoignage extends Model
{
    //
    protected $fillable=
    [
        
        'statut',
        'contenue',
        'user_id',
    ];
      public function user()
     {
         return $this->belongsTo('App\User');
     }
}
