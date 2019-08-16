<?php

namespace App\Http\Controllers;

use App\AnnonceImage;
use App\Annonce;
use App\Besoin;
use Illuminate\Http\Request;

class AnonncesImagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        //
        $besoins=Besoin::all();
        $annonces=Annonce::find($id);
        return view('imageupload/create', compact('annonces','besoins'));
        
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
         $formInput=$request->except('imagename');
       
	if($request ->hasFile('imagename'))
	{
		$image_array = $request->file('imagename');
		
                foreach($image_array as $img)
                    {
                                $image_name= time().rand(123,999).".".$img->getClientOriginalExtension();
                                $img->move('images/products',$image_name);
                                 $formInput['imagename']=$image_name;
                                 AnnonceImage::create($formInput);
                    }
                        return back()->with('msg','Image ajouté avec succès');
                
        }
	else{
		return back()->with('msg','veuillez choissir une image');
	}

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AnnonceImage  $annonceImage
     * @return \Illuminate\Http\Response
     */
    public function show(AnnonceImage $annonceImage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AnnonceImage  $annonceImage
     * @return \Illuminate\Http\Response
     */
    public function edit(AnnonceImage $annonceImage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AnnonceImage  $annonceImage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AnnonceImage $annonceImage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AnnonceImage  $annonceImage
     * @return \Illuminate\Http\Response
     */
    public function destroy(AnnonceImage $annonceImage)
    {
        //
    }
}
