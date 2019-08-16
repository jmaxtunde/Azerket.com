@extends('layouts.app1')
@section('content')
<div style="background-color:#e9ebee;">
<div class="container" style="background-color:white;">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
			
            <div class="widget personal-info">
                <h2 class="widget-header user"><center>Exprimez votre besoin</center></h2>
                {!! Form::open(['route' => 'besoins.store', 'method' => 'POST', 'files' => true, 'data-parsley-validate'=>'']) !!}

                                    @if(Session::has('msg'))
                                <center>{{Session::get('msg')}}<center>
                                @endif 
                                  @if(count($errors)>0)
                                    <ul>
                                        @foreach($errors->all() as $error)
                                            <li class="alert alert-danger">{{$error}}</li>
                                        @endforeach
                                    </ul>
                                @endif
                                    <div class="form-group">
                                        {{ Form::label('name', 'Titre') }}
                                        {{ Form::textarea('titre', null, array('class' => 'form-control','required'=>'','minlength'=>'5','placeholder'=>'Que voulez-vous?')) }}
                                    </div>

                                   
                                    <div class="form-group">
                                        {{ Form::label('category_id', 'Categories') }}
                                        {{ Form::select('categorie_id',$categories, null, ['class' => 'form-control','placeholder'=>'Select Categorie']) }}
                                    </div>
                                    
                                    <div class="form-group">
                                        {{ Form::label('location', 'Ville') }}
                                        {{ Form::text('location', null, array('class' => 'form-control','required'=>'','placeholder'=>'Votre ville')) }}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('phoneNumber', 'Telephone') }}
                                        {{ Form::text('phoneNumber', null, array('class' => 'form-control','required'=>'','placeholder'=>'votre contact téléphonique')) }}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::hidden('statut','Desactive') }}
                                    </div>  
                                    <div class="form-group">
                                        {{ Form::hidden('description','description') }}
                                    </div>  
                                    <center><div class="form-group">
                                     {{ Form::submit('Envoyer', array('class' => 'btn btn-transparent')) }}
                                    {!! Form::close() !!}
                    
    </div>
</center>
</div>
</div>

        <div class="col-md-4">
				<div class="sidebar">
					
                                    <!-- Safety tips widget -->
					<div class="widget disclaimer">
                                            <h3 class="widget-header" style="color:red;"><center>!!! Important SVP Lisez ceci !!!</center></h3>
						<ul>
                                                    <li> <span class="fa fa-hand-o-right"></span>  Ne payer pas sans avoir reçu votre produit</li><br/>
							<li><span class="fa fa-hand-o-right"></span>  Rencontrer le vendeur dans une place publique</li><br/>
							<li> <span class="fa fa-hand-o-right"></span>  Vérifier votre produit avant de payer le vendeur</li><br/>
							<li><span class="fa fa-hand-o-right"></span>  Payer après avoir reçu votre produit.</li><br/>
						</ul>
					</div>
                                        <div class="widget coupon text-center">
						<!-- Coupon description -->
						<p>De quoi ont besoin les clients?
						</p>
						<!-- Submii button -->
						<a href="{{ url('/besoins') }}" class="btn btn-transparent-white">Voir Maintenant</a>
                                        </div>
					<div class="widget coupon text-center">
						<!-- Coupon description -->
						<p>Aviez-vous un produit à vendre? Poster gratuitement votre annonnce sur azerket.com.
						</p>
						<!-- Submii button -->
						<a href="{{ url('/annonces/create') }}" class="btn btn-transparent-white">Poster Maintenant</a>
                                        </div>
					
				</div>
			</div>
</div>
</div>
</div>
@endsection