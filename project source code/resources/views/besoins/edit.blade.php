@extends('layouts.admin')

@section('content')

<div style="background-color:#e9ebee;">
	<!-- Container Start -->
	<div class="container" style="background-color: white;">
	<br/>
        <div class="row">
        
            <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-0">
                @if(count($errors)>0)
                                    <ul>
                                        @foreach($errors->all() as $error)
                                            <li class="alert alert-danger">{{$error}}</li>
                                        @endforeach
                                    </ul>
                                @endif
				<div class="widget personal-info">
                <h2 class="widget-header user"><center>Modifier ce besoin</center></h2>
                {!! Form::open(['route' => ['sindambesoins.update',$besoins->id], 'method' => 'PATCH', 'data-parsley-validate'=>'']) !!}
				
                                     
                                    <div class="form-group">
                                        {{ Form::label('name', 'Titre') }}
                                        {{ Form::textarea('titre', $besoins->titre, array('class' => 'form-control','required'=>'','minlength'=>'5','placeholder'=>'Que voulez-vous?')) }}
                                    </div>
                                   
                                    
                                    <div class="form-group">
                                        {{ Form::label('location', 'Ville') }}
                                        {{ Form::text('location', $besoins->location, array('class' => 'form-control','required'=>'','placeholder'=>'Votre ville')) }}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('phoneNumber', 'Telephone') }}
                                        {{ Form::text('phoneNumber', $besoins->phoneNumber, array('class' => 'form-control','required'=>'','placeholder'=>'votre contact téléphonique')) }}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::hidden('statut','Active')}}
                                    </div>  
                                    <center><div class="form-group">
                                     {{ Form::submit('Modifier', array('class' => 'btn btn-transparent')) }}
                                    {!! Form::close() !!}
                    
    </div>
</center>
</div>
			</div>
			<div class="col-md-10 offset-md-1 col-lg-4 offset-lg-0">
            <div class="sidebar">
					
					<div class="widget user-dashboard-menu">
						<ul>
                                                    <h4><center>OPTIONS</center></h4>
                                                        <li class="active">
								<a href="{{ route('sindam.dashboard')}}"><i class="fa fa-file"></i>  Annonces </a>
                                                        </li>
                                                        <li >
								<a href="{{ url('besoins/voir')}}"> <i class="fa fa-newspaper-o"></i> Besoins </a>
							</li>
                                                        <li>
								<a href="{{ route('categorie')}}"><i class="fa fa-list"></i> Categorie </a>
							</li>
							<li>
								<a href="{{ route('souscategorie')}}"> <i class="fa fa-life-buoy"></i>Sous categorie </a>
							</li>
                                                         <li>
								<a href="{{ route('messageinternaute')}}"> <i class="fa fa-envelope-open"></i> Messages Internautes </a>
							</li>
                                                        <li>
								<a href="{{ route('abus')}}"> <i class="fa fa-envelope-open"></i> Messages Abus </a>
							</li>
                                                        <li>
								<a href="{{ route('messagevendeur')}}"> <i class="fa fa-envelope-open"></i> Messages Vendeurs </a>
							</li>
                                                        <li>
								<a href="{{ route('commentaire')}}"> <i class="fa fa-envelope-open"></i> Commentaires </a>
							</li>
							<li>
								<a href="{{ route('statistique')}}"><i class="fa fa-line-chart"></i> Statistiques</a>
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
</div>
	<!-- Container End -->

@endsection
