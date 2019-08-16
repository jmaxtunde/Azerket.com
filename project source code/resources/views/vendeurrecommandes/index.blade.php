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
                                    
                                   
							
						@forelse($vendeurrecommandes->chunk(50) as $chunk)
                                                 <h3 class="widget-heade"><center> Tous les temoignages ({{$vendeurrecommandes->count()}}) </center></h3>
					<table class="table table-responsive product-dashboard-table">
						<thead>
							<tr>
								<th>Nombre de mois</th>
								<th class="text-center">Statut</th>
								<th class="text-center">Vendeur</th>
                              <th class="text-center">phone</th>
                                <th class="text-center">whatsapp</th>
								<th class="text-center">Date de modification</th>
								<th class="text-center">Action</th>
							</tr>
						</thead>
						<tbody>
                                                       @foreach($chunk as $annonce)
                                                        <tr>
								<td class="product-thumb">
                                                                    <span class="location">{{$annonce->nbMois}}</span></td>
																	<td class="product-details">
                                                                    <center><span class="title" > {{$annonce->statut}}</span>
                                                                    </td>
								
                                                                <td class="product-details">
                                                                    <center><span class="title" > {{$annonce->user->name}}</span>
                                                                    </td>
                                                                  <td class="product-details">
                                                                    <center><span class="title" > {{$annonce->user->callPhoneNumber}}</span>
                                                                    </td>
                                                                    <td class="product-details">
                                                                    <center><span class="title" > {{$annonce->user->whatsAppNumber}}</span>
                                                                    </td>
																	<td class="product-details">
                                                                    <center><span class="title" > {{$annonce->updated_at}}</span>
                                                                    </td>
								
								<td class="action" data-title="Action">
									<div class="">
										<ul class="list-inline justify-content-center">
											
											<li class="list-inline-item">
												<a data-toggle="tooltip" data-placement="top" title="Modifier le vendeur recommande" class="edit" href="{{route('sindamvendeurrecommande.edit',['id' => $annonce->id]) }}">
													<i class="fa fa-pencil"></i>
												</a>		
											</li>
											<li class="list-inline-item">
												<a data-toggle="tooltip" data-placement="top" title="Supprimer le vendeur recommande" class="delete" href="{{route('sindamvendeurrecommande.delete',['id' => $annonce->id]) }}">
													<i class="fa fa-trash"></i>
												</a>
											</li>
										</ul>
									</div>
								</td>
							</tr>
                                                       @endforeach
        @empty
                                                <h4>Aucun temoignage</h4>
                                                 @endforelse
       
						</tbody>
					</table>
					
				</div>
                                <div class="pagination justify-content-center">
								<nav aria-label="Page navigation example">
									<center>{{$vendeurrecommandes->links()}}</center>
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
