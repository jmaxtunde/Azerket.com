<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable=
   [
       'pseudo',
	   'email',
       'message',
      'telephone',
       'annonce_id',
       'user_id',
   ];
     public function annonce()
    {
        return $this->belongsTo('App\Annonce');
    }
}
