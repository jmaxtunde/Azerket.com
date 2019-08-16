@extends('layouts.master')

@section('content')

<div style="background-color:#e9ebee;">
	<!-- Container Start -->
	<div class="container" style="background-color: white;">
		<!-- Row Start -->
		<div class="row">
		 <center>	
                    @if(Session::has('success'))
                               {{Session::get('success')}}
                                @endif
                 </center>
			<div class="col-md-10 offset-md-1 col-lg-8 offset-lg-0">
				<!-- Recently Favorited -->
             			 @if(session('success'))
                                <div class="container">
                                    <div class="alert alert-success">
                                        {{session('success')}}
                                    </div>
                                </div>
                          @endif
				<div class="widget dashboard-container my-adslist">
						@forelse($annonces->chunk(50) as $chunk)
                                                 <h3 class="widget-heade"><center> Mes annonces</center></h3>
					<table class="table table-responsive product-dashboard-table">
						<thead>
							<tr>
								<th>Photos</th>
								<th><center>Actions </center></th>
								<th class="text-center">Titres</th>
							</tr>
						</thead>
						<tbody>
                                                       @foreach($chunk as $annonce)
                                                        <tr>
								<td class="product-thumb">
                                                                    <img width="80px" height="auto" src="images/products/{{$annonce->picture}}" alt=" Pas d'image">
                                                                </td>
								<td class="action" data-title="Action">
									<div class="">
										<ul class="list-inline justify-content-center">
											<li class="list-inline-item">
												<a data-toggle="tooltip" data-placement="top" title="Voir l'annonce" class="view" href="{{route('annonces.show',['id' => $annonce->id]) }}">
													<i class="fa fa-eye"></i>
												</a>		
											</li>
											<li class="list-inline-item">
												<a data-toggle="tooltip" data-placement="top" title="Modifier l'annonce" class="edit" href="{{route('annonces.edit',['id' => $annonce->id]) }}">
													<i class="fa fa-pencil"></i>
												</a>		
											</li>
											<li class="list-inline-item">
												<a data-toggle="tooltip" data-placement="top" title="Ajouter des images à votre annonce" class="delete" href="{{route('imageupload.create',['id' => $annonce->id]) }}">
													<i class="fa fa-picture-o"></i>
												</a>
											</li>
                                          <li class="list-inline-item">
												<a data-toggle="tooltip" data-placement="top" title="Boster votre annonce" class="edit" href="{{route('boosters.create',['id' => $annonce->id]) }}">
													<i class="fa fa-bold"></i>
												</a>
                                                                                        
										</ul>
									</div>
								</td>
                                                                <td class="product-details">
                                                                    <h5 class="title" ><center style="color: blue;"> {{$annonce->titreAnnonce}}</center></h5>
                                                                  <center><span class="status active">{{$annonce->statut}}</span></center>
								</td>
								
							</tr>
                            @endforeach
								@empty
								<img src="images/social/bienvenue.jpg " style="width:75%"/>
								
									<p>
									<br/>
                          <h3>Créez votre première annonce et faites de bonnes affaires !</h3>
								@endforelse
						</tbody>
					</table>
					
				</div>
				<div class="pagination justify-content-center">
								<nav aria-label="Page navigation example">
									<center>{{$annonces->links()}}</center>
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
							<img src="images/user/{{ Auth::user()->profilePicture }}" alt="" >
                                                       
						</div>
						<!-- User Name -->
						<h5 class="text-center">{{ Auth::user()->name }}</h5>
						<p>Enrégistré le {{ Auth::user()->created_at }}</p>
                                                 <a href="{{ url('/sellers.edit') }}" class="btn btn-main-sm">Modifier profile</a><br/><br/>
                                                <a href="{{ url('/sellers.password') }}" class="btn btn-main-sm">Modifier mot de passe</a>
					</div>
					<!-- Dashboard Links -->
					<div class="widget user-dashboard-menu">
						<ul>
							<li class="active">
								<a href="{{ route('home')}}"><i class="fa fa-user"></i> Mes annonces <span>{{$annonces->count()}}</span></a>
                                                        </li>
                                                        
                                                        <li>
								<a href="{{ url('/annonces/create') }}"> <i class="fa fa-plus-circle"></i> Ajouter une annonce </a>
							</li>
                          <li>
								<a href="{{ url('/temoignages/create') }}"> <i class="fa fa-plus-circle"></i> Ajouter un temoignage </a>
							</li>
                         
                            <li>
								<a href="{{ url('premium') }}"> <i class="fa fa-eye"></i> Service Premium </a>
							</li> 
                          <li>
								<a href="{{ url('/vendeurrecommandes/create') }}"> <i class="fa fa-plus-circle"></i> Devenir vendeur recommandés </a>
							</li>
							<li>
								<a href="{{ url('/besoins') }}"><i class="fa fa-bookmark-o"></i> Les besoins des clients <span>{{$besoins->count()}}</span></a>
							</li>
							<li>
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
		<!-- Row End -->
	</div>
</div>
	<!-- Container End -->

@endsection
