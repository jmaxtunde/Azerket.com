<?php

namespace App\Http\Controllers;

use App\SousCategorie;
use Illuminate\Http\Request;
use App\Categorie;

class SousCategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $souscategories = SousCategorie::orderBY('id','desc')->paginate(10);
        return view('souscategories.index',['souscategories'=>$souscategories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories=Categorie::pluck('libelle','id');
        return view('souscategories.create',compact('categories'));
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
        SousCategorie::create($request->all());
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SousCategorie  $sousCategorie
     * @return \Illuminate\Http\Response
     */
    public function show(SousCategorie $sousCategorie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SousCategorie  $sousCategorie
     * @return \Illuminate\Http\Response
     */
    public function edit(SousCategorie $sousCategorie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SousCategorie  $sousCategorie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SousCategorie $sousCategorie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SousCategorie  $sousCategorie
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $souscategorie = SousCategorie::find( $id);
        if($souscategorie->delete()){
             return redirect()->route('sindam.dashboard')
             ->with('success' , 'annonce supprimé');
         }
 
         return back()->withInput()->with('error' , 'Annonce non supprimé');
     
    }
}
