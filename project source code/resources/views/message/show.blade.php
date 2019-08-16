@extends('layouts.master2')
@section('content')
<div style="background-color:#e9ebee;">
    <div class="container" style="background-color:white;">
        <div class="row">

            <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-0">
				<!-- Recently Favorited -->
				<div class="widget dashboard-container my-adslist">
                <h4 class="widget-header user"><center> Messages des clients</center></h4> 
                    
                

                    <div class="card-body">
                         @forelse($message->chunk(100) as $chunk)
                            @foreach($chunk as $besoin)
							<button class="accordion"><h3>{{$besoin->message}}</h3></button>
                            
                            <div class="panel">
                                    <h4>Nom du client</h4>
                                    <p>{{$besoin->pseudo}}</p>
                                    <h4>Email</h4>
                                    <p>{{$besoin->email}}</p>
                              <h4> Numéro Téléphone</h4>
                              <p>{{$besoin->telephone}}</p>
                                    <h4>Annonce concernée</h4>
                                    <p>{{$besoin->annonce->titreAnnonce}}</p>
                                    <h4>Envoyé le  </h4>
                                    <p>{{$besoin->created_at}}</p>
                                </ul>
                            </div>
                  <br/>
                            @endforeach
                        @empty
                        <div>
							<h3><center>Aucun message envoyé</center></h3><br/>  
						</div>
										<div class="row">
											
												<div class="col-sm-12 col-lg-6">
												<!-- product card -->
														<div class="widget coupon text-center">
														<!-- Coupon description -->
														<p>Aviez-vous un produit à vendre? 
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
					
				</div>
                                <div class="pagination justify-content-center">
								<nav aria-label="Page navigation example">
									<center>{{$message->links()}}</center>
									</nav>
				</div>
									<br/><br/>
	    </div>
            <div class="col-md-10 offset-md-1 col-lg-4 offset-lg-0">
				<div class="sidebar">
					<!-- User Widget -->
					<div class="widget user-dashboard-profile">
						<!-- User Image -->
						<div class="profile-thumb">
							<img src="../../images/user/{{Auth::user()->profilePicture}}" alt="Photo de Profile" />
						</div>
						<!-- User Name -->
						<h5 class="text-center">{{Auth::user()->name}}</h5>
						<p>Enrégistré le {{Auth::user()->created_at}}</p>
                                                <a href="{{ url('/sellers.edit') }}" class="btn btn-main-sm">Modifier profile</a><br/><br/>
                                                <a href="{{ url('/sellers.password') }}" class="btn btn-main-sm">Modifier mot de passe</a>
					</div>
					<!-- Dashboard Links -->
					<div class="widget user-dashboard-menu">
						<ul>
							<li >
								<a href="{{route('home')}}"><i class="fa fa-user"></i> Mes annonces</a>
                                                        </li>
                                                        <li >
								<a href="{{ url('/annonces/create') }}"> <i class="fa fa-plus-circle"></i> Ajouter une annonce </a>
							</li>
                                                        <li>
								<a href="{{ url('premium') }}"> <i class="fa fa-eye"></i> Service Premium </a>
							</li>
							<li>
								<a href="{{ url('/besoins') }}"><i class="fa fa-bookmark-o"></i> Les besoins des clients <span>{{$besoins->count()}}</span></a>
							</li>
							<li class="active">
								<a href="{{route('message.show',['id' => Auth::user()->id]) }}"><i class="fa fa-file-archive-o"></i>Messages des clients <span>{{$message->count()}}</span></a>
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
</div>
 
@endsection

