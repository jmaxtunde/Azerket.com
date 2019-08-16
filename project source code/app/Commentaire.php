<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
     protected $fillable=
   [
       'pseudo',
	   'email',
	   'statut',
       'contenue',
       'annonce_id',
   ];
     public function annonce()
    {
        return $this->belongsTo('App\Annonce');
    }
}
