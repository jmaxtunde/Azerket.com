@extends('layouts.app1')
@section('content')

<div style="background-color:#e9ebee;">
    <div class="container" style="background-color:white;"><br/>
		<div class="row">
			<!-- Left sidebar -->
			<div class="col-md-8">
				@if(Session::has('abus'))
                                <li class="alert alert-danger">{{Session::get('abus')}}</li>
                                @endif
                                @if(Session::has('msg'))
                                 <li class="alert alert-danger">{{Session::get('msg')}}</li>
                                @endif
                                @if(count($errors)>0)
                                    <ul>
                                        @foreach($errors->all() as $error)
                                            <li class="alert alert-danger">{{$error}}</li>
                                        @endforeach
                                    </ul>
                                @endif
				<div class="product-details">
					<div class="widget price text-center">
						<p>{{ $annonces->prix }}</p>
					</div>
					<center><h1 class="product-title" style="color: blue;">{{ $annonces->titreAnnonce }}</h1></center>
					<div class="product-meta">
						<ul class="list-inline">
							<li class="list-inline-item"><i class="fa fa-user-o"></i> Publié par: {{ $annonces->user->name }}</li>
                          <li class="list-inline-item"><i class="fa fa-phone"></i> {{ $annonces->user->callPhoneNumber }}</li>
							<li class="list-inline-item"><i class="fa fa-folder-open-o"></i> Categorie: {{ $annonces->souscategorie }}</li>
							<li class="list-inline-item"><i class="fa fa-location-arrow"></i> Ville: {{ $annonces->lieu }}</li>
                            <li class="list-inline-item"><i class="fa fa-calendar"></i> {{ date('j M Y à H:i', strtotime($annonces->created_at)) }}</li>
                          @if($annonces->nb_visit>0)
                                                 <li class="list-inline-item">
                                                      <span class="fa fa-eye"></span>: {{$annonces->nb_visit}} Vues
												</li>
												 @endif
                                                        
						</ul>
					</div>					
				<div id="carouselExampleIndicators" class="product-slider carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						@if($annonces->picture!='no image')
							<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        @endif
							<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
							<li data-target="#carouselExampleIndicators" data-slide-to="2" ></li>
							<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
					</ol>
					<div class="carousel-inner">
                         @if($annonces->picture!='no image')
							<div class="carousel-item active">
								<img class="d-block w-100" src="../images/products/{{ $annonces->picture}}" >
							</div>
                         @endif
                        @foreach($images as $image)
                            <div class="carousel-item">
								<img class="d-block w-100" src="../images/products/{{ $image->imagename}}" >
							</div>
						@endforeach
                      {{ $images->count()+1}} <img src="../images/products/camera.png">
						<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>                        
					</div>
				</div>
				<div class="content">
					<ul class="nav nav-pills  justify-content-center" id="pills-tab" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true"><span class="fa fa-eye"></span> Detail de l'annonce</a>
						</li>
						<li class="nav-item">
                                                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false"><span class="fa fa-eye"></span> Contact de l'annonceur</a>
						</li>
						<li class="nav-item">
							<a href="{{route('message.create',['id' => $annonces->id]) }}" class="nav-link" ><span class="fa fa-meetup"></span> Chattez avec l'annonceur</a>
						</li>
					</ul>
					<div class="tab-content" id="pills-tabContent">
				<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                    <center><h3 class="tab-title">Détail de l'annonce</h3></center>
                                   
					<p>{!!$annonces->description!!}</p>
                                        
				</div>
				<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
					<div class="widget disclaimer">
					 
					<div class="content">
                            <img src="../images/user/{{ $annonces->user->profilePicture }}" alt="" class="img-responsive"  style="width: 250px;height: 250px; margin-top:-55px; float: left;margin-right: 20px;">
                            
                            <p style="margin-top:-55px;">
                           <br/><br/><span class="fa fa-user-circle"></span>  {{ $annonces->user->name }}<br/>
                            <span class="fa fa-phone"></span>  {{ $annonces->user->callPhoneNumber }}<br/>
                            <span class="fa fa-envelope"></span> {{ $annonces->user->email }}<br/>
                            <span class="fa fa-whatsapp"></span> {{ $annonces->user->whatsAppNumber }}<br/>
			    <span class="fa fa-meetup"></span> {{ $annonces->user->messengerLink }}<br/>
                            Pays: {{ $annonces->user->country }}<br/>
                                                        Ville: {{ $annonces->user->location }}<br/>
                                                        Adresse: {{ $annonces->user->adresse }}<br/>
                              							Vendeur depuis: {{ date('j M Y à H:i', strtotime($annonces->user->created_at)) }}
                                   </p>
                    </div>                        
					</div>
				
				</div>
				
				</div>
				</div>
				</div>
				
                  <p style="color: blue;">Merci d'indiquer au vendeur que vous avez vu son annonce sur Azerket.com</p>
				<div class="social">
						<br/>
						<h4> Partager sur les réseaux sociaux </h4>
						<br/>
							<a href="https://www.facebook.com/sharer/sharer.php?u=" target ="_blank"><img src="../images/social/facebook.png" class="img-responsive" style="width:50px;  height:50px;" alt="" ></a>
							<a href="https://twitter.com/home?status=" target ="_blank"><img src="../images/social/twitter.png" class="img-responsive" style="width:50px;  height:50px;" alt=""></a>
							<a href="https://plus.google.com/share?url=" target ="_blank"><img src="../images/social/google.png" class="img-responsive" style="width:50px;  height:50px;" alt=""></a>
							<a href="https://pinterest.com/pin/create/button/?url=&media=&description=" target ="_blank"><img src="../images/social/pinterest.png" class="img-responsive" style="width:50px;  height:50px;" alt=""></a>
							<a href="https://www.linkedin.com/shareArticle?mini=true&url=&title=&summary=&source=" target ="_blank"><img src="../images/social/linkin.png" class="img-responsive" style="width:50px;  height:50px;" alt=""></a>
							</div><br/>
               
					<button class="accordion"><h4>  <i class="fa fa-eye"></i>  Voir les annonces de la même catégorie</h4></button>
                        <div class="panel">
                            <div class="product-grid-list">
								<div class="row mt-30">
                                    @forelse($annoncecategorie->chunk(100) as $chunk)
                                    @foreach($chunk as $annonce)  
									<div class="col-sm-12 col-lg-4 col-md-6">
										<div class="product-item bg-light">
                                            <div class="card">
                                                <div class="thumb-content">
                                                    <!-- <div class="price">$200</div> -->
                                                        <a href="{{route('annonces.show',['id' => $annonce->id]) }}">
                                                            <br/><center><img class="card-img-top img-fluid" src="../images/products/{{$annonce->picture}}" class="img-responsive" style="width:250px;  height:250px;" alt=""></center>
														</a>
                                                </div>
                                                <div class="card-body">
                                                    <h4 class="card-title"><a href="{{route('annonces.show',['id' => $annonce->id]) }}">{{$annonce->titreAnnonce}}</a></h4>
                                                        <h5 class="card-title"><a href="{{route('annonces.show',['id' => $annonce->id]) }}"><i class="fa fa-money" aria-hidden="true"></i> {{$annonce->prix}}</a></h5>
                                                                            <ul class="list-inline product-meta">

                                                                                <li class="list-inline-item">
                                                                                 <span class="glyphicon glyphicon-map-marker"></span><a href="/annonces/{{$annonce->id}}">   Position: {{$annonce->lieu}}</a>
                                                                                </li>
                                                                                <li class="list-inline-item">
                                                                                        <a href="{{route('annonces.show',['id' => $annonce->id]) }}"><i class="fa fa-calendar">    Ajoutée le </i>{{$annonce->created_at}}</a>
                                                                                </li>
                                                                            </ul>
                                                  <center>
                                                                            <div class="product-ratings">
                                                                                    <ul class="list-inline">
                                                                                        <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                                                                        <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
																						<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                                                                        <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                                    </ul>
                                                                            </div>
                                                   <a href="{{route('annonces.show',['id' => $annonce->id]) }}">{{ Form::submit('Acheter', array('class' => 'btn btn-transparent')) }}</a> 
                                                    <br/></center>
												</div>
                                            </div>
                                        </div>
                                    </div>
                                        @endforeach
                                        @empty
                                           
										   <div class="row">
											<div> <h3>Aucun Produit</h3></div>
												<div class="col-sm-12 col-lg-6">
												<!-- product card -->
														<div class="widget coupon text-center">
														<!-- Coupon description -->
														<p>Aviez-vous un produit à vendre? Poster gratuitement votre annonnce sur azerket.com.
														</p>
														<!-- Submii button -->
														<a href="{{ url('/annonces/create') }}" class="btn btn-transparent-white">Poster Maintenant</a>
														</div>
													</div> 
													<div class="col-sm-12 col-lg-6">
													<div class="widget coupon text-center">
														<!-- Coupon description -->
														<p>Exprimer gratuitement votre besoin.
														</p>
														<!-- Submii button -->
														<a href="{{ url('/besoins/create') }}" class="btn btn-transparent-white">Exprimer Maintenant</a>
													</div>
													</div>
													
											</div>
                                        @endforelse
                                    </div>
                              <div class="pagination justify-content-center">
								<nav aria-label="Page navigation example">
									<center>{{$annoncecategorie->links()}}</center>
									</nav>
									</div>
									<br/><br/>
					</div>
                          
                    </div>
          
                   <br/>
				   
                    <button class="accordion"><h4>  <i class="fa fa-warning"></i>  Signaler un abus</h4></button>
                    <div class="panel">
                        <br/>
                        <h3 class="tab-title"><center>Aviez-vous un problème lié avec cette annonce ?</center></h3>
								<div class="review-submit">
											{!! Form::open(['route' => 'abus.store', 'method' => 'POST','data-parsley-validate'=>'']) !!}
 
											<div class="form-group">
												{{ Form::label('name', 'Nom') }}
												{{ Form::text('pseudo', null, array('class' => 'form-control','required'=>'','minlength'=>'5','placeholder'=>'Votre nom')) }}
											</div>
											<div class="form-group">
												{{ Form::label('email', 'Email | Téléphone') }}
												{{ Form::text('email', null, array('class' => 'form-control','required'=>'','minlength'=>'5','placeholder'=>'Votre email ou phone')) }}
											</div>
											<div class="form-group">
											  {!! Form::label('message','Message') !!}
											  {!! Form::textarea('abus',null,['class'=>'form-control']) !!}
											</div>
											
											<div class="form-group">
												{{ Form::hidden('annonce_id', $annonces->id) }}
											</div>
											
											<center><div class="form-group">
											 {{ Form::submit('Envoyer', array('class' => 'btn btn-transparent')) }}
											{!! Form::close() !!}
											</div></center>
						  					
								</div>
                </div>
				</div>
			<div class="col-md-4">
				<div class="sidebar">
					
                                    <!-- Safety tips widget -->
					<div class="widget disclaimer">
                                            <h3 class="widget-header" style="color:red;"><center> Important, Merci de lire ceci </center></h3>
                      <h3 class="widget-header"><center> Pour des transactions locales (Même villes) </center></h3>
						<ul>
                                                    <li> <span class="fa fa-hand-o-right"></span>  Ne payer pas sans avoir reçu votre produit</li><br/>
							<li><span class="fa fa-hand-o-right"></span>  Rencontrer le vendeur dans une place publique</li><br/>
						</ul><hr/>
                      <h3 class="widget-header"><center> Pour des transactions inter-villes ou pays </center></h3>
						<ul>
                               Echanger avec le vendeur sur les conditions de transactions.
                      </ul><hr/>
					</div>
					<!-- User Profile widget -->
                                        @foreach($commentaire as $com)
						<h3 class="tab-title">Avis des clients</h3>
							<div class="product-review">
						  		<div class="media">
									<img src="../images/user/comment-avatar.jpg" class="img-responsive" style="width:100px;  height:100px;" alt="">
							  			<div class="media-body">
							  				<!-- Ratings -->
							  				<div class="ratings">
							  					<ul class="list-inline">
							  						<li class="list-inline-item">
							  							<i class="fa fa-star"></i>
							  						</li>
							  						<li class="list-inline-item">
							  							<i class="fa fa-star"></i>
							  						</li>
							  						<li class="list-inline-item">
							  							<i class="fa fa-star"></i>
							  						</li>
							  						<li class="list-inline-item">
							  							<i class="fa fa-star"></i>
							  						</li>
							  						<li class="list-inline-item">
							  							<i class="fa fa-star"></i>
							  						</li>
							  					</ul>
							  				</div>
							  				<div class="name">
							  					<h5>{{$com->pseudo}}</h5>
							  				</div>
							  				<div class="date">
							  					<p>Posté le {{$com->created_at}} </p>
							  				</div>
							  				<div class="review-comment">
							  					<p>
							  						{{$com->contenue}}
							  					</p>
							  				</div>
							  			</div>
								</div>
							</div>
					@endforeach
					<div class="review-submission">
							  			<h3 class="tab-title">Ajouter votre avis</h3>
						  				<!-- Rate -->
						  				<div class="rate">
						  					<div class="starrr"></div>
						  				</div>
						  				<div class="review-submit">
											{!! Form::open(['route' => 'commentaires.store', 'method' => 'POST','data-parsley-validate'=>'']) !!}
 
											<div class="form-group">
												{{ Form::label('name', 'Nom') }}
												{{ Form::text('pseudo', null, array('class' => 'form-control','required'=>'','minlength'=>'5','placeholder'=>'Votre nom')) }}
											</div>
											<div class="form-group">
												{{ Form::label('email', 'Email ou Téléphone') }}
												{{ Form::text('email', null, array('class' => 'form-control','required'=>'','minlength'=>'5','placeholder'=>'Votre email')) }}
											</div>
											<div class="form-group">
											  {!! Form::label('message','Message') !!}
											  {!! Form::textarea('contenue',null,['class'=>'form-control']) !!}
											</div>
											<div class="form-group">
											{{ Form::hidden('statut','Desactive') }}
											</div>
											<div class="form-group">
												{{ Form::hidden('annonce_id', $annonces->id) }}
											</div>
											<center>
											<div class="form-group">
											 {{ Form::submit('Envoyer', array('class' => 'btn btn-transparent')) }}
											{!! Form::close() !!}
											</div>
											</center>
						  					
						  				</div>
					</div>
					
                                         
                                         
					<div class="widget coupon text-center">
					
						<p>Aviez-vous un produit à vendre? Poster gratuitement votre annonnce sur azerket.com.
						</p>
						
						<a href="{{ url('/annonces/create') }}" class="btn btn-transparent-white">Poster Maintenant</a>
                    </div>
					<div class="widget coupon text-center">
						<!-- Coupon description -->
						<p>N'aviez-vous pas trouver ce que vous rechercher?
                                                    Exprimer gratuitement votre annonnce.
						</p>
						<!-- Submii button -->
						<a href="{{ url('/besoins/create') }}" class="btn btn-transparent-white">Exprimer Maintenant</a>
					</div>
				</div>
			</div>
			
		</div>
        
	</div>
</div>
@endsection