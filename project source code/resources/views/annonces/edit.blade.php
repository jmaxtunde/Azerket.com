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
                            <label for="email" class="col-md-4 control-label">Addresse E-Mail </label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="votre Email" required autofocus>

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
                                <button type="submit" class="btn btn-primary">
                                    Se connecter
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Mot de Passe oublié ?
                                </a><br/>
                                N'aviez vous pas un compte ?
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
            @if(count($errors)>0)
                                    <ul>
                                        @foreach($errors->all() as $error)
                                            <li class="alert alert-danger">{{$error}}</li>
                                        @endforeach
                                    </ul>
                                @endif
            <div class="widget personal-info">
                      <div>
                                        <h2 class="widget-header user"><center>Modifier  une annonce </center></h2>

                                    {!! Form::open(['route' => ['annonces.update',$annonces->id],'method' => 'PATCH', 'files' => true, 'data-parsley-validate'=>'']) !!}
										
                                     <div class="form-group">
                                        {{ Form::hidden('souscategorie',$annonces->souscategorie) }}
                                    </div>
                                    
                                    <div class="form-group">
                                        {{ Form::label('name', 'Titre') }}
                                        {{ Form::text('titreAnnonce', $annonces->titreAnnonce, array('class' => 'form-control','required'=>'','minlength'=>'5','placeholder'=>'Que voulez-vous vendre?')) }}
                                    </div>

                                    <div class="form-group">
                                        {{ Form::label('description', 'Description') }}
                                        {{ Form::textarea('description', $annonces->description, array('class' => 'form-control','required'=>'','placeholder'=>'Decrivez ce que vous voulez vendre ?','id'=>'froala-editor')) }}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('price', 'Prix/Contact/Date de délai') }}
                                        {{ Form::text('prix', $annonces->prix, array('class' => 'form-control','required'=>'','placeholder'=>'Prix ou vous pouvez aussi dire :<< contacter moi pour le prix >>')) }}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('location', 'Lieu') }}
                                        {{ Form::text('lieu', $annonces->lieu, array('class' => 'form-control','required'=>'','placeholder'=>'Préciser le (s) ville(s) où on peut se procurer votre produit')) }}
                                    </div>

                                    <div class="form-group">
                                        {{ Form::label('condition', 'Etat') }}
                                        {{ Form::select('condition', [ 'New' => 'New', '9/10' => '9/10', '8/10' => '8/10','7/10' => '7/10','6/10' => '6/10'], null, ['class' => 'form-control']) }}
                                    </div>
                                   
                                    <div class="form-group choose-file">
                                        {{ Form::label('picture', 'Photo ') }}
                                        {{ Form::file('picture',array('class' => 'form-control-file d-inline')) }}
                                    </div>
                                        
                                    <div class="form-group">
                                        {{ Form::hidden('user_id',Auth::user()->id) }}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::hidden('statut','Desactive') }}
                                    </div>

                                    <center><div class="form-group">
                                     {{ Form::submit('Modifier', array('class' => 'btn btn-transparent')) }}
                                    {!! Form::close() !!}
                                        </div></center>
                    </div>
                    
                    
            </div>
               </div>  
        <div class="col-md-10 offset-md-1 col-lg-4 offset-lg-0">
				<div class="sidebar">
					<!-- User Widget -->
					<div class="widget user-dashboard-profile">
						<!-- User Image -->
						<div class="profile-thumb">
							<img src="../../images/user/{{Auth::user()->profilePicture}}" alt="Photo de Profile" class="rounded-circle"/>
						</div>
						<!-- User Name -->
						<h5 class="text-center">{{Auth::user()->name}}</h5>
						<p>Enrégistré le {{Auth::user()->created_at}}</p>
                                                <a href="{{ url('/sellers.edit') }}" class="btn btn-main-sm">Modifier profile</a>
					</div>
					<!-- Dashboard Links -->
					<div class="widget user-dashboard-menu">
						<ul>
							<li class="active">
								<a href="{{ route('home')}}"><i class="fa fa-user"></i> Mes annonces <span>{{$annonces->count()}}</span></a>
                                                        </li>
                                                        <li >
								<a href="{{ url('/annonces/create') }}"><i class="fa fa-plus-circle"></i> Ajouter une annonce </a>
							</li>
							<li>
								<a href="{{ url('/besoins') }}"><i class="fa fa-bookmark-o"></i> Les besoins des clients <span>{{$besoins->count()}}</span></a>
							</li>
							<li>
								<a href="{{route('comment')}}"><i class="fa fa-eye"></i> Comment ça marche ?</a>
							</li>
                                                        <li>
								<a href="{{route('terme')}}"><i class="fa fa-eye"></i>Règles d'utilisation</a>
							</li>
                                                        <li>
								<a href="{{route('contrat')}}"><i class="fa fa-eye"></i> Politique de confidentialité</a>
							</li>
							<li>
								<a href="{{ route('logout') }}"
                                                                     onclick="event.preventDefault();
                                                                     document.getElementById('logout-form').submit();">
                                                                     <i class="fa fa-btn fa-sign-out"></i>
                                                                     Deconnexion
                                                                </a>
                                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                            {{ csrf_field() }}
                                                        </form>
										
							</li>
							
						</ul>
					</div>
				</div>
			</div>
        
            </div>
        </center>
    </div>
       
    </div>
</div>
@endguest
@endsection