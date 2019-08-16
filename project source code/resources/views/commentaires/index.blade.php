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
                                                    
						<h3 class="widget-heade"><center> Tous les commentaires envoyés aux vendeurs ({{$commentaires->count()}}) </center></h3>
						
						@forelse($commentaires->chunk(50) as $chunk)
                                                 <table class="table table-responsive product-dashboard-table">
						<thead>
							<tr>
								<th>Contenue </th>
                                                                <th>Sender </th>
                                                                <th>Contact </th>
                                                                <th>Annonce </th>
                                                                <th>Vendeur </th>
                                                                <th>Contact </th>
                                                                <th><center>Actions </center></th>
							</tr>
						</thead>
						<tbody>
                                                       @foreach($chunk as $annonce)
                                                        <tr>
								
                                                                 <td class="product-details">
                                                                    <span > {{$annonce->contenue}}</span>
								</td>
                                                                <td class="product-details">
                                                                    <span > {{$annonce->pseudo}}</span>
								</td>
                                                                <td class="product-details">
                                                                    <span > {{$annonce->email}}</span>
								</td>
                                                                <td class="product-details">
                                                                    <span ><center>{{$annonce->Annonce->titreAnnonce}}</center> </span>
								</td>
                                                                <td class="product-details">
                                                                    <span ><center>{{$annonce->Annonce->user->name}}</center> </span>
								</td>
                                                                <td class="product-details">
                                                                    <span ><center>{{$annonce->Annonce->user->callPhoneNumber}}</center> </span>
								</td>
                                                                
                                                                
								
								<td class="action" data-title="Action">
									<div class="">
										<ul class="list-inline justify-content-center">
											
											
                                                                                        
											<li class="list-inline-item">
												<a data-toggle="tooltip" data-placement="top" title="Supprimer le message" class="delete" href="{{route('commentaire.delete',['id' => $annonce->id]) }}">
													<i class="fa fa-trash"></i>
												</a>
											</li>
										</ul>
									</div>
								</td>
							</tr>
                                                       @endforeach
        @empty
                                                <h4>Aucun commentaire</h4>
                                                 @endforelse
       
						</tbody>
					</table>
					
				</div>
                                <div class="pagination justify-content-center">
								<nav aria-label="Page navigation example">
									<center>{{$commentaires->links()}}</center>
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
