<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Besoin;
use App\Annonce;
class SindamsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:sindam');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $annonces = Annonce::orderBY('id','desc')->paginate((15));
        return view('sindam',compact('annonces'));
    }
    public function besoins()
    {
        $besoins = Besoin::orderBY('id','desc')->paginate(10);
        return view('besoins.voir',compact('besoins'));
    }
}
