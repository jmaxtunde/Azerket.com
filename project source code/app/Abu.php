<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Abu extends Model
{
    protected $fillable=
   [
       'pseudo',
	   'email',
       'abus',
       'annonce_id',
   ];
     public function annonce()
    {
        return $this->belongsTo('App\Annonce');
    }
}
