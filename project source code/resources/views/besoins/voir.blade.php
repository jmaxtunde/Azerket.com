@extends('layouts.master2')

@section('content')

<div style="background-color:#e9ebee;">
	<!-- Container Start -->
	<div class="container" style="background-color: white;">
	<br/>
        <div class="row">
        
            <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-0">
				<!-- Recently Favorited -->
				<div class="widget dashboard-container my-adslist">
                                    
                                   
							
						@forelse($besoins->chunk(50) as $chunk)
                                                 <h3 class="widget-heade"><center> Tous les besoins ({{$besoins->count()}}) </center></h3>
					<table class="table table-responsive product-dashboard-table">
						<thead>
							<tr>
								<th>Titre</th>
								<th class="text-center">Position</th>
								<th class="text-center">Action</th>
							</tr>
						</thead>
						<tbody>
                                                       @foreach($chunk as $annonce)
                                                        <tr>
								<td class="product-thumb">
                                                                    <span class="location">{!!$annonce->titre!!}</span>
								
                                                                <td class="product-details">
                                                                    <center><span class="title" ><strong>Position:</strong> {{$annonce->location}}</span>
                                                                    <span><strong>Ajouté:</strong> <time>{{$annonce->created_at}}</time> </span>
									<span class="status active"><strong>Status</strong>{{$annonce->statut}}</span>
									<span class="location"><strong>Contact</strong>{{$annonce->phoneNumber}}</span>
                                                                    </center>
                                                                    </td>
								
								<td class="action" data-title="Action">
									<div class="">
										<ul class="list-inline justify-content-center">
											
											<li class="list-inline-item">
												<a data-toggle="tooltip" data-placement="top" title="Modifier le besoin" class="edit" href="{{route('sindambesoins.edit',['id' => $annonce->id]) }}">
													<i class="fa fa-pencil"></i>
												</a>		
											</li>
											<li class="list-inline-item">
												<a data-toggle="tooltip" data-placement="top" title="Supprimer le besoin" class="delete" href="{{route('sindambesoin.delete',['id' => $annonce->id]) }}">
													<i class="fa fa-trash"></i>
												</a>
											</li>
										</ul>
									</div>
								</td>
							</tr>
                                                       @endforeach
        @empty
                                                <h4>Aucun besoin</h4>
                                                 @endforelse
       
						</tbody>
					</table>
					
				</div>
                                <div class="pagination justify-content-center">
								<nav aria-label="Page navigation example">
									<center>{{$besoins->links()}}</center>
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
