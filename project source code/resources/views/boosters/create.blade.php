@extends('layouts.app2')
@section('content')

@guest
    <div style="background-color:#e9ebee;">
<div class="container">
    <div class="row">
	
        <div class="col-md-12 col-md-offset-2">
            <div class="card mb-4 box-shadow">
			<center>
                <div class="card-header"><h4 class="my-0 font-weight-normal">Connexion à votre compte</h4></div>
				
                <div class="card-body" style="align:center">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Adresse E-Mail ou N° telephone </label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control" name="email" value="{{ old('email') }}" placeholder="votre Email ou N° telephone" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Mot de passe</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" placeholder="votre mot de passe" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}/> Se souvenir de moi
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-transparent">
                                    Se connecter
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Mot de Passe oublié ?
                                </a><br/>
                                <br/>
                                <p style="color:red;">N'aviez vous pas un compte ?</p>
                                <a class="btn btn-link" href="{{ route('register') }}" >
                                 S'inscrire maintenant 
                                    
                                </a>
                                
                            </div>
                        </div>
                    </form>
                </div>
				</center>
            </div>
        </div>
    </div>
</div>
</div>
@else
<div style="background-color:#e9ebee;">
    
    <div class="container" style="background-color:white;">
       <br/>
    <div class="row">
        
        <div class="col-md-8 col-md-offset-2"> 
            <div class="widget personal-info">
               
                    <h2 class="widget-header user"><center> Boosters votre annonce à 300 FCFA par Jours</center></h2>     
              <p> Le payment se fera d'abord par mobile money sur ce numéro + 229 66 33 87 29. D'autres moyens de payements seront disponible très prochainement...
              Votre annonce sera reférencée, une fois l'argent envoyé. Nous vous contacterons via appel ou WhatsApp</p>
              <hr/>
                    
                                        {!! Form::open(['route' => ['boosters.store'], 'method' => 'POST', 'files' => true, 'data-parsley-validate'=>'']) !!}

                                     
                                    
                                    <div class="form-group">
                                        {{ Form::label('budget', 'Votre budget') }}
                                        {{ Form::text('budget', null, array('class' => 'form-control','required'=>'','placeholder'=>'Quelle est votre budget ?')) }}
                                    </div>
                                        
                                    <div class="form-group">
                                        {{ Form::hidden('user_id',Auth::user()->id) }}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::hidden('annonce_id',$annonce) }}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::hidden('dateDebut','----') }}
                                    </div>
                                        <div class="form-group">
                                        {{ Form::hidden('dateFin','-----') }}
                                    </div>
                                    
                                        <div class="form-group">
                                        {{ Form::hidden('statut','Desactive') }}
                                    </div>

                                    <center><div class="form-group">
                                     {{ Form::submit('Create', array('class' => 'btn btn-transparent')) }}
                                    {!! Form::close() !!}
                                        </div></center>
                   </div>
                    </div>
        
		<div class="col-md-10 offset-md-1 col-lg-4 offset-lg-0">
				@include('include/sidebarMaster1')
			</div>
        </div>
            </div>
        </center>
    </div>
       
    </div>
</div>
@endguest
@endsection