<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','email','callPhoneNumber', 'whatsAppNumber','messengerLink','country','location','adresse','profilePicture','typeAcount','recommended', 'password','confirmation_token',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function annonces()
    {
        return $this->hasMany('App\Annonce');
    }
    public function vendeurrecommandes()
    {
        return $this->hasMany('App\vendeurrecommande');
    }
    public function temoignages()
    {
        return $this->hasMany('App\Temoignage');
    }
       public function booster()
    {
        return $this->belongsTo('App\Booster');
    }
}
