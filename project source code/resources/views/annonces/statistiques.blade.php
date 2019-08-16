@extends('layouts.admin')
@section('content')
<div style="background-color:#e9ebee;">
    
    <div class="container" style="background-color:white;">
      
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-md-offset-2">
				<!-- Section title -->
				<div class="section-title">
					<h2>Toutes les categories</h2>
					<p> Toutes les annonces postés par categorie</p>
				</div>
				<div class="row">
					<!-- Category list -->
                                    @foreach($souscategorie as $sous =>$souscategorie)
					<div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
						<div class="category-block">
							<div class="header">
								
                                                            <h4>{{$sous}}</h4> <span>{{$souscategorie->count()}}</span>
							</div>
							
						</div>
					</div>
                                    @endforeach
                                    
				</div>
	            </div>		
		</div>
	</div>
       

					
            </div>
       
    </div>
@endsection