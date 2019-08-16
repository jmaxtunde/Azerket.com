@extends('layouts.master2')
@section('content')
@auth:sindam
    <div style="background-color:#e9ebee;">
<div class="container">
    <div class="row">
	
        <div class="col-md-12 col-md-offset-2">
            <div class="card mb-4 box-shadow">
			<center>
                <div class="card-header"><h4 class="my-0 font-weight-normal">Connexion à votre compte</h4></div>
				
                <div class="card-body" style="align:center">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('sindam.login.submit') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

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
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
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

                                    {!! Form::open(['route' => ['sindampost.update',$annonces->id], 'method' => 'PATCH', 'files' => true, 'data-parsley-validate'=>'']) !!}
										
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
                                        {{ Form::label('price', 'Prix') }}
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
                                        {{ Form::hidden('statut','Active') }}
                                    </div>

                                    <center><div class="form-group">
                                     {{ Form::submit('Modifier', array('class' => 'btn btn-transparent')) }}
                                    {!! Form::close() !!}
                                        </div></center>
                    </div>
                    
                    
            </div>
        </div>
<div class="col-md-10 offset-md-1 col-lg-4 offset-lg-0">
             @include('include/sidebarAdmin')
			</div>		
            </div>
        </center>
    </div>
       
    </div>
</div>
@endguest
@endsection