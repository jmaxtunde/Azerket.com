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
                                                    
						<h3 class="widget-heade"><center> Tous requetes de boostages </center></h3>
						
						@forelse($booster->chunk(50) as $chunk)
                                                 <table class="table table-responsive product-dashboard-table">
						<thead>
							<tr>
								<th>Vendeur </th>
                                                                <th>Annonce </th>
                                                                <th>Budget </th>
                                                                <th>statut </th>
                                                                <th><center>Actions </center></th>
							</tr>
						</thead>
						<tbody>
                                                       @foreach($chunk as $boost)
                                                        <tr>
								
                                                                 <td class="product-details">
                                                                    <span > {{$boost->annonce_id}}</span>
								</td>
                                                                <td class="product-details">
                                                                    <span > {{$boost->user_id}}</span>
								</td>
                                                                <td class="product-details">
                                                                    <span > {{$boost->budget}}</span>
								</td>
                                                                <td class="product-details">
                                                                    <span ><center>{{$boost->statut}}</center> </span>
								</td>
                                                                <td class="action" data-title="Action">
									<div class="">
										<ul class="list-inline justify-content-center">
											
											
                                                                                        
											<li class="list-inline-item">
												<a data-toggle="tooltip" data-placement="top" title="Modifier" class="edit" href="{{route('boosters.edit',['id' => $boost->id]) }}">
													<i class="fa fa-edit"></i>
												</a>
											</li>
										</ul>
									</div>
								</td>
							</tr>
                                                       @endforeach
        @empty
                                                <h4>Aucune annonce à booster</h4>
                                                 @endforelse
       
						</tbody>
					</table>
					
				</div>
                                <div class="pagination justify-content-center">
								<nav aria-label="Page navigation example">
									<center>{{$booster->links()}}</center>
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
