<html xmlns:og="http://ogp.me/ns#" lang="fr">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Les Besoins || Azerket.com</title>
  <meta property="og:title" content="Les besoins || Azerket.com" />
  <meta property="og:type" content="web page"/>
  <meta property="og:url" content="http://wwww.azerket.com/besoins"/>
  <meta property="og:image" content="http://www.azerket.com/images/logo.png"/>
  <meta name="description" content="Les besoins || Azerket.com présente les besoins exprimés par les clients sur la plateforme azerket.com" />
  <meta name="keywords" content="besoins," />
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
<div style="background-color:#e9ebee;">
    <div class="container" style="background-color:white;">
        <div class="row">

            <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-0">
				<!-- Recently Favorited -->
				<div class="widget dashboard-container my-adslist">
                                   
                <h4 class="widget-header user"><center>Besoins confirmés des clients</center></h4> 
                    
                 <div class="advance-search">
									
					 {!! Form::open(['route' => 'besoins.rechercher', 'method' => 'POST', 'data-parsley-validate'=>'']) !!}
                                    <div class="form-group" style="float:left;width:75%;">
                                        {{ Form::text('query', null, array('class' => 'editor','required'=>'','placeholder'=>'Rechercher un besoin')) }}
                                    </div>
									
									<center><div class="form-group"style="margin-top:-10px;">
										{{ Form::submit('Rechercher', array('class' => 'btn btn-transparent fa fa-search')) }}
										
                                    </div></center>
									{!! Form::close() !!}
				</div>

                    <div class="card-body">
                         @forelse($besoins->chunk(100) as $chunk)
                            @foreach($chunk as $besoin)
							<button class="accordion"><h3>{!!$besoin->titre!!}</h3></button>
                                                                                    
                            <div class="panel">
                                    <h4>Numéro Téléphone</h4>
                                    <p>{{$besoin->phoneNumber}}</p>
                                    <h4>Résidence</h4>
                                    <p>{{$besoin->location}}</p>
                                    <h4>Publié le </h4>
                                    <p>{{$besoin->created_at}}</p>
                                </ul>
                            </div><br/>
                            @endforeach
                        @empty
                        <div>
							<h3><center>Aucun besoin exprimé</center></h3><br/>  
						</div>
										<div class="row">
											
												<div class="col-sm-12 col-lg-6">
												<!-- product card -->
														<div class="widget coupon text-center">
														<!-- Coupon description -->
														<p>Aviez-vous un produit à vendre? Poster gratuitement votre annonnce sur azerket.com
														</p>
														<!-- Submii button -->
														<a href="{{ url('/annonces/create') }}" class="btn btn-transparent-white">Poster Maintenant</a>
														</div>
													</div> 
													<div class="col-sm-12 col-lg-6">
													<div class="widget coupon text-center">
														<!-- Coupon description -->
														<p>Vous pouvez aussi exprimer gratuitement votre besoin sur azerket.com <br/>
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
									<center>{{$besoins->links()}}</center>
									</nav>
									</div>
									<br/><br/>
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
						<p>N'Aviez-vous pas trouver ce que vous rechercher?
                                                    Exprimer gratuitement votre besoin sur azerket.com.
						</p>
						<!-- Submii button -->
						<a href="{{ url('/besoins/create') }}" class="btn btn-transparent-white">Exprimer Maintenant</a>
                                        </div>
					<div class="widget coupon text-center">
						<!-- Coupon description -->
						<p>Aviez-vous un produit à vendre? Poster gratuitement votre annonnce sur azerket.com.
						</p>
						<!-- Submii button -->
						<a href="{{ url('/annonces/create') }}" class="btn btn-transparent-white">Poster Maintenant</a>
                                        </div>
					
					<!-- Coupon Widget -->
					
					
				</div>
			</div>
		</div>
	</div>
</div>
 
@endsection

