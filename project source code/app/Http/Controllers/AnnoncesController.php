<?php

namespace App\Http\Controllers;
use Auth;
use App\SousCategorie;
use App\Categorie;
use App\Commentaire;
use App\Annonce;
use App\Message;
use App\AnnonceImage;
use App\Besoin;
use App\Notifications;
use App\Notifications\RepliedToThread;
use Illuminate\Http\Request;

class AnnoncesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // option de boot
        // $annonces=Annonce::where('statut','Active')->where('booster','Oui')->orderBY('id','desc')->paginate(15);
        // retrieve all announce
            $annonces=Annonce::where('statut','Active')->orderBY('id','desc')->paginate(15);
        //$annonces = Annonce::orderBY('id','desc')->paginate(15);
		$moyens= SousCategorie::where('categorie_id','1')->get();
        $telephone= SousCategorie::where('categorie_id','2')->get();
        $electronique= SousCategorie::where('categorie_id','3')->get();
        $fashion= SousCategorie::where('categorie_id','4')->get();
        $animaux= SousCategorie::where('categorie_id','5')->get();
        $loisir= SousCategorie::where('categorie_id','6')->get();
        $immobilier= SousCategorie::where('categorie_id','7')->get();
        $agriculture= SousCategorie::where('categorie_id','8')->get();
        $beaute= SousCategorie::where('categorie_id','9')->get();
        $emplois= SousCategorie::where('categorie_id','10')->get();
        $rechercheEmploi= SousCategorie::where('categorie_id','11')->get();
        $bebe= SousCategorie::where('categorie_id','12')->get();
        $prestation= SousCategorie::where('categorie_id','13')->get();
        $evenement= SousCategorie::where('categorie_id','14')->get();
        $mobilier= SousCategorie::where('categorie_id','15')->get();
        $restaurant= SousCategorie::where('categorie_id','16')->get();
		
        return view('annonces.index',compact('annonces','moyens','telephone','electronique','fashion',
                'animaux','loisir','immobilier','agriculture','beaute','emplois',
                'rechercheEmploi','bebe','prestation','evenement','mobilier','restaurant'));
    }
     public function statistique()
    {
        $souscategorie= Annonce::all()->groupBy('souscategorie');
		
        return view('annonces.statistiques',compact('souscategorie'));
    }
    public function statistiquecategorie()
    {
        $souscategorie= Annonce::all()->groupBy('categorie');
		
        return view('annonces.statistiquescategorie',compact('souscategorie'));
    }
	public function rechercher(Request $request)
    {
        // search
		$query=$request->input('query');
			
		$annonces = Annonce::where('souscategorie','like',"%$query%")->orWhere('titreAnnonce','like',"%$query%")->orWhere('categorie','like',"%$query%")->orWhere('lieu','like',"%$query%")->orWhere('description','like',"%$query%")->orderBY('id','desc')->where('statut','Active')->paginate(15);		
		$moyens= SousCategorie::where('categorie_id','1')->get();
        $telephone= SousCategorie::where('categorie_id','2')->get();
        $electronique= SousCategorie::where('categorie_id','3')->get();
        $fashion= SousCategorie::where('categorie_id','4')->get();
        $animaux= SousCategorie::where('categorie_id','5')->get();
        $loisir= SousCategorie::where('categorie_id','6')->get();
        $immobilier= SousCategorie::where('categorie_id','7')->get();
        $agriculture= SousCategorie::where('categorie_id','8')->get();
        $beaute= SousCategorie::where('categorie_id','9')->get();
        $emplois= SousCategorie::where('categorie_id','10')->get();
        $rechercheEmploi= SousCategorie::where('categorie_id','11')->get();
        $bebe= SousCategorie::where('categorie_id','12')->get();
        $prestation= SousCategorie::where('categorie_id','13')->get();
        $evenement= SousCategorie::where('categorie_id','14')->get();
        $mobilier= SousCategorie::where('categorie_id','15')->get();
        $restaurant= SousCategorie::where('categorie_id','16')->get();
		
        return view('annonces.rechercher',compact('annonces','moyens','telephone','electronique','fashion',
                'animaux','loisir','immobilier','agriculture','beaute','emplois',
                'rechercheEmploi','bebe','prestation','evenement','mobilier','restaurant'));
    }
	public function affcategorie($categorie)
    {
            $annonces=Annonce::where('souscategorie',$categorie)->orWhere('categorie',$categorie)->orderBY('id','desc')->where('statut','Active')->paginate(15);
		$moyens= SousCategorie::where('categorie_id','1')->get();
        $telephone= SousCategorie::where('categorie_id','2')->get();
        $electronique= SousCategorie::where('categorie_id','3')->get();
        $fashion= SousCategorie::where('categorie_id','4')->get();
        $animaux= SousCategorie::where('categorie_id','5')->get();
        $loisir= SousCategorie::where('categorie_id','6')->get();
        $immobilier= SousCategorie::where('categorie_id','7')->get();
        $agriculture= SousCategorie::where('categorie_id','8')->get();
        $beaute= SousCategorie::where('categorie_id','9')->get();
        $emplois= SousCategorie::where('categorie_id','10')->get();
        $rechercheEmploi= SousCategorie::where('categorie_id','11')->get();
        $bebe= SousCategorie::where('categorie_id','12')->get();
        $prestation= SousCategorie::where('categorie_id','13')->get();
        $evenement= SousCategorie::where('categorie_id','14')->get();
        $mobilier= SousCategorie::where('categorie_id','15')->get();
        $restaurant= SousCategorie::where('categorie_id','16')->get();
        
        
        return view('annonces.categorie',compact('annonces','moyens','telephone','electronique','fashion',
                'animaux','loisir','immobilier','agriculture','beaute','emplois',
                'rechercheEmploi','bebe','prestation','evenement','mobilier','restaurant'));
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
                
        $moyens= SousCategorie::where('categorie_id','1')->pluck('name','name');
        $telephone= SousCategorie::where('categorie_id','2')->pluck('name','name');
        $electronique= SousCategorie::where('categorie_id','3')->pluck('name','name');
        $fashion= SousCategorie::where('categorie_id','4')->pluck('name','name');
        $animaux= SousCategorie::where('categorie_id','5')->pluck('name','name');
        $loisir= SousCategorie::where('categorie_id','6')->pluck('name','name');
        $immobilier= SousCategorie::where('categorie_id','7')->pluck('name','name');
        $agriculture= SousCategorie::where('categorie_id','8')->pluck('name','name');
        $beaute= SousCategorie::where('categorie_id','9')->pluck('name','name');
        $emplois= SousCategorie::where('categorie_id','10')->pluck('name','name');
        $rechercheEmploi= SousCategorie::where('categorie_id','11')->pluck('name','name');
        $bebe= SousCategorie::where('categorie_id','12')->pluck('name','name');
        $prestation= SousCategorie::where('categorie_id','13')->pluck('name','name');
        $evenement= SousCategorie::where('categorie_id','14')->pluck('name','name');
        $mobilier= SousCategorie::where('categorie_id','15')->pluck('name','name');
        $restaurant= SousCategorie::where('categorie_id','16')->pluck('name','name');
        
        
        return view('annonces.create',compact('moyens','telephone','electronique','fashion',
                'animaux','loisir','immobilier','agriculture','beaute','emplois',
                'rechercheEmploi','bebe','prestation','evenement','mobilier','besoins','restaurant','message'));
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
        //
        $formInput=$request->except('picture');

//        validation
        $this->validate($request,[
            'titreAnnonce'=>'required',
            'description'=>'required',
            'prix'=>'required',
            'lieu'=>'required',
            'picture'=>'image|mimes:png,jpg,jpeg|max:10000'
        ]);
//        image upload
        $image=$request->picture;
        if($image)
        {
            $imageName=time().rand(123,999).'.'.$image->getClientOriginalExtension();
            $image->move('images/products',$imageName);
            $formInput['picture']=$imageName;
        }
        else
        {
             $formInput['picture']="no image";
        }
        

        Annonce::create($formInput);
        
        
        return redirect()->route('home');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Annonce  $annonce
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(is_numeric($id))
		{
		$annonces = Annonce::find($id);
			if($annonces)
			{
			$images = AnnonceImage::where('annonce_id',$id)->get();
			$categorie = Annonce::where('id',$id)->pluck('souscategorie');
			$user = Annonce::where('id',$id)->pluck('user_id');
			$annoncecategorie = Annonce::where('souscategorie',$categorie)->paginate(15);
			$annonceuser = Annonce::where('user_id',$user)->paginate(15);
            $annonces->nb_visit++;
			$annonces->save();
			$commentaire = Commentaire::where('annonce_id',$id)->get();
			 return view('annonces.show', compact('annonces','commentaire','images','annoncecategorie','annonceuser'));
			}
			else
			{
				return view('terme');
			}
		}else
		{
			return view('terme');
		}
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Annonce  $annonce
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
		$besoins=Besoin::all();
		$annonces = Annonce::find($id);  
		return view('annonces.edit', compact('annonces','besoins'));
    }
    public function postedit($id)
    {
		
		$annonces = Annonce::find($id);  
		return view('sindam.editpost', compact('annonces'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Annonce  $annonce
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
		$annonce=Annonce::find($id);
        //$user=Auth::User()->id;
                $formInput=$request->except('picture');

                 //        validation
                

                //        image upload
                $image=$request->picture;
                if($image){
                    $imageName=time().rand(123,999).'.'.$image->getClientOriginalExtension();
                    $image->move('images/user',$imageName);
                    $formInput['picture']=$imageName;
                }

                 $annonce->update($formInput);
                 
                return redirect()->route('home');
    }
public function postupdate(Request $request, $id)
    {
        //
		$annonce=Annonce::find($id);
        //$user=Auth::User()->id;
                $formInput=$request->except('picture');
                
                $image=$request->picture;
                if($image){
                    $imageName=time().rand(123,999).'.'.$image->getClientOriginalExtension();
                    $image->move('images/products',$imageName);
                    $formInput['picture']=$imageName;
                }

                 $annonce->update($formInput);
                 $user= \App\User::find($annonce->user_id);
                 $form=$request->input('titreAnnonce');
                 // $user->notify(new RepliedToThread($form));
                $user->notify(new Notifications\AnnonnceActive());
                return redirect()->route('sindam.dashboard');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Annonce  $annonce
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $annonce = Annonce::find( $id);
        if($annonce->delete()){
             return redirect()->route('sindam.dashboard')
             ->with('success' , 'annonce supprimé');
         }
 
         return back()->withInput()->with('error' , 'Annonce non supprimé');
         
    }
}
