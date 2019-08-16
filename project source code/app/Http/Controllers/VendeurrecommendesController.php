<?php

namespace App\Http\Controllers;

use App\Vendeurrecommande;
use Auth;
use App\Message;
use App\Besoin;
use Illuminate\Http\Request;

class VendeurrecommendesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $vendeurrecommandes = Vendeurrecommande::orderBY('id','desc')->paginate(10);
        return view('vendeurrecommandes.index',['vendeurrecommandes'=>$vendeurrecommandes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        if( Auth::check() ){

			
            $message = Message::where('user_id',Auth::user()->id);
            $besoins=Besoin::all();
            return view('vendeurrecommandes.create',compact('besoins','message'));
            }
            return redirect(route('login'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nbMois'=>'required',
        ]);
        vendeurrecommande::create($request->all());
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Vendeurrecommande  $vendeurrecommande
     * @return \Illuminate\Http\Response
     */
    public function show(Vendeurrecommande $vendeurrecommande)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Vendeurrecommande  $vendeurrecommande
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $vendeurrecommandes = Vendeurrecommande::find($id);  
        return view('vendeurrecommandes.edit', compact('vendeurrecommandes'));
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Vendeurrecommande  $vendeurrecommande
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $vendeurrecommandes= Vendeurrecommande::find($id);
        //$user=Auth::User()->id;
                $formInput=$request->all();
                 $vendeurrecommandes->update($formInput);
                return redirect()->route('sindam.dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Vendeurrecommande  $vendeurrecommande
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $vendeurrecommandes = Vendeurrecommande::find( $id);
        if($vendeurrecommandes->delete()){
             return redirect()->route('sindam.dashboard')
             ->with('success' , 'vendeur recommande supprimé');
         }
 
         return back()->withInput()->with('error' , 'vendeur recommande non supprimé');
     
    
    }
}
