<html xmlns:og="http://ogp.me/ns#" lang="fr">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Acheter sur azerket.com</title>
  <meta property="og:title" content="Acheter sur azerket.com" />
  <meta property="og:type" content="web page"/>
  <meta property="og:url" content="http://wwww.azerket.com/annonces"/>
  <meta property="og:image" content="http://www.azerket.com/images/logo.png"/>
  <meta name="description" content="Acheter sur azerket.com: Azerket.com est une plateforme de marché d'achat et de vente de produit et services." />
  <meta name="keywords" content="immobilier,materiel roulant, produit de beauté, achat au benin, vente au benin" />
  <!-- PLUGINS CSS STYLE -->
  
  <link rel="stylesheet" href="{{url('plugins/jquery-ui/jquery-ui.min.css')}}">
  <link rel="stylesheet" href="{{url('../plugins/jquery-ui/jquery-ui.min.css')}}">
  <!-- Bootstrap -->
  <link rel="stylesheet" href="{{url('plugins/bootstrap/dist/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{url('plugins/bootstrap/dist/css/main.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{url('plugins/font-awesome/css/font-awesome.min.css')}}" >
  <!-- Owl Carousel -->
  <link rel="stylesheet" href="{{url('plugins/slick-carousel/slick/slick.css')}}" >
  <link rel="stylesheet" href="{{url('plugins/slick-carousel/slick/slick-theme.css')}}">
  <!-- Fancy Box -->
  <link rel="stylesheet" href="{{url('plugins/fancybox/jquery.fancybox.pack.css')}}">
  <link rel="stylesheet" href="{{url('plugins/jquery-nice-select/css/nice-select.css')}}">
  <link rel="stylesheet" href="{{url('plugins/seiyria-bootstrap-slider/dist/css/bootstrap-slider.min.css')}}">
  <!-- CUSTOM CSS -->
  <link rel="stylesheet" href="{{url('css/style.css')}}">
	 <style>
.accordion {
    background-color: #e9ebee;
    color: #444;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    border: none;
    padding:10px;
    text-align: left;
    outline: none;
    font-size: 15px;
    transition: 0.4s;
}

 .accordion:hover {
    background-color: #5672f9;
}

.accordion:after {
    content: '\002B';
    color: #777;
    font-weight: bold;
    float: right;
    margin-left: 5px;
}


.panel {
    padding: 0 18px;
    background-color: white;
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.2s ease-out;
}
</style>
  <!-- FAVICON -->
  <link href="favicon.ico" rel="icon" type="image/png">

 </head>
@extends('layouts.app')
@section('content')

<section class="section-sm" style="background-color:#e9ebee;">
	<div class="container" style="background-color:white;margin-top:-70px;margin-bottom:-80px">
		<br/>
				<div class="row">
			<div class="container" style="background-color:white;">		
                <div class="row">
			<div class="col-md-12">
				<!-- Advance Search -->
				
				<div class="advance-search">
									
					 {!! Form::open(['route' => 'annonces.rechercher', 'method' => 'POST', 'data-parsley-validate'=>'']) !!}
                                    <div class="form-group" class="edi1" style="float:left;width:50%;">
                                        {{ Form::text('query', null, array('class' => 'editor','required'=>'','placeholder'=>'Recherche')) }}
                                    </div>
                                    <div class="form-group" class="edi2" style="float:left;width:30%;margin-left: 15px;">
                                        {{ Form::text('lieu', null, array('class' => 'editor','placeholder'=>'ville')) }}
                                    </div>
									
									<center><div class="form-group"style="margin-top:-10px;">
										{{ Form::submit('Rechercher', array('class' => 'btn btn-transparent fa fa-search')) }}
										
                                    </div></center>
									{!! Form::close() !!}
				</div>
			</div>
		</div>
                </div>
		</div>
		<hr/>
		<div class="row">
			<div class="col-md-3">
				<div class="category-sidebar">
					<div class="widget category-list">
                        <h4 class="widget-header">Tous les catégories</h4>
												
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
                            <button class="accordion"><h3><i class="fa fa-laptop"></i> Appareils Electroniques</h3></button>
                            <div class="panel">
                                   <ul class="category-list">
														@foreach($electronique as $elec)
															 <li><a href="{{route('annonces.affcategorie',['categorie' => $elec->name]) }}">{{$elec->name }}</a></li>
														@endforeach
                                                        
                                    </ul>
                            </div>
							<br/>
						
                           <button class="accordion"> <h3><i class="fa fa-shopping-bag"></i> Fashions</h3></button>
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
                            <button class="accordion"><h3><i class="fa fa-home icon-bg-3"></i> Services Immobiliers</h3></button>
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
						
                            <button class="accordion"><h3><i class="fa fa-shopping-basket icon-bg-4"></i> Produit de Beauté et de Santé</h3></button>
                            <div class="panel">
                                   <ul class="category-list">
														@foreach($beaute as $tele)
															 <li><a href="{{route('annonces.affcategorie',['categorie' => $tele->name]) }}">{{$tele->name }}</a></li>
														@endforeach
                                                        
                                    </ul>
                            </div>
							<br/>
                           <button class="accordion"> <h3><i class="fa fa-briefcase icon-bg-5"></i> Emplois</h3></button>
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
                            <button class="accordion"><h3><i class="fa fa-server"></i>  Prestation de Services</h3></button>
                            <div class="panel">
                                   <ul class="category-list">
														@foreach($prestation as $tele)
															 <li><a href="{{route('annonces.affcategorie',['categorie' => $tele->name]) }}">{{$tele->name }}</a></li>
														@endforeach
                                                        
                                    </ul>
                            </div>
							<br/>
						
                            <button class="accordion"><h3> <i class="fa fa-comment"></i> Evènements </h3></button>
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
												<blockquote cite="https://www.facebook.com/azerketcom/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/azerketcom/">Azerket.com</a></blockquote></div>
                                               
                                        </div>

                                       
				</div>
			</div>
			<div class="col-md-9">
				<div class="category-search-filte">
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
                                             @forelse($annonces->chunk(100) as $chunk)
                                             @foreach($chunk as $annonce)  
						<div class="col-sm-12 col-lg-4 col-md-6">
							<!-- product card -->
                                                        <div class="product-item bg-light">
                                                                <div class="card">
                                    
                                        <div class="thumb-content"> 
                                                <!-- <div class="price">$200</div> -->
                                                <a href="{{route('annonces.show',['id' => $annonce->id]) }}">
                                                    <br/><center><img class="card-img-top img-fluid" src="images/products/{{$annonce->picture}}" class="img-responsive" style="width:250px;  height:250px;" alt="{{$annonce->titreAnnonce}}"></center>
                                                </a>
                                        </div>
                                        <center>
										<div class="card-body">
                                            <h4 class="card-title" ><center><a href="{{route('annonces.show',['id' => $annonce->id]) }}" style="color: blue;">{{$annonce->titreAnnonce}}</a></center></h4>
                                            <h5 class="card-title"><a href="{{route('annonces.show',['id' => $annonce->id]) }}"> <center>{{$annonce->prix}}</center></a></h5>
                                            <ul class="list-inline product-meta">
                                                
                                                <li class="list-inline-item">
                                                 <span class="glyphicon glyphicon-map-marker"></span><a href="/annonces/{{$annonce->id}}">   Position: {{$annonce->lieu}}</a>
                                                </li>
                                                <li class="list-inline-item">
                                                        <a href="{{route('annonces.show',['id' => $annonce->id]) }}"><i class="fa fa-calendar"></i>    Ajoutée le </i>{{ date('j M Y à H:i', strtotime($annonce->created_at)) }}</a>
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
                                            <a href="{{route('annonces.show',['id' => $annonce->id]) }}">{{ Form::submit('Acheter', array('class' => 'btn btn-transparent')) }}</a> 
										<br/>
                                        </div>
                                           
                                          </center>
                                    
                                </div>
                                                        </div>
                                                </div>
                                            @endforeach
                                            @empty
                                                <div>
												<h3><center>Aucun Produit posté dans cette catégorie</center></h3><br/>  
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
                        </div>
                     </div>
</section>
@endsection