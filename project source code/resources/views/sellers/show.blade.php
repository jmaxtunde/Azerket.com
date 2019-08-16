@extends('layouts.app1')

@section('content')
<div style="background-color:#e9ebee;">
<div class="container" style="background-color: white;">
<div class="row">
			<div class="col-md-12">
				<div class="section-title">
                  <br/><h2>Approchez, Regardez y a beaucoup de nouveautés...</h2>
				</div>
	@forelse($user->chunk(20) as $chunk)
            @foreach($chunk as $annonce)
	<center><div class="product-meta">
						<ul class="list-inline">
							<li class="list-inline-item"><i class="fa fa-user-o"></i> Vendeur: {{ $annonce->user->name }}</li>
							<li class="list-inline-item"><i class="fa fa-envelope"></i> Email: {{ $annonce->user->email }}</li>
							<li class="list-inline-item"><i class="fa fa-phone"></i> Contact: {{ $annonce->user->callPhoneNumber }}</a></li>
							<li class="list-inline-item"><i class="fa fa-whatsapp"></i> WhatsApp: {{ $annonce->user->whatsAppNumber }}</li>
						</ul>
	</div></center>	
	@endforeach
			@empty
				<h3>Aucun utilisateurs</h3>
		@endforelse
			</div>
		</div>
		<br/>
  
    <div class="row">
			<!-- offer 01 -->
         
        @forelse($annonces->chunk(20) as $chunk)
            @foreach($chunk as $annonce)
		    
                    <div class="col-sm-12 col-lg-3">
                        <div class="product-item bg-light">
                                <div class="card">
                                    <div class="thumb-content"> 
                                        <!-- <div class="price">$200</div> -->
                                                <a href="{{route('annonces.show',['id' => $annonce->id]) }}">
													<br/><center><img class="card-img-top img-fluid" src="../images/products/{{$annonce->picture}}" class="img-responsive" style="width:250px;  height:250px;" alt="{{$annonce->titreAnnonce}}"></center>
                                                </a>
                                    </div>
                                    <div class="card-body">
										<center>
											<h4 class="card-title" ><center><a href="{{route('annonces.show',['id' => $annonce->id]) }}" style="color: blue;">{{$annonce->titreAnnonce}}</a></center></h4>
											<h5 class="card-title"><a href="{{route('annonces.show',['id' => $annonce->id]) }}"> <center>{{$annonce->prix}}</center></a></h5>
											<ul class="list-inline product-meta">
												<li class="list-inline-item">
													 <span class="glyphicon glyphicon-map-marker"></span><a href="/annonces/{{$annonce->id}}">   Position: {{$annonce->lieu}}</a>
												</li>
												
											</ul>
										<div class="product-ratings">
											<ul class="list-inline">
												<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
												<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
												<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
												<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
											</ul>
										</div>
                                                                                        <a href="{{route('annonces.show',['id' => $annonce->id]) }}">{{ Form::submit('Consulter', array('class' => 'btn btn-transparent')) }}</a>
                                            
										</center>
                                    </div>
                                    </a>
                                </div>
                        </div>
                    </div>
            @endforeach
			@empty
				<h3>Aucun Produit</h3>
		@endforelse
        </div>
<div class="pagination justify-content-center">
								<nav aria-label="Page navigation example">
									<center>{{$annonces->links()}}</center>
									</nav>
									</div>
									<br/><br/>
	<div>	
	</div>

</div>

@endsection
