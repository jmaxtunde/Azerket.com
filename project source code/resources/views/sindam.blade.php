@extends('layouts.admin')

@section('content')

<div style="background-color:#e9ebee;">
	<!-- Container Start -->
	<div class="container" style="background-color: white;">
	<br/>
        <div class="row">
        
            <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-0">
				<!-- Recently Favorited -->
				<div class="widget dashboard-container my-adslist">
                                    
                                   
							
						@forelse($annonces->chunk(50) as $chunk)
                                                 <h3 class="widget-heade"><center> Toutes les annonces </center></h3>
					<table class="table table-responsive product-dashboard-table">
						<thead>
							<tr>
								<th>Photos</th>
                                                                <th class="text-center">Action</th>
								<th><center>Titre </center></th>
								<th class="text-center">Categorie</th>
								
							</tr>
						</thead>
						<tbody>
                                                       @foreach($chunk as $annonce)
                                                        <tr>
								<td class="product-thumb">
                                                                    <img width="80px" height="auto" src="images/products/{{$annonce->picture}}" alt="Pas d'image"></td>
								<td class="action" data-title="Action">
									<div class="">
										<ul class="list-inline justify-content-center">
											<li class="list-inline-item">
												<a data-toggle="tooltip" data-placement="top" title="Voir l'annonce" class="view" href="{{route('annonces.show',['id' => $annonce->id]) }}">
													<i class="fa fa-eye"></i>
												</a>		
											</li>
											<li class="list-inline-item">
												<a data-toggle="tooltip" data-placement="top" title="Modifier l'annonce" class="edit" href="{{route('sindampost.edit',['id' => $annonce->id]) }}">
													<i class="fa fa-pencil"></i>
												</a>		
											</li>
											<li class="list-inline-item">
												<a data-toggle="tooltip" data-placement="top" title="Supprimer l'annonce" class="delete" href="{{route('sindampost.delete',['id' => $annonce->id]) }}">
													<i class="fa fa-trash"></i>
												</a>
											</li>
										</ul>
									</div>
								</td>
                                                                <td class="product-details">
                                                                    <h5 class="title" ><center style="color: blue;"> {{$annonce->titreAnnonce}}</center></h5>
                                                                  <span class="status active"><center><strong>Status</strong>{{$annonce->statut}}</center></span>
									
								</td>
							</tr>
                                                       @endforeach
        @empty
                                                <h4>Auncune annonce</h4>
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
             @include('include/sidebarAdmin')
			</div>
	</div>
</div>
</div>
	<!-- Container End -->

@endsection
