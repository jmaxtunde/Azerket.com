@extends('layouts.app1')
@section('content')
<section class="section-sm" style="background-color:#e9ebee;">
	<div class="container" style="background-color:white;margin-top:-70px;margin-bottom:-80px">
			

	<div class="container" style="background-color:white;">
		<br/>
                
		<div class="row">
                    
			
			<div class="col-md-9">
                            <div class="row">
                                    <div class="col-md-12">
                                            <!-- Advance Search -->

                                            <div class="advance-search">

                                                     {!! Form::open(['route' => 'besoins.rechercher', 'method' => 'POST', 'data-parsley-validate'=>'']) !!}
                                                <div class="form-group" style="float:left;width:50%;">
                                                    {{ Form::text('query', null, array('class' => 'editor','required'=>'','placeholder'=>'Que rechercher-vous ?')) }}
                                                </div>
                                                <div class="form-group" style="float:left;width:30%;margin-left: 15px;">
                                                    {{ Form::text('lieu', null, array('class' => 'editor','placeholder'=>'Dans quelle ville ?')) }}
                                                </div>

                                                                                    <center><div class="form-group"style="margin-top:-10px;">
                                                                                            {{ Form::submit('Rechercher', array('class' => 'btn btn-transparent fa fa-search')) }}

                                                </div></center>
                                                                                    {!! Form::close() !!}
                                            </div>
                                    </div>
                            </div>
				<div class="row">
                                        <div class="col-md-12">
                                                <div class="search-result bg-gray">
                                                        <p>{{$besoins->count()}}  Resultat(s)</p>
                                                </div>
                                        </div>
                                </div><hr/>
				<div class="card-body">
                         @forelse($besoins->chunk(100) as $chunk)
                            @foreach($chunk as $besoin)
							<button class="accordion"><h3>{{$besoin->titre}}</h3></button>
                            
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
									<center>{{$besoins->links()}}</center>
									</nav>
									</div>
									<br/><br/>
	    </div>
			 <div class="col-md-3">
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
    
</section>
@endsection