<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnnonceImage extends Model
{
    //
    protected $fillable=
   [
       'imagename',
       'annonce_id',
   ];
     public function annonce()
    {
        return $this->belongsTo('App\Annonce');
    }
	
}
