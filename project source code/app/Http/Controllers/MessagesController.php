<?php

namespace App\Http\Controllers;

use App\Message;
use App\Besoin;
use App\User;
use Auth;
use App\Annonce;
use App\Notifications\MessageEnvoyer;
use Notification;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $messages = Message::orderBY('id','desc')->paginate((10));
        return view('message.index',['messages'=>$messages]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
       
       if( Auth::check() ){
      if(is_numeric($id))
		{
		$annonces = Annonce::find($id);
			if($annonces)
			{
			
			$message = Message::where('user_id',Auth::user()->id);
			$besoins=Besoin::all();
			$user=Auth::user();
			 return view('message.create', compact('annonces','users','user','besoins','message'));
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
      else
      {
      	return redirect(route('login'));
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
		 $formInput=$request->except('useremail');
		 
	   $this->validate($request,[
            'pseudo'=>'required',
            'email'=>'required|string|max:255',
            'message'=>'required',
        ]);
		$user=$request->user_id;
		$users=User::find($user);
		
		Message::create($formInput);
		
		   // Notification au vendeur
		$users->notify(new MessageEnvoyer());
		
        return back()->with('msg','Message envoyé');
		
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(is_numeric($id))
		{
		$message = Message::where('user_id',$id)->orderBY('id','desc')->paginate((10));
			if($message)
			{
                            $besoins=Besoin::all();
                            return view('message.show', compact('message','besoins'));
			}
			else
			{
				return view('comment');
			}
		}else
		{
			return view('terme');
		}
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function edit(Message $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Message $message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
         $message = Message::find( $id);
        if($message->delete()){
             return redirect()->route('sindam.dashboard')
             ->with('success' , 'Message supprimé');
         }
 
         return back()->withInput()->with('error' , 'Message non supprimé');
     
    }
}
