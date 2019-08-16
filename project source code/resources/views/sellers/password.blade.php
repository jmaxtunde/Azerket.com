@extends('layouts.master')

@section('content')
<div style="background-color:#e9ebee;">
<div class="container" style="background-color: white;">
		<div class="row">
			
			<div class="col-md-10 offset-md-1 col-lg-8 offset-lg-0">
				<!-- Edit Personal Info -->
                                @if(count($errors)>0)
                                    <ul>
                                        @foreach($errors->all() as $error)
                                        <li class="alert alert-danger">{{$error}}</li>
                                        @endforeach
                                    </ul>
                                @endif
				<div class="widget personal-info">
                                    @if(Session::has('error'))
                                    <center>{{Session::get('error')}}</center>
                                    @endif
                                    
                                    <center><h4>Modifier votre mot de Passe</h4></center>
                                            {!! Form::model($user,['route' => ['updatepassword'], 'method' => 'POST', 'files' => true]) !!}
                                                
                                                 <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                                    <label for="password" class="col-md-4 control-label">Ancien</label>

                                                    <div class="col-md-">
                                                        <input id="password" type="password" class="form-control" name="old" required>

                                                        @if ($errors->has('password'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('password') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            
                                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                                    <label for="password" class="col-md-4 control-label">Nouveau</label>

                                                    <div class="col-md-">
                                                        <input id="password" type="password" class="form-control" name="password" required>

                                                        @if ($errors->has('password'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('password') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                                    <label for="password-confirm" class="col-md-4 control-label">Confirmer</label>
                                                    <div class="col-md-">
                                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

                                                        @if ($errors->has('password_confirmation'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                                
                                            <center> {{ Form::submit('Modifier', array('class' => 'btn btn-transparent')) }}</center>
                                                {!! Form::close() !!}
                                        
				</div>
            </div>
			<div class="col-md-10 offset-md-1 col-lg-4 offset-lg-0">
				<div class="sidebar">
					<!-- User Widget -->
					<div class="widget user-dashboard-profile">
						<!-- User Image -->
						<div class="profile-thumb">
							<img src="images/user/{{$user->profilePicture}}" alt="Photo de Profile" >
						</div>
						<!-- User Name -->
						<h5 class="text-center">{{$user->name}}</h5>
						<p>Enrégistré le {{$user->created_at}}</p>
                                                <a href="{{ url('/sellers.edit') }}" class="btn btn-main-sm">Modifier profile</a>
						
					</div>
					<!-- Dashboard Links -->
					<div class="widget user-dashboard-menu">
						<ul>
							<li>
								<a href="{{route('home')}}"><i class="fa fa-user"></i> Mes annonces</a>
                                                        </li>
                                                        <li>
								<a href="{{ url('/annonces/create') }}"> <i class="fa fa-plus-circle"></i> Ajouter une annonce </a>
							</li>
                                                        <li>
								<a href="{{ url('premium') }}"> <i class="fa fa-eye"></i> Service Premium </a>
							</li>
							<li>
								<a href="{{ url('/besoins') }}"><i class="fa fa-bookmark-o"></i> Les besoins des clients <span>{{$besoins->count()}}</span></a>
							</li>
							<li>
								<a href="{{route('message.show',['id' => Auth::user()->id]) }}"><i class="fa fa-file-archive-o"></i>Messages des clients<span>{{$message->count()}}</span></a>
							</li>
							<li>
								<a href="{{route('comment')}}"><i class="fa fa-eye"></i> Comment ça marche?</a>
							</li>
                                                        <li>
								<a href="{{route('terme')}}"><i class="fa fa-eye"></i> Règles d'utilisation</a>
							</li>
                                                        <li>
								<a href="{{route('contrat')}}"><i class="fa fa-eye"></i> Politique et confidentialité</a>
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
</div>
@endsection
