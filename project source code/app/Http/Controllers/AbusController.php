<?php

namespace App\Http\Controllers;

use App\Abu;
use Illuminate\Http\Request;

class AbusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $abus = Abu::orderBY('id','desc')->paginate(10);
        return view('abus.index',['abus'=>$abus]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'pseudo'=>'required',
            'email'=>'required|string|max:255',
            'abus'=>'required',
        ]);
		
		$res= Abu::create($request->all());
                if($res)
                    {
                        return back()->with('abus','Abus reçu. Bientôt, vous aurez la suite ');
                    }else
                        {
                            return back()->with('abus','Données entrées incorrectes');
                        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Abu  $abu
     * @return \Illuminate\Http\Response
     */
    public function show(Abu $abu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Abu  $abu
     * @return \Illuminate\Http\Response
     */
    public function edit(Abu $abu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Abu  $abu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Abu $abu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Abu  $abu
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $abus = Abu::find( $id);
        if($abus->delete()){
             return redirect()->route('sindam.dashboard')
             ->with('success' , 'annonce supprimé');
         }
 
         return back()->withInput()->with('error' , 'Annonce non supprimé');
     
    }
}
