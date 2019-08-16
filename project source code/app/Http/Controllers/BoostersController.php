<?php

namespace App\Http\Controllers;
use Auth;
use App\Booster;
use App\Besoin;
use App\Message;
use Illuminate\Http\Request;

class BoostersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $booster= Booster::where('statut','Desactive')->orderBY('id','desc')->paginate(10);
        return view('boosters.index', compact('booster'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
         if( Auth::check() )
             {
         
                        $message = Message::where('user_id',Auth::user()->id);
                        $annonce=$id;
                        $besoins=Besoin::all();
                        return view('boosters.create', compact('annonce','besoins','message'));
        }
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
        Booster::create($request->all());
         return redirect()->route('home')
             ->with('success' , 'Votre annonce sera boostée dès que nous recevons l argent');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Booster  $booster
     * @return \Illuminate\Http\Response
     */
    public function show()
    { 
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Booster  $booster
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
         $booster= Booster::find($id);
        return view('boosters.edit', compact('booster'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Booster  $booster
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $booster= Booster::find($id);
        $annonce= \App\Annonce::find($booster->annonce_id);
        $form1=['booster','Oui'];
        $annonce->update($form1);
        $form=$request->all();
        $booster->update($form);
                return redirect()->route('sindam.dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Booster  $booster
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booster $booster)
    {
        //
    }
}
