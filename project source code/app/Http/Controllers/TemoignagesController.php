<?php

namespace App\Http\Controllers;
use Auth;
use App\Temoignage;
use App\Message;
use App\Besoin;
use Illuminate\Http\Request;

class TemoignagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $temoignages = Temoignage::orderBY('id','desc')->paginate(10);
        return view('temoignages.index',['temoignages'=>$temoignages]);
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
            return view('temoignages.create',compact('besoins','message'));
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
        $this->validate($request,[
            'contenue'=>'required',
        ]);
        Temoignage::create($request->all());
        return redirect()->route('home');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Temoignage  $temoignage
     * @return \Illuminate\Http\Response
     */
    public function show(Temoignage $temoignage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Temoignage  $temoignage
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $temoignages = Temoignage::find($id);  
        return view('temoignages.edit', compact('temoignages'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Temoignage  $temoignage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $temoignage= Temoignage::find($id);
        //$user=Auth::User()->id;
                $formInput=$request->all();
                 $temoignage->update($formInput);
                return redirect()->route('sindam.dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Temoignage  $temoignage
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $temoignage = Temoignage::find( $id);
        if($temoignage->delete()){
             return redirect()->route('sindam.dashboard')
             ->with('success' , 'temoignage supprimé');
         }
 
         return back()->withInput()->with('error' , 'temoignage non supprimé');
     
    }
    
}
