<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Annonce;
use App\Temoignage;
use App\User;

class InternauteController extends Controller
{
    public function index()
    {
      //$userRecommended = User::where('Recommended','Yes'); 
        $userRecommended=User::all()->where('recommended','Yes')->take(20);
      //$annonces=Annonce::all()->where('statut','Active')->sortByDesc("id")->take(24);
      $annonces=Annonce::inRandomOrder()->where('statut','Active')->get()->take(24);
      $temoignages=Temoignage::all()->where('statut','Active')->sortByDesc("id")->take(4);
        
		
       // $annonces=Annonce::where('statut','Active')->take(20)->sortByDesc("id");

        return view('index',compact('annonces','temoignages','userRecommended'));
    }
    public function comment()
    {
        return view('comment');
    }
     public function terme()
    {
        return view('terme');
    }
     public function contrat()
    {
        return view('contrat');
    }
    public function premium()
    {
        return view('premium');
    }
    public function faq()
    {
        return view('faq');
    }

    
}
