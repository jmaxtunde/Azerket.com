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
                                    
                                   
							
						@forelse($categories->chunk(50) as $chunk)
                                                 <h3 class="widget-heade"><center> Toutes les catégories ({{$categories->count()}}) </center></h3>
					<table class="table table-responsive product-dashboard-table">
						<thead>
							<tr>
								<th>Libelle </th>
                                                                <th><center>Actions </center></th>
							</tr>
						</thead>
						<tbody>
                                                       @foreach($chunk as $annonce)
                                                        <tr>
								
                                                                <td class="product-details">
                                                                    <span > {{$annonce->libelle}}</span>
								</td>
                                                                
								
								<td class="action" data-title="Action">
									<div class="">
										<ul class="list-inline justify-content-center">
											
											<li class="list-inline-item">
												<a data-toggle="tooltip" data-placement="top" title="Nouveau categorie" class="edit" href="{{route('categorie.create')}}">
													<i class="fa fa-plus"></i>
												</a>		
											</li>
                                                                                        
											<li class="list-inline-item">
												<a data-toggle="tooltip" data-placement="top" title="Supprimer le besoin" class="delete" href="{{route('categorie.delete',['id' => $annonce->id]) }}">
													<i class="fa fa-trash"></i>
												</a>
											</li>
										</ul>
									</div>
								</td>
							</tr>
                                                       @endforeach
        @empty
                                                <h4>Auncune annonce</h4>
                                                 @endforelse
       
						</tbody>
					</table>
					
				</div>
			</div>
			<div class="col-md-10 offset-md-1 col-lg-4 offset-lg-0">
                               @include('include/sidebarAdmin')
			</div>
	</div>
</div>
</div>
	<!-- Container End -->

@endsection
