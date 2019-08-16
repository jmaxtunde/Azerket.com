<?php

namespace App\Http\Controllers;

use App\Besoin;
use Illuminate\Http\Request;
use App\Categorie;

class BesoinsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // view all needs of custumer
       
        $besoins = Besoin::where('statut','Active')->orderBY('id','desc')->paginate(10);
        return view('besoins.index',['besoins'=>$besoins]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         $categories = Categorie::pluck('libelle','id');
        return view('besoins.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
      	$this->validate($request,[
            'titre'=>'required',
            'categorie_id'=>'required',
            'location'=>'required',
            'phoneNumber'=>'required',
        ]);
      
        Besoin::create($request->all());
        return back()->with('msg','Besoins envoyé, Vous serez contacté');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Besoin  $besoin
     * @return \Illuminate\Http\Response
     */
    public function rechercher(Request $request)
    {
        $query=$request->input('query');
                $lieu=$request->input('lieu');
                
                if($lieu)
                {
                    $besoins = Besoin::where('titre','like',"%$query%")->where('statut','Active')->Where('location','like',"%$lieu%")->orderBY('id','desc')->paginate(15);		
		}
                else
                {
                   $besoins = Besoin::where('titre','like',"%$query%")->orWhere('location','like',"%$query%")->where('statut','Active')->orderBY('id','desc')->paginate(15);	
                }
		
              
        return view('besoins.rechercher',compact('besoins'));

    }
    public function show(Besoin $besoin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Besoin  $besoin
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $besoins = Besoin::find($id);  
	return view('besoins.edit', compact('besoins'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Besoin  $besoin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $besoin= Besoin::find($id);
        //$user=Auth::User()->id;
                $formInput=$request->all();
                 $besoin->update($formInput);
                return redirect()->route('sindam.dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Besoin  $besoin
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $besoin = Besoin::find( $id);
        if($besoin->delete()){
             return redirect()->route('sindam.dashboard')
             ->with('success' , 'annonce supprimé');
         }
 
         return back()->withInput()->with('error' , 'Annonce non supprimé');
     
    }
}
