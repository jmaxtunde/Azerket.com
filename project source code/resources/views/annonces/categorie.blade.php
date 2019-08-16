@extends('layouts.app2')
@section('content')

<section class="section-sm" style="background-color:#e9ebee;">
	<div class="container" style="background-color:white;margin-top:-70px;margin-bottom:-80px">
		<br/>
		<div class="container" style="background-color:white;">		
                <div class="row">
			<div class="col-md-12">
				<!-- Advance Search -->
				
				<div class="advance-search">
									
					 {!! Form::open(['route' => 'annonces.rechercher', 'method' => 'POST', 'data-parsley-validate'=>'']) !!}
                                    <div>
                                    <div class="form-group" col-md-6 style="float:left;width:50%;">
                                        {{ Form::text('query', null, array('class' => 'editor','required'=>'','placeholder'=>'Que voulez-vous ?')) }}
                                    </div>
                                    <div class="form-group" style="float:left;width:30%;margin-left: 15px;">
                                        {{ Form::text('lieu', null, array('class' => 'editor','placeholder'=>'Lieu')) }}
                                    </div>
									
									<center><div class="form-group"style="margin-top:-10px;">
										{{ Form::submit('Rechercher', array('class' => 'btn btn-transparent fa fa-search')) }}
										
                                    </div></center>
									{!! Form::close() !!}
				</div>
			</div>
		</div>
                </div>
		
	<div class="container" style="background-color:white;">
		<br/>
                <div class="row">
			<div class="col-md-12">
				<div class="search-result bg-gray">
					<p>{{$annonces->count()}}  Resultat(s)</p>
				</div>
			</div>
		</div><hr/>
		<div class="row">
						
			<div class="col-md-9">
				<div class="category-search-filt">
					<div class="row">
						<div class="col-md-6">
							<strong>Trier</strong>
							<select>
								<option>Plus Récent</option>
								<option value="1">Populaire</option>
								<option value="2">Moins cher</option>
								<option value="4">Cher</option>
							</select>
						</div>
						<div class="col-md-6">
							
						</div>
					</div>
				</div>
                             
				<div class="product-grid-list">
					<div class="row mt-30">
                                             @forelse($annonces->chunk(50) as $chunk)
                                             @foreach($chunk as $annonce)  
						<div class="col-sm-12 col-lg-4 col-md-6">
							<!-- product card -->
                                                        <div class="product-item bg-light">
                                                                 <div class="card">
                                    
                                        <div class="thumb-content"> 
                                                <!-- <div class="price">$200</div> -->
                                                <a href="{{route('annonces.show',['id' => $annonce->id]) }}">
                                                    <br/><center><img class="card-img-top img-fluid" src="../../images/products/{{$annonce->picture}}" class="img-responsive" style="width:250px;  height:250px;" alt="{{$annonce->titreAnnonce}}"></center>
                                                </a>
                                        </div>
                                        <div class="card-body">
                                            <h4 class="card-title" ><center><a href="{{route('annonces.show',['id' => $annonce->id]) }}" style="color: blue;">{{$annonce->titreAnnonce}}</a></center></h4>
                                            <h5 class="card-title"><a href="{{route('annonces.show',['id' => $annonce->id]) }}"> <center>{{$annonce->prix}}</center></a></h5>
                                            <ul class="list-inline product-meta">
                                                
                                                <li class="list-inline-item">
                                                 <span class="glyphicon glyphicon-map-marker"></span><a href="/annonces/{{$annonce->id}}">   Position: {{$annonce->lieu}}</a>
                                                </li>
                                                <li class="list-inline-item">
                                                        <a href="{{route('annonces.show',['id' => $annonce->id]) }}"><i class="fa fa-calendar"></i>   {{ date('j M Y à H:i', strtotime($annonce->created_at)) }} </a>
                                                </li>
                                            </ul>
                                            <div class="product-ratings">
                                                                                <ul class="list-inline">
                                                                                        <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                                                                        <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                                                                        <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                                                                        <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                                </ul>
                                            </div>
                                             <center><a href="{{route('annonces.show',['id' => $annonce->id]) }}">{{ Form::submit('Acheter', array('class' => 'btn btn-transparent')) }}</a></center>
                                        </div>
                                                                   
                                    </a>
                                </div>
                                                        </div>
                                                </div>
                                            @endforeach
                                            @empty
                                            <div>
												<center><h3>Aucun Produit posté dans cette catégorie</h3><br/></center>  
											</div>
											<div class="row">
											
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
														<p>N'aviez-vous pas trouver ce que vous rechercher?
																					Exprimer gratuitement votre besoin.
														</p>
														<!-- Submii button -->
														<a href="{{ url('/besoins/create') }}" class="btn btn-transparent-white">Exprimer Maintenant</a>
													</div>
													</div>
													
											</div>
                                            @endforelse
                                        </div>
                                </div>
                                <div class="pagination justify-content-center">
								<nav aria-label="Page navigation example">
									<center>{{$annonces->links()}}</center>
									</nav>
									</div>
									<br/><br/>
             </div>
			 <div class="col-md-3">
				<div class="category-sidebar">
					<div class="widget category-list">
                                            <h4 class="widget-header"><center>Tous les catégories</center></h4>
												
                        <button class="accordion"><h3><i class="fa fa-car icon-bg-6"></i> Moyens de déplacements</h3></button>
                            <div class="panel">
                                   <ul class="category-lis">
														@foreach($moyens as $moyen)
															 <li><a href="{{route('annonces.affcategorie',['categorie' => $moyen->name]) }}">{{$moyen->name }}</a></li>
														@endforeach
                                                        
                                    </ul>
                            </div>
							<br/>
                            <button class="accordion"><h3><i class="fa fa-mobile"></i> Télephones & Tablettes</h3></button>
                            <div class="panel">
                                   <ul class="category-li">
														@foreach($telephone as $tele)
															 <li><a href="{{route('annonces.affcategorie',['categorie' => $tele->name]) }}">{{$tele->name }}</a></li>
														@endforeach
                                                        
                                    </ul>
                            </div>
                       
							<br/>
                            <button class="accordion"><h3> <i class="fa fa-laptop"></i> Appareils Electroniques</h3></button>
                            <div class="panel">
                                   <ul class="category-list">
														@foreach($electronique as $elec)
															 <li><a href="{{route('annonces.affcategorie',['categorie' => $elec->name]) }}">{{$elec->name }}</a></li>
														@endforeach
                                                        
                                    </ul>
                            </div>
							<br/>
						
                           <button class="accordion"> <h3> <i class="fa fa-shopping-bag"></i> Fashions</h3></button>
                            <div class="panel">
                                   <ul class="category-list">
														@foreach($fashion as $fashio)
															 <li><a href="{{route('annonces.affcategorie',['categorie' => $fashio->name]) }}">{{$fashio->name }}</a></li>
														@endforeach
                                                        
                                    </ul>
                            </div>
							<br/>
                            <button class="accordion"><h3><i class="fa fa-paw icon-bg-7"></i> Animaux</h3></button>
                            <div class="panel">
                                   <ul class="category-list">
														@foreach($animaux as $tele)
															 <li><a href="{{route('annonces.affcategorie',['categorie' => $tele->name]) }}">{{$tele->name }}</a></li>
														@endforeach
                                                        
                                    </ul>
                            </div>
							<br/>
                            <button class="accordion"><h3><i class="fa fa-bookmark-o"></i> Loisirs - Arts - Sports</h3></button>
                            <div class="panel">
                                   <ul class="category-list">
														@foreach($loisir as $tele)
															 <li><a href="{{route('annonces.affcategorie',['categorie' => $tele->name]) }}">{{$tele->name }}</a></li>
														@endforeach
                                                        
                                    </ul>
                            </div>
							<br/>
                            <button class="accordion"><h3><i class="fa fa-home icon-bg-3"></i>Services Immobiliers</h3></button>
                            <div class="panel">
                                   <ul class="category-list">
														@foreach($immobilier as $tele)
															 <li><a href="{{route('annonces.affcategorie',['categorie' => $tele->name]) }}">{{$tele->name }}</a></li>
														@endforeach
                                                        
                                    </ul>
                            </div>                       
							<br/>
                            <button class="accordion"><h3><i class="fa fa-apple icon-bg-2"></i> Agriculture</h3></button>
                            <div class="panel">
                                   <ul class="category-list">
														@foreach($agriculture as $tele)
															 <li><a href="{{route('annonces.affcategorie',['categorie' => $tele->name]) }}">{{$tele->name }}</a></li>
														@endforeach
                                                        
                                    </ul>
                            </div>
							<br/>
						
                            <button  class="accordion"><h3><i class="fa fa-shopping-basket icon-bg-4"></i>Healthy Produit de Beauté et de Santé</h3></button>
                            <div class="panel">
                                   <ul class="category-list">
														@foreach($beaute as $tele)
															 <li><a href="{{route('annonces.affcategorie',['categorie' => $tele->name]) }}">{{$tele->name }}</a></li>
														@endforeach
                                                        
                                    </ul>
                            </div>
							<br/>
                           <button class="accordion"> <h3><i class="fa fa-briefcase icon-bg-5"></i>Emplois</h3></button>
                            <div class="panel">
                                   <ul class="category-list">
														@foreach($emplois as $tele)
															 <li><a href="{{route('annonces.affcategorie',['categorie' => $tele->name]) }}">{{$tele->name }}</a></li>
														@endforeach
                                                        
                                    </ul>
                            </div>
                       
							<br/>
                            <button class="accordion"><h3><i class="fa fa-briefcase icon-bg-5"></i> Recherche Emplois</h3></button>
                            <div class="panel">
                                   <ul class="category-list">
														@foreach($rechercheEmploi as $tele)
															 <li><a href="{{route('annonces.affcategorie',['categorie' => $tele->name]) }}">{{$tele->name }}</a></li>
														@endforeach
                                                        
                                    </ul>
                            </div>
                       
							<br/>
                            <button class="accordion"><h3><i class="fa fa-gamepad"></i> Article Bébé - Enfants</h3></button>
                            <div class="panel">
                                   <ul class="category-list">
														@foreach($bebe as $tele)
															 <li><a href="{{route('annonces.affcategorie',['categorie' => $tele->name]) }}">{{$tele->name }}</a></li>
														@endforeach
                                                        
                                    </ul>
                            </div>
							<br/>
                            <button class="accordion"><h3><i class="fa fa-server"></i> Prestation de Services</h3></button>
                            <div class="panel">
                                   <ul class="category-list">
														@foreach($prestation as $tele)
															 <li><a href="{{route('annonces.affcategorie',['categorie' => $tele->name]) }}">{{$tele->name }}</a></li>
														@endforeach
                                                        
                                    </ul>
                            </div>
							<br/>
						
                            <button class="accordion"><h3><i class="fa fa-comment"></i> Evènements </h3></button>
                            <div class="panel">
                                   <ul class="category-list">
														@foreach($evenement as $tele)
															 <li><a href="{{route('annonces.affcategorie',['categorie' => $tele->name]) }}">{{$tele->name }}</a></li>
														@endforeach
                                                        
                                    </ul>
                            </div>
                       
							<br/>
                            <button class="accordion"><h3><i class="fa fa-home icon-bg-3"></i> Mobilier et équipement de maison et de bureau </h3></button>
                            <div class="panel">
                                   <ul class="category-list">
														@foreach($mobilier as $tele)
															 <li><a href="{{route('annonces.affcategorie',['categorie' => $tele->name]) }}">{{$tele->name }}</a></li>
														@endforeach
                                                        
                                    </ul>
                            </div>
							<br/>
                                                         <button class="accordion"><h3><i class="fa fa-briefcase icon-bg-5"></i> Hotêlerie et Restaurant  </h3></button>
                            <div class="panel">
                                   <ul class="category-list">
														@foreach($restaurant as $tele)
															 <li><a href="{{route('annonces.affcategorie',['categorie' => $tele->name]) }}">{{$tele->name }}</a></li>
														@endforeach
                                                        
                                    </ul>
                            </div>
							<br/>
						</div>
					

                    <div class="widget category-list">
                       <h4 class="widget-header">Notre pages Facebook</h4>
                        <div class="fb-page" data-href="https://www.facebook.com/azerketcom/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
						<blockquote cite="https://www.facebook.com/azerketcom/" class="fb-xfbml-parse-ignore">
						<a href="https://www.facebook.com/azerketcom/">Azerket.com</a></blockquote></div>              
                    </div>

                    
				</div>
				</div>
                        </div>
		</div>
</section>
@endsection('content')
