<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booster extends Model
{
     protected $fillable=
   [
       'annonce_id',
       'user_id',
       'statut',
       'dateDebut',
       'dateFin',
       'budget',
   ];
     public function users()
    {
        return $this->hasMany('App\User');
    }
	public function annonces()
    {
        return $this->hasMany('App\Annonce');
    }
}
