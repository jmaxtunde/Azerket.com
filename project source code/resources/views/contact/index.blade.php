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
                                    
                                   
						<h3 class="widget-heade"><center> Tous les messages envoyés par les internautes </center></h3>
						
						@forelse($contacts->chunk(50) as $chunk)
                                                 <table class="table table-responsive product-dashboard-table">
						<thead>
							<tr>
                                                            <th><center>Actions </center></th>
                                                            <th>Messages</th>
                                                            <th>Pseudo </th>
                                                                <th>Email | Téléphone </th>
                                                                
                                                                
							</tr>
						</thead>
						<tbody>
                                                       @foreach($chunk as $annonce)
                                                        <tr>
								
                                                                <td class="action" data-title="Action">
									<div class="">
										<ul class="list-inline justify-content-center">
											
											
                                                                                        
											<li class="list-inline-item">
												<a data-toggle="tooltip" data-placement="top" title="Supprimer le message" class="delete" href="{{route('contact.delete',['id' => $annonce->id]) }}">
													<i class="fa fa-trash"></i>
												</a>
											</li>
										</ul>
									</div>
								</td>
                                                                <td class="product-details">
                                                                    <span > {{$annonce->message}}</span>
								</td>
                                                                <td class="product-details">
                                                                    <span > {{$annonce->pseudo}}</span>
								</td>
                                                                <td class="product-details">
                                                                    <span > {{$annonce->email}}</span>
								</td>
                                                                
                                                                
                                                                
								
								
							</tr>
                                                       @endforeach
        @empty
                                                <h4>Aucun message</h4>
                                                 @endforelse
       
						</tbody>
					</table>
					
				</div>
                                <div class="pagination justify-content-center">
								<nav aria-label="Page navigation example">
									<center>{{$contacts->links()}}</center>
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
