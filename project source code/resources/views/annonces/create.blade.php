@extends('layouts.app1')
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
            @if(count($errors)>0)
                                    <ul>
                                        @foreach($errors->all() as $error)
                                            <li class="alert alert-danger">{{$error}}</li>
                                        @endforeach
                                    </ul>
                                @endif
            <div class="widget personal-info">
              @if(count($errors)>0)
                                    <ul>
                                        @foreach($errors->all() as $error)
                                            <li class="alert alert-danger">{{$error}}</li>
                                        @endforeach
                                    </ul>
                                @endif
                    <h2 class="widget-header user"><center> Choississez la categorie de votre annonce</center></h2>        
                    <button class="accordion"><h4><i class="fa fa-car icon-bg-6"></i>        Moyen roulant (Voitures, Motos, vélos..)</h4></button>
                    <div class="panel">
                                        <h2 class="widget-header user"><center>Ajouter une annonce de vente de moyen roulant</center></h2>

                                    {!! Form::open(['route' => 'annonces.store', 'method' => 'POST', 'files' => true, 'data-parsley-validate'=>'']) !!}

                                     <div class="form-group">
                                        {{ Form::label('category_id', 'Categories') }}
                                        {{ Form::select('souscategorie',$moyens, null, ['class' => 'form-control','placeholder'=>'Select Category']) }}
                                    </div>
                                    
                                    <div class="form-group">
                                        {{ Form::label('name', 'Titre') }}
                                        {{ Form::text('titreAnnonce', null, array('class' => 'form-control','required'=>'','minlength'=>'5','placeholder'=>'Que voulez-vous vendre?')) }}
                                    </div>

                                    <div class="form-group">
                                        {{ Form::label('description', 'Description') }}
                                        {{ Form::textarea('description', null, array('class' => 'form-control','required'=>'','placeholder'=>'Decrivez ce que vous voulez vendre ?','id'=>'froala-editor')) }}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('price', 'Prix') }}
                                        {{ Form::text('prix', null, array('class' => 'form-control','required'=>'','placeholder'=>'Prix ou vous pouvez aussi dire :<< contacter moi pour le prix >>')) }}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('location', 'Lieu') }}
                                        {{ Form::text('lieu', null, array('class' => 'form-control','required'=>'','placeholder'=>'Préciser le (s) ville(s) où on peut se procurer votre produit')) }}
                                    </div>

                                    <div class="form-group">
                                        {{ Form::label('condition', 'Etat') }}
                                        {{ Form::select('condition', [ 'New' => 'New', '9/10' => '9/10', '8/10' => '8/10','7/10' => '7/10','6/10' => '6/10'], null, ['class' => 'form-control']) }}
                                    </div>
                                   
                                    <div class="form-group choose-file">
                                        {{ Form::label('picture', 'Photo (Taille maxi 1Mo)') }}
                                        {{ Form::file('picture',array('class' => 'form-control-file d-inline')) }}
                                    </div>
                                        
                                    <div class="form-group">
                                        {{ Form::hidden('user_id',Auth::user()->id) }}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::hidden('booster','Non') }}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::hidden('categorie','Moyens de déplacements') }}
                                    </div>

                                    <center><div class="form-group">
                                     {{ Form::submit('Envoyer', array('class' => 'btn btn-transparent')) }}
                                    {!! Form::close() !!}
                                        </div></center>
                    </div>
                    <button class="accordion"><h4><i class="fa fa-mobile"></i>        Gadget deCommunication (Téléphone, Tablette, ....)</h4></button>
                    <div class="panel">
                                        <h2 class="widget-header user"><center>Ajouter une annonce </center></h2>

                                    {!! Form::open(['route' => 'annonces.store', 'method' => 'POST', 'files' => true, 'data-parsley-validate'=>'']) !!}

                                     <div class="form-group">
                                        {{ Form::label('category_id', 'Categories') }}
                                        {{ Form::select('souscategorie',$telephone, null, ['class' => 'form-control','placeholder'=>'Select Category']) }}
                                    </div>
                                    
                                    <div class="form-group">
                                        {{ Form::label('name', 'Titre') }}
                                        {{ Form::text('titreAnnonce', null, array('class' => 'form-control','required'=>'','minlength'=>'5','placeholder'=>'Que voulez-vous vendre?')) }}
                                    </div>

                                    <div class="form-group">
                                        {{ Form::label('description', 'Description') }}
                                        {{ Form::textarea('description', null, array('class' => 'form-control','required'=>'','placeholder'=>'Decrivez ce que vous voulez vendre ?','id'=>'froala-editor')) }}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('price', 'Prix') }}
                                        {{ Form::text('prix', null, array('class' => 'form-control','required'=>'','placeholder'=>'Prix ou vous pouvez aussi dire :<< contacter moi pour le prix >>')) }}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('location', 'Lieu') }}
                                        {{ Form::text('lieu', null, array('class' => 'form-control','required'=>'','placeholder'=>'Préciser le (s) ville(s) où on peut se procurer votre produit')) }}
                                    </div>

                                    <div class="form-group">
                                        {{ Form::label('condition', 'Etat') }}
                                        {{ Form::select('condition', [ 'New' => 'New', '9/10' => '9/10', '8/10' => '8/10','7/10' => '7/10','6/10' => '6/10'], null, ['class' => 'form-control']) }}
                                    </div>
                                   
                                    <div class="form-group choose-file">
                                        {{ Form::label('image', 'Photo ') }}
                                        {{ Form::file('picture',array('class' => 'form-control-file d-inline')) }}
                                    </div>
                                    
                                    <div class="form-group">
                                        {{ Form::hidden('user_id',Auth::user()->id) }}
                                    </div>
                                     <div class="form-group">
                                        {{ Form::hidden('booster','Non') }}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::hidden('categorie','Téléphones et Tablettes') }}
                                    </div>

                                    <center><div class="form-group">
                                     {{ Form::submit('Envoyer', array('class' => 'btn btn-transparent')) }}
                                    {!! Form::close() !!}
                                        </div></center>
                    </div>
                    <button class="accordion"><h4><i class="fa fa-laptop"></i>        Electronique (PC, USB, accessoires ordinateurs,TV,DVD...)</h4></button>
                    <div class="panel">
                                        <h2 class="widget-header user"><center>Ajouter une annonce </center></h2>

                                    {!! Form::open(['route' => 'annonces.store', 'method' => 'POST', 'files' => true, 'data-parsley-validate'=>'']) !!}

                                     <div class="form-group">
                                        {{ Form::label('category_id', 'Categories') }}
                                        {{ Form::select('souscategorie',$electronique, null, ['class' => 'form-control','placeholder'=>'Select Category']) }}
                                    </div>
                                    
                                    <div class="form-group">
                                        {{ Form::label('name', 'Titre') }}
                                        {{ Form::text('titreAnnonce', null, array('class' => 'form-control','required'=>'','minlength'=>'5','placeholder'=>'Que voulez-vous vendre?')) }}
                                    </div>

                                    <div class="form-group">
                                        {{ Form::label('description', 'Description') }}
                                        {{ Form::textarea('description', null, array('class' => 'form-control','required'=>'','placeholder'=>'Decrivez ce que vous voulez vendre ?','id'=>'froala-editor')) }}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('price', 'Prix') }}
                                        {{ Form::text('prix', null, array('class' => 'form-control','required'=>'','placeholder'=>'Prix ou vous pouvez aussi dire :<< contacter moi pour le prix >>')) }}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('location', 'Lieu') }}
                                        {{ Form::text('lieu', null, array('class' => 'form-control','required'=>'','placeholder'=>'Préciser le (s) ville(s) où on peut se procurer votre produit')) }}
                                    </div>

                                    <div class="form-group">
                                        {{ Form::label('condition', 'Etat') }}
                                        {{ Form::select('condition', [ 'New' => 'New', '9/10' => '9/10', '8/10' => '8/10','7/10' => '7/10','6/10' => '6/10'], null, ['class' => 'form-control']) }}
                                    </div>
                                   
                                    <div class="form-group choose-file">
                                        {{ Form::label('image', 'Photo ') }}
                                        {{ Form::file('picture',array('class' => 'form-control-file d-inline')) }}
                                    </div>
                                   
                                    <div class="form-group">
                                        {{ Form::hidden('user_id',Auth::user()->id) }}
                                    </div>
                                     <div class="form-group">
                                        {{ Form::hidden('booster','Non') }}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::hidden('categorie','Electroniques') }}
                                    </div>

                                    <center><div class="form-group">
                                     {{ Form::submit('Envoyer', array('class' => 'btn btn-transparent')) }}
                                    {!! Form::close() !!}
                                        </div></center>
                    </div>
                    <button class="accordion"><h4><i class="fa fa-shopping-bag"></i>        Design & Fashions (Sacs, Habits, Pagnes, Bassins, Chaussures, Montre ...)</h4></button>
                    <div class="panel">
                                        <h2 class="widget-header user"><center>Ajouter une annonce </center></h2>

                                    {!! Form::open(['route' => 'annonces.store', 'method' => 'POST', 'files' => true, 'data-parsley-validate'=>'']) !!}

                                     <div class="form-group">
                                        {{ Form::label('category_id', 'Categories') }}
                                        {{ Form::select('souscategorie',$fashion, null, ['class' => 'form-control','placeholder'=>'Select Category']) }}
                                    </div>
                                    
                                    <div class="form-group">
                                        {{ Form::label('name', 'Titre') }}
                                        {{ Form::text('titreAnnonce', null, array('class' => 'form-control','required'=>'','minlength'=>'5','placeholder'=>'Que voulez-vous vendre?')) }}
                                    </div>

                                    <div class="form-group">
                                        {{ Form::label('description', 'Description') }}
                                        {{ Form::textarea('description', null, array('class' => 'form-control','required'=>'','placeholder'=>'Decrivez ce que vous voulez vendre ?','id'=>'froala-editor')) }}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('price', 'Prix') }}
                                        {{ Form::text('prix', null, array('class' => 'form-control','required'=>'','placeholder'=>'Prix ou vous pouvez aussi dire :<< contacter moi pour le prix >>')) }}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('location', 'Lieu') }}
                                        {{ Form::text('lieu', null, array('class' => 'form-control','required'=>'','placeholder'=>'Préciser le (s) ville(s) où on peut se procurer votre produit')) }}
                                    </div>

                                    <div class="form-group">
                                        {{ Form::label('condition', 'Etat') }}
                                        {{ Form::select('condition', [ 'New' => 'New', '9/10' => '9/10', '8/10' => '8/10','7/10' => '7/10','6/10' => '6/10'], null, ['class' => 'form-control']) }}
                                    </div>
                                   
                                    <div class="form-group choose-file">
                                        {{ Form::label('image', 'Photo 1') }}
                                        {{ Form::file('picture',array('class' => 'form-control-file d-inline')) }}
                                    </div>
                                    
                                    <div class="form-group">
                                        {{ Form::hidden('user_id',Auth::user()->id) }}
                                    </div>
                                     <div class="form-group">
                                        {{ Form::hidden('booster','Non') }}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::hidden('categorie','Fashions') }}
                                    </div>
                                    <center><div class="form-group">
                                     {{ Form::submit('Envoyer', array('class' => 'btn btn-transparent')) }}
                                    {!! Form::close() !!}
                                        </div></center>
                    </div>
                    <button class="accordion"><h4><i class="fa fa-paw icon-bg-7"></i>         Animaux (Produit animal, Oeuf, Chat, Chien, Poissons, Accessoires d'élévages...)</h4></button>
                    <div class="panel">
                                        <h2 class="widget-header user"><center>Ajouter une annonce </center></h2>

                                    {!! Form::open(['route' => 'annonces.store', 'method' => 'POST', 'files' => true, 'data-parsley-validate'=>'']) !!}

                                     <div class="form-group">
                                        {{ Form::label('category_id', 'Categories') }}
                                        {{ Form::select('souscategorie',$animaux, null, ['class' => 'form-control','placeholder'=>'Select Category']) }}
                                    </div>
                                    
                                    <div class="form-group">
                                        {{ Form::label('name', 'Titre') }}
                                        {{ Form::text('titreAnnonce', null, array('class' => 'form-control','required'=>'','minlength'=>'5','placeholder'=>'Que voulez-vous vendre?')) }}
                                    </div>

                                    <div class="form-group">
                                        {{ Form::label('description', 'Description') }}
                                        {{ Form::textarea('description', null, array('class' => 'form-control','required'=>'','placeholder'=>'Decrivez ce que vous voulez vendre ?','id'=>'froala-editor')) }}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('price', 'Prix') }}
                                        {{ Form::text('prix', null, array('class' => 'form-control','required'=>'','placeholder'=>'Prix ou vous pouvez aussi dire :<< contacter moi pour le prix >>')) }}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('location', 'Lieu') }}
                                        {{ Form::text('lieu', null, array('class' => 'form-control','required'=>'','placeholder'=>'Préciser le (s) ville(s) où on peut se procurer votre produit')) }}
                                    </div>

                                    <div class="form-group">
                                        {{ Form::label('condition', 'Etat') }}
                                        {{ Form::select('condition', [ 'New' => 'New', '9/10' => '9/10', '8/10' => '8/10','7/10' => '7/10','6/10' => '6/10'], null, ['class' => 'form-control']) }}
                                    </div>
                                   
                                    <div class="form-group choose-file">
                                        {{ Form::label('image', 'Photo 1') }}
                                        {{ Form::file('picture',array('class' => 'form-control-file d-inline')) }}
                                    </div>
                                   
                                   
                                    <div class="form-group">
                                        {{ Form::hidden('user_id',Auth::user()->id) }}
                                    </div>
                                     <div class="form-group">
                                        {{ Form::hidden('booster','Non') }}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::hidden('categorie','Animaux') }}
                                    </div>
                                    <center><div class="form-group">
                                     {{ Form::submit('Envoyer', array('class' => 'btn btn-transparent')) }}
                                    {!! Form::close() !!}
                                        </div></center>
                    </div> 
                    <button class="accordion"><h4><i class="fa fa-laptop"></i>        Loisirs-Art-Sport (Livres, Jeux, Instrument de Musique...)</h4></button>
                    <div class="panel">
                                        <h2 class="widget-header user"><center>Ajouter une annonce </center></h2>

                                    {!! Form::open(['route' => 'annonces.store', 'method' => 'POST', 'files' => true, 'data-parsley-validate'=>'']) !!}

                                     <div class="form-group">
                                        {{ Form::label('category_id', 'Categories') }}
                                        {{ Form::select('souscategorie',$loisir, null, ['class' => 'form-control','placeholder'=>'Select Category']) }}
                                    </div>
                                    
                                    <div class="form-group">
                                        {{ Form::label('name', 'Titre') }}
                                        {{ Form::text('titreAnnonce', null, array('class' => 'form-control','required'=>'','minlength'=>'5','placeholder'=>'Que voulez-vous vendre?')) }}
                                    </div>

                                    <div class="form-group">
                                        {{ Form::label('description', 'Description') }}
                                        {{ Form::textarea('description', null, array('class' => 'form-control','required'=>'','placeholder'=>'Decrivez ce que vous voulez vendre ?','id'=>'froala-editor')) }}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('price', 'Prix') }}
                                        {{ Form::text('prix', null, array('class' => 'form-control','required'=>'','placeholder'=>'Prix ou vous pouvez aussi dire :<< contacter moi pour le prix >>')) }}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('location', 'Lieu') }}
                                        {{ Form::text('lieu', null, array('class' => 'form-control','required'=>'','placeholder'=>'Préciser le (s) ville(s) où on peut se procurer votre produit')) }}
                                    </div>

                                    <div class="form-group">
                                        {{ Form::label('condition', 'Etat') }}
                                        {{ Form::select('condition', [ 'New' => 'New', '9/10' => '9/10', '8/10' => '8/10','7/10' => '7/10','6/10' => '6/10'], null, ['class' => 'form-control']) }}
                                    </div>
                                   
                                    <div class="form-group choose-file">
                                        {{ Form::label('image', 'Photo 1') }}
                                        {{ Form::file('picture',array('class' => 'form-control-file d-inline')) }}
                                    </div>
                                   
                                    <div class="form-group">
                                        {{ Form::hidden('user_id',Auth::user()->id) }}
                                    </div>
                                     <div class="form-group">
                                        {{ Form::hidden('booster','Non') }}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::hidden('categorie','Loisirs-Arts-Sports') }}
                                    </div>
                                    <center><div class="form-group">
                                     {{ Form::submit('Envoyer', array('class' => 'btn btn-transparent')) }}
                                    {!! Form::close() !!}
                                        </div></center>
                    </div>
                    <button class="accordion"><h4><i class="fa fa-home icon-bg-3"></i>        Services Immobiliers (Maison à louer, Maison à vendre ...)</h4></button>
                    <div class="panel">
                                        <h2 class="widget-header user"><center>Ajouter une annonce</center></h2>

                                    {!! Form::open(['route' => 'annonces.store', 'method' => 'POST', 'files' => true, 'data-parsley-validate'=>'']) !!}

                                     <div class="form-group">
                                        {{ Form::label('category_id', 'Categories') }}
                                        {{ Form::select('souscategorie',$immobilier, null, ['class' => 'form-control','placeholder'=>'Select Category']) }}
                                    </div>
                                    
                                    <div class="form-group">
                                        {{ Form::label('name', 'Titre') }}
                                        {{ Form::text('titreAnnonce', null, array('class' => 'form-control','required'=>'','minlength'=>'5','placeholder'=>'Que voulez-vous vendre?')) }}
                                    </div>

                                    <div class="form-group">
                                        {{ Form::label('description', 'Description') }}
                                        {{ Form::textarea('description', null, array('class' => 'form-control','required'=>'','placeholder'=>'Decrivez ce que vous voulez vendre ?','id'=>'froala-editor')) }}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('price', 'Prix') }}
                                        {{ Form::text('prix', null, array('class' => 'form-control','required'=>'','placeholder'=>'Prix ou vous pouvez aussi dire :<< contacter moi pour le prix >>')) }}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('location', 'Lieu') }}
                                        {{ Form::text('lieu', null, array('class' => 'form-control','required'=>'','placeholder'=>'Ville, Quartier')) }}
                                    </div>
                                    
                                    <div class="form-group">
                                        {{ Form::hidden('condition','---') }}
                                    </div>
                                   
                                    <div class="form-group choose-file">
                                        {{ Form::label('image', 'Photo 1') }}
                                        {{ Form::file('picture',array('class' => 'form-control-file d-inline')) }}
                                    </div>
                                    
                                   
                                    <div class="form-group">
                                        {{ Form::hidden('user_id',Auth::user()->id) }}
                                    </div>
                                     <div class="form-group">
                                        {{ Form::hidden('booster','Non') }}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::hidden('categorie','Services Immobiliers') }}
                                    </div>
                                    <center><div class="form-group">
                                     {{ Form::submit('Envoyer', array('class' => 'btn btn-transparent')) }}
                                    {!! Form::close() !!}
                                        </div></center>
                    </div>
                    <button class="accordion"><h4><i class="fa fa-apple icon-bg-2"></i>        Agriculture (Outils agricole, Semance, Boissons...)</h4></button>
                    <div class="panel">
                                        <h2 class="widget-header user"><center>Ajouter une annonce </center></h2>

                                    {!! Form::open(['route' => 'annonces.store', 'method' => 'POST', 'files' => true, 'data-parsley-validate'=>'']) !!}

                                     <div class="form-group">
                                        {{ Form::label('category_id', 'Categories') }}
                                        {{ Form::select('souscategorie',$agriculture, null, ['class' => 'form-control','placeholder'=>'Select Category']) }}
                                    </div>
                                    
                                    <div class="form-group">
                                        {{ Form::label('name', 'Titre') }}
                                        {{ Form::text('titreAnnonce', null, array('class' => 'form-control','required'=>'','minlength'=>'5','placeholder'=>'Que voulez-vous vendre?')) }}
                                    </div>

                                    <div class="form-group">
                                        {{ Form::label('description', 'Description') }}
                                        {{ Form::textarea('description', null, array('class' => 'form-control','required'=>'','placeholder'=>'Decrivez ce que vous voulez vendre ?','id'=>'froala-editor')) }}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('price', 'Prix') }}
                                        {{ Form::text('prix', null, array('class' => 'form-control','required'=>'','placeholder'=>'Prix ou vous pouvez aussi dire :<< contacter moi pour le prix >>')) }}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('location', 'Lieu') }}
                                        {{ Form::text('lieu', null, array('class' => 'form-control','required'=>'','placeholder'=>'Préciser le (s) ville(s) où on peut se procurer votre produit')) }}
                                    </div>

                                    <div class="form-group">
                                        {{ Form::label('condition', 'Etat') }}
                                        {{ Form::select('condition', [ 'New' => 'New', '9/10' => '9/10', '8/10' => '8/10','7/10' => '7/10','6/10' => '6/10'], null, ['class' => 'form-control']) }}
                                    </div>
                                   
                                    <div class="form-group choose-file">
                                        {{ Form::label('image', 'Photo 1') }}
                                        {{ Form::file('picture',array('class' => 'form-control-file d-inline')) }}
                                    </div>
                                    
                                    <div class="form-group">
                                        {{ Form::hidden('user_id',Auth::user()->id) }}
                                    </div>
                                     <div class="form-group">
                                        {{ Form::hidden('booster','Non') }}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::hidden('categorie','Agriculture') }}
                                    </div>
                                    <center><div class="form-group">
                                     {{ Form::submit('Envoyer', array('class' => 'btn btn-transparent')) }}
                                    {!! Form::close() !!}
                                        </div></center>
                    </div>
                    <button class="accordion"><h4><i class="fa fa-shopping-basket icon-bg-4"></i>        Produits cosmétiques et Pharmaceutiques (Pommade, Médicament tratidionnel...)</h4></button>
                    <div class="panel">
                                        <h2 class="widget-header user"><center>Ajouter une annonce </center></h2>

                                    {!! Form::open(['route' => 'annonces.store', 'method' => 'POST', 'files' => true, 'data-parsley-validate'=>'']) !!}

                                     <div class="form-group">
                                        {{ Form::label('category_id', 'Categories') }}
                                        {{ Form::select('souscategorie',$beaute, null, ['class' => 'form-control','placeholder'=>'Select Category']) }}
                                    </div>
                                    
                                    <div class="form-group">
                                        {{ Form::label('name', 'Titre') }}
                                        {{ Form::text('titreAnnonce', null, array('class' => 'form-control','required'=>'','minlength'=>'5','placeholder'=>'Que voulez-vous vendre?')) }}
                                    </div>

                                    <div class="form-group">
                                        {{ Form::label('description', 'Description') }}
                                        {{ Form::textarea('description', null, array('class' => 'form-control','required'=>'','placeholder'=>'Decrivez ce que vous voulez vendre ?','id'=>'froala-editor')) }}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('price', 'Prix') }}
                                        {{ Form::text('prix', null, array('class' => 'form-control','required'=>'','placeholder'=>'Prix ou vous pouvez aussi dire :<< contacter moi pour le prix >>')) }}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('location', 'Lieu') }}
                                        {{ Form::text('lieu', null, array('class' => 'form-control','required'=>'','placeholder'=>'Préciser le (s) ville(s) où on peut se procurer votre produit')) }}
                                    </div>

                                    <div class="form-group">
                                        {{ Form::label('condition', 'Etat') }}
                                        {{ Form::select('condition', [ 'New' => 'New', '9/10' => '9/10', '8/10' => '8/10','7/10' => '7/10','6/10' => '6/10'], null, ['class' => 'form-control']) }}
                                    </div>
                                   
                                    <div class="form-group choose-file">
                                        {{ Form::label('image', 'Photo ') }}
                                        {{ Form::file('picture',array('class' => 'form-control-file d-inline')) }}
                                    </div>
                                    
                                   
                                    <div class="form-group">
                                        {{ Form::hidden('user_id',Auth::user()->id) }}
                                    </div>
                                     <div class="form-group">
                                        {{ Form::hidden('booster','Non') }}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::hidden('categorie','Produits de Beauté et de santé') }}
                                    </div>
                                    <center><div class="form-group">
                                     {{ Form::submit('Envoyer', array('class' => 'btn btn-transparent')) }}
                                    {!! Form::close() !!}
                                        </div></center>
                    </div>
                    <button class="accordion"><h4><i class="fa fa-gamepad"></i>        Article Bébé-Enfant </h4></button>
                    <div class="panel">
                                        <h2 class="widget-header user"><center>Ajouter une annonce </center></h2>

                                    {!! Form::open(['route' => 'annonces.store', 'method' => 'POST', 'files' => true, 'data-parsley-validate'=>'']) !!}

                                     <div class="form-group">
                                        {{ Form::label('category_id', 'Categories') }}
                                        {{ Form::select('souscategorie',$bebe, null, ['class' => 'form-control','placeholder'=>'Select Category']) }}
                                    </div>
                                    
                                    <div class="form-group">
                                        {{ Form::label('name', 'Titre') }}
                                        {{ Form::text('titreAnnonce', null, array('class' => 'form-control','required'=>'','minlength'=>'5','placeholder'=>'Que voulez-vous vendre?')) }}
                                    </div>

                                    <div class="form-group">
                                        {{ Form::label('description', 'Description') }}
                                        {{ Form::textarea('description', null, array('class' => 'form-control','required'=>'','placeholder'=>'Decrivez ce que vous voulez vendre ?','id'=>'froala-editor')) }}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('price', 'Prix') }}
                                        {{ Form::text('prix', null, array('class' => 'form-control','required'=>'','placeholder'=>'Prix ou vous pouvez aussi dire :<< contacter moi pour le prix >>')) }}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('location', 'Lieu') }}
                                        {{ Form::text('lieu', null, array('class' => 'form-control','required'=>'','placeholder'=>'Préciser le (s) ville(s) où on peut se procurer votre produit')) }}
                                    </div>

                                    <div class="form-group">
                                        {{ Form::label('condition', 'Etat') }}
                                        {{ Form::select('condition', [ 'New' => 'New', '9/10' => '9/10', '8/10' => '8/10','7/10' => '7/10','6/10' => '6/10'], null, ['class' => 'form-control']) }}
                                    </div>
                                   
                                    <div class="form-group choose-file">
                                        {{ Form::label('image', 'Photo 1') }}
                                        {{ Form::file('picture',array('class' => 'form-control-file d-inline')) }}
                                    </div>
                                    
                                   
                                    <div class="form-group">
                                        {{ Form::hidden('user_id',Auth::user()->id) }}
                                    </div>
                                     <div class="form-group">
                                        {{ Form::hidden('booster','Non') }}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::hidden('categorie','Articles Bébés-Enfants') }}
                                    </div>
                                    <center><div class="form-group">
                                     {{ Form::submit('Envoyer', array('class' => 'btn btn-transparent')) }}
                                    {!! Form::close() !!}
                                        </div></center>
                    </div>
                    <button class="accordion"><h4><i class="fa fa-server"></i>         Prestations de Service (Transport, Education, Menusier, Plombiers, Maçon...)</h4></button>
                    <div class="panel">
                                        <h2 class="widget-header user"><center>Ajouter une annonce</center></h2>

                                    {!! Form::open(['route' => 'annonces.store', 'method' => 'POST', 'files' => true, 'data-parsley-validate'=>'']) !!}

                                     <div class="form-group">
                                        {{ Form::label('category_id', 'Categories') }}
                                        {{ Form::select('souscategorie',$prestation, null, ['class' => 'form-control','placeholder'=>'Select Category']) }}
                                    </div>
                                    
                                    <div class="form-group">
                                        {{ Form::label('name', 'Titre') }}
                                        {{ Form::text('titreAnnonce', null, array('class' => 'form-control','required'=>'','minlength'=>'5','placeholder'=>'Quelle presatation offrez-vous?')) }}
                                    </div>

                                    <div class="form-group">
                                        {{ Form::label('description', 'Description') }}
                                        {{ Form::textarea('description', null, array('class' => 'form-control','required'=>'','placeholder'=>'Decrivez votre prestation ?','id'=>'froala-editor')) }}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('price', 'Contact') }}
                                        {{ Form::text('prix', null, array('class' => 'form-control','required'=>'','placeholder'=>'Vos contacts')) }}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('location', 'Lieu') }}
                                        {{ Form::text('lieu', null, array('class' => 'form-control','required'=>'','placeholder'=>'Préciser le (s) ville(s) où on peut se procurer votre produit')) }}
                                    </div>

                                    
                                   
                                    <div class="form-group choose-file">
                                        {{ Form::label('image', 'Photo 1') }}
                                        {{ Form::file('picture',array('class' => 'form-control-file d-inline')) }}
                                    </div>
                                    
                                   
                                    <div class="form-group">
                                        {{ Form::hidden('user_id',Auth::user()->id) }}
                                    </div>
                                     <div class="form-group">
                                        {{ Form::hidden('booster','Non') }}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::hidden('condition','New') }}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::hidden('categorie','Prestations de Service') }}
                                    </div>
                                    <center><div class="form-group">
                                     {{ Form::submit('Envoyer', array('class' => 'btn btn-transparent')) }}
                                    {!! Form::close() !!}
                                        </div></center>
                    </div>
                    <button class="accordion"><h4><i class="fa fa-comment"></i>        Evènements (Formations, Séminaires, Conférences...)</h4></button>
                    <div class="panel">
                                        <h2 class="widget-header user"><center>Ajouter une annonce</center></h2>

                                    {!! Form::open(['route' => 'annonces.store', 'method' => 'POST', 'files' => true, 'data-parsley-validate'=>'']) !!}

                                     <div class="form-group">
                                        {{ Form::label('category_id', 'Categories') }}
                                        {{ Form::select('souscategorie',$evenement, null, ['class' => 'form-control','placeholder'=>'Select Category']) }}
                                    </div>
                                    
                                    <div class="form-group">
                                        {{ Form::label('name', 'Titre') }}
                                        {{ Form::text('titreAnnonce', null, array('class' => 'form-control','required'=>'','minlength'=>'5','placeholder'=>'Que voulez-vous organiser?')) }}
                                    </div>

                                    <div class="form-group">
                                        {{ Form::label('description', 'Description') }}
                                        {{ Form::textarea('description', null, array('class' => 'form-control','required'=>'','placeholder'=>'Decrivez ce que vous voulez organiser ?','id'=>'froala-editor')) }}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('price', 'Prix') }}
                                        {{ Form::text('prix', null, array('class' => 'form-control','required'=>'','placeholder'=>'Prix ou vous pouvez aussi dire :<< contacter moi pour le prix >>')) }}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('location', 'Lieu') }}
                                        {{ Form::text('lieu', null, array('class' => 'form-control','required'=>'','placeholder'=>'Préciser le (s) ville(s) où on peut se procurer votre produit')) }}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::hidden('condition','New') }}
                                    </div>
                                    
                                   
                                    <div class="form-group choose-file">
                                        {{ Form::label('image', 'Photo 1') }}
                                        {{ Form::file('picture',array('class' => 'form-control-file d-inline')) }}
                                    </div>
                                    
                                   
                                    <div class="form-group">
                                        {{ Form::hidden('user_id',Auth::user()->id) }}
                                    </div>
                                     <div class="form-group">
                                        {{ Form::hidden('booster','Non') }}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::hidden('categorie','Evènements') }}
                                    </div>
                                    <center><div class="form-group">
                                     {{ Form::submit('Envoyer', array('class' => 'btn btn-transparent')) }}
                                    {!! Form::close() !!}
                                        </div></center>
                    </div>
                    <button class="accordion"><h4><i class="fa fa-briefcase icon-bg-5"></i> Mobiliers et Equipement de Maison et de bureau </h4></button>
                    <div class="panel">
                                        <h2 class="widget-header user"><center>Ajouter une annonce de vente de moyen roulant</center></h2>

                                    {!! Form::open(['route' => 'annonces.store', 'method' => 'POST', 'files' => true, 'data-parsley-validate'=>'']) !!}

                                     <div class="form-group">
                                        {{ Form::label('category_id', 'Categories') }}
                                        {{ Form::select('souscategorie',$mobilier, null, ['class' => 'form-control','placeholder'=>'Select Category']) }}
                                    </div>
                                    
                                    <div class="form-group">
                                        {{ Form::label('name', 'Titre') }}
                                        {{ Form::text('titreAnnonce', null, array('class' => 'form-control','required'=>'','minlength'=>'5','placeholder'=>'Que voulez-vous vendre?')) }}
                                    </div>

                                    <div class="form-group">
                                        {{ Form::label('description', 'Description') }}
                                        {{ Form::textarea('description', null, array('class' => 'form-control','required'=>'','placeholder'=>'Decrivez ce que vous voulez vendre ?','id'=>'froala-editor')) }}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('price', 'Prix') }}
                                        {{ Form::text('prix', null, array('class' => 'form-control','required'=>'','placeholder'=>'Prix ou vous pouvez aussi dire :<< contacter moi pour le prix >>')) }}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('location', 'Lieu') }}
                                        {{ Form::text('lieu', null, array('class' => 'form-control','required'=>'','placeholder'=>'Préciser le (s) ville(s) où on peut se procurer votre produit')) }}
                                    </div>

                                    <div class="form-group">
                                        {{ Form::label('condition', 'Etat') }}
                                        {{ Form::select('condition', [ 'New' => 'New', '9/10' => '9/10', '8/10' => '8/10','7/10' => '7/10','6/10' => '6/10'], null, ['class' => 'form-control']) }}
                                    </div>
                                   
                                    <div class="form-group choose-file">
                                        {{ Form::label('image', 'Photo 1') }}
                                        {{ Form::file('picture',array('class' => 'form-control-file d-inline')) }}
                                    </div>
                                   
                                   
                                    <div class="form-group">
                                        {{ Form::hidden('user_id',Auth::user()->id) }}
                                    </div>
                                     <div class="form-group">
                                        {{ Form::hidden('booster','Non') }}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::hidden('categorie','Mobiliers et Equipements de maison et bureau') }}
                                    </div>
                                    <center><div class="form-group">
                                     {{ Form::submit('Envoyer', array('class' => 'btn btn-transparent')) }}
                                    {!! Form::close() !!}
                                        </div></center>
                                    
                                    
                    </div>
                    <button class="accordion"><h4><i class="fa fa-briefcase icon-bg-5"></i> Hotêlerie et Restauration </h4></button>
                    <div class="panel">
                                        <h2 class="widget-header user"><center>Ajouter une annonce.</center></h2>

                                    {!! Form::open(['route' => 'annonces.store', 'method' => 'POST', 'files' => true, 'data-parsley-validate'=>'']) !!}

                                     <div class="form-group">
                                        {{ Form::label('category_id', 'Categories') }}
                                        {{ Form::select('souscategorie',$restaurant, null, ['class' => 'form-control','placeholder'=>'Select Category']) }}
                                    </div>
                                    
                                    <div class="form-group">
                                        {{ Form::label('name', 'Titre') }}
                                        {{ Form::text('titreAnnonce', null, array('class' => 'form-control','required'=>'','minlength'=>'5','placeholder'=>'Que voulez-vous vendre?')) }}
                                    </div>

                                    <div class="form-group">
                                        {{ Form::label('description', 'Description') }}
                                        {{ Form::textarea('description', null, array('class' => 'form-control','required'=>'','placeholder'=>'Decrivez ce que vous voulez vendre ?','id'=>'froala-editor')) }}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('price', 'Prix') }}
                                        {{ Form::text('prix', null, array('class' => 'form-control','required'=>'','placeholder'=>'Prix ou vous pouvez aussi dire :<< contacter moi pour le prix >>')) }}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('location', 'Lieu') }}
                                        {{ Form::text('lieu', null, array('class' => 'form-control','required'=>'','placeholder'=>'Préciser le (s) ville(s) où on peut se procurer votre produit')) }}
                                    </div>
                                   
                                    <div class="form-group choose-file">
                                        {{ Form::label('image', 'Photo 1') }}
                                        {{ Form::file('picture',array('class' => 'form-control-file d-inline')) }}
                                    </div>
                                   
                                   
                                    <div class="form-group">
                                        {{ Form::hidden('user_id',Auth::user()->id) }}
                                    </div>
                                     <div class="form-group">
                                        {{ Form::hidden('booster','Non') }}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::hidden('categorie','Hôtelerie-Restauration') }}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::hidden('condition','New') }}
                                    </div>
                                    <center><div class="form-group">
                                     {{ Form::submit('Envoyer', array('class' => 'btn btn-transparent')) }}
                                    {!! Form::close() !!}
                                        </div></center>
                                    
                                    
                    </div>
                    <button class="accordion"><h4><i class="fa fa-briefcase icon-bg-5"></i> Offre d'emploie </h4></button>
                    <div class="panel">
                                        <h2 class="widget-header user"><center>Ajouter un offre d'emploie</center></h2>

                                    {!! Form::open(['route' => 'annonces.store', 'method' => 'POST', 'files' => true, 'data-parsley-validate'=>'']) !!}

                                     <div class="form-group">
                                        {{ Form::label('category_id', 'Categories') }}
                                        {{ Form::select('souscategorie',$emplois, null, ['class' => 'form-control','placeholder'=>'Select Category']) }}
                                    </div>
                                    
                                    <div class="form-group">
                                        {{ Form::label('name', 'Titre') }}
                                        {{ Form::text('titreAnnonce', null, array('class' => 'form-control','required'=>'','minlength'=>'5','placeholder'=>'Titre emploie')) }}
                                    </div>

                                    <div class="form-group">
                                        {{ Form::label('description', 'Description') }}
                                        {{ Form::textarea('description', null, array('class' => 'form-control','required'=>'','placeholder'=>'Decription emploi','id'=>'froala-editor')) }}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('price', 'Date de clotûre') }}
                                        {{ Form::text('prix', null, array('class' => 'form-control','required'=>'','placeholder'=>'Date de clôture')) }}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('location', 'Lieu') }}
                                        {{ Form::text('lieu', null, array('class' => 'form-control','required'=>'','placeholder'=>'Préciser le lieu')) }}
                                    </div>

                                    <div class="form-group">
                                        {{ Form::label('condition', 'Condition') }}
                                        {{ Form::select('condition', [ 'Gratuit' => 'Gratuit', 'Payant' => 'Payant'], null, ['class' => 'form-control']) }}
                                    </div>
                                   
                                    <div class="form-group choose-file">
                                        {{ Form::label('image', 'Photo 1') }}
                                        {{ Form::file('picture',array('class' => 'form-control-file d-inline')) }}
                                    </div>
                                   
                                   
                                    <div class="form-group">
                                        {{ Form::hidden('user_id',Auth::user()->id) }}
                                    </div>
                                     <div class="form-group">
                                        {{ Form::hidden('booster','Non') }}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::hidden('categorie','Emplois') }}
                                    </div>
                                    <center><div class="form-group">
                                     {{ Form::submit('Envoyer', array('class' => 'btn btn-transparent')) }}
                                    {!! Form::close() !!}
                                        </div></center>
                    </div>
                    <button class="accordion"><h4><i class="fa fa-briefcase icon-bg-5"></i> Recherche d'emploie </h4></button>
                    <div class="panel">
                                        <h2 class="widget-header user"><center>Ajouter une recherche d'emploie</center></h2>

                                    {!! Form::open(['route' => 'annonces.store', 'method' => 'POST', 'files' => true, 'data-parsley-validate'=>'']) !!}

                                     <div class="form-group">
                                        {{ Form::label('category_id', 'Categories') }}
                                        {{ Form::select('souscategorie',$rechercheEmploi, null, ['class' => 'form-control','placeholder'=>'Select Category']) }}
                                    </div>
                                    
                                    <div class="form-group">
                                        {{ Form::label('name', 'Qualification') }}
                                        {{ Form::text('titreAnnonce', null, array('class' => 'form-control','required'=>'','minlength'=>'5','placeholder'=>'Votre qualification')) }}
                                    </div>

                                    <div class="form-group">
                                        {{ Form::label('description', '(Brèf CV) Nom et prénom, Competence et experience') }}
                                        {{ Form::textarea('description', null, array('class' => 'form-control','required'=>'','placeholder'=>'(Brèf CV) Nom et prénom, Competence et experience','id'=>'froala-editor')) }}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('price', 'Contact') }}
                                        {{ Form::text('prix', null, array('class' => 'form-control','required'=>'','placeholder'=>'Vos contacts')) }}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('location', 'Lieu de résidence') }}
                                        {{ Form::text('lieu', null, array('class' => 'form-control','required'=>'','placeholder'=>'Préciser le (s) ville(s) où on peut se procurer votre produit')) }}
                                    </div>

                                    <div class="form-group">
                                        {{ Form::label('condition', 'Disponibilité') }}
                                        {{ Form::select('condition', [ 'Disponible' => 'Disponible', 'Non disponible' => 'Non disponible'], null, ['class' => 'form-control']) }}
                                    </div>
                                   
                                    <div class="form-group choose-file">
                                        {{ Form::label('image', 'Votre photo') }}
                                        {{ Form::file('picture',array('class' => 'form-control-file d-inline')) }}
                                    </div>
                                   
                                   
                                    <div class="form-group">
                                        {{ Form::hidden('user_id',Auth::user()->id) }}
                                    </div>
                                     <div class="form-group">
                                        {{ Form::hidden('booster','Non') }}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::hidden('categorie','Recherche Emplois (CV)') }}
                                    </div>
                                    <center><div class="form-group">
                                     {{ Form::submit('Envoyer', array('class' => 'btn btn-transparent')) }}
                                    {!! Form::close() !!}
                                        </div></center>
                                    
                                    
                    </div>
            </div>
        </div>
		<div class="col-md-10 offset-md-1 col-lg-4 offset-lg-0">
				@include('include/sidebarMaster')
			</div>
            </div>
        </center>
    </div>
       
    </div>
</div>
@endguest
@endsection