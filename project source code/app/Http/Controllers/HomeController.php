<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Annonce;
use App\Besoin;
use App\Message;
use Illuminate\Http\Request;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if( Auth::check() ){

			$besoins=Besoin::all();
                        $message = Message::where('user_id',Auth::user()->id);
            $annonces = Annonce::where('user_id', Auth::user()->id)->orderBY('id','desc')->paginate((5));

             return view('home', compact('annonces','besoins','message'));  
        }
        return redirect(route('login'));
    }
	public function pagenotfound()
    {
        return view('index');
    }
}
