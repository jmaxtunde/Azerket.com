<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Annonce extends Model
{
    protected $fillable=
   [
       'titreAnnonce',
       'description',
       'prix',
       'picture',
       'booster',
       'condition',
       'statut',
       'lieu',
       'categorie',
       'user_id',
       'souscategorie',
   ];
     public function user()
    {
        return $this->belongsTo('App\User');
    }
	public function abus()
    {
        return $this->hasMany('App\Abus');
    }
    public function commentaires()
    {
        return $this->hasMany('App\Commentaire');
    }
    public function messages()
    {
        return $this->hasMany('App\Message');
    }
    public function annonceimages()
    {
        return $this->hasMany('App\AnnonceImage');
    }
    public function booster()
    {
        return $this->belongsTo('App\Booster');
    }
}
