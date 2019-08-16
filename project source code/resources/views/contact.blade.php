<html xmlns:og="http://ogp.me/ns#" lang="fr">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Contactez-Nous || Azerket.com</title>
  <meta property="og:title" content="Contactez-Nous || Azerket.com" />
  <meta property="og:type" content="web page"/>
  <meta property="og:url" content="http://wwww.azerket.com/contact"/>
  <meta property="og:image" content="http://www.azerket.com/images/logo.png"/>
  <meta name="description" content="Contactez-Nous || Azerket.com : envoyez un message à l'entreprise en charge de azerket.com, VB-TECH" />
  <meta name="keywords" content="contact azerket.com, adresse de azerket.com, vbtech," />
  <!-- PLUGINS CSS STYLE -->
  
  <link rel="stylesheet" href="{{url('plugins/jquery-ui/jquery-ui.min.css')}}">
  <link rel="stylesheet" href="{{url('../plugins/jquery-ui/jquery-ui.min.css')}}">
  <!-- Bootstrap -->
  <link rel="stylesheet" href="{{url('plugins/bootstrap/dist/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{url('plugins/bootstrap/dist/css/main.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{url('plugins/font-awesome/css/font-awesome.min.css')}}" >
  <!-- Owl Carousel -->
  <link rel="stylesheet" href="{{url('plugins/slick-carousel/slick/slick.css')}}" >
  <link rel="stylesheet" href="{{url('plugins/slick-carousel/slick/slick-theme.css')}}">
  <!-- Fancy Box -->
  <link rel="stylesheet" href="{{url('plugins/fancybox/jquery.fancybox.pack.css')}}">
  <link rel="stylesheet" href="{{url('plugins/jquery-nice-select/css/nice-select.css')}}">
  <link rel="stylesheet" href="{{url('plugins/seiyria-bootstrap-slider/dist/css/bootstrap-slider.min.css')}}">
  <!-- CUSTOM CSS -->
  <link rel="stylesheet" href="{{url('css/style.css')}}">
	 <style>
.accordion {
    background-color: #e9ebee;
    color: #444;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    border: none;
    padding:10px;
    text-align: left;
    outline: none;
    font-size: 15px;
    transition: 0.4s;
}

 .accordion:hover {
    background-color: #5672f9;
}

.accordion:after {
    content: '\002B';
    color: #777;
    font-weight: bold;
    float: right;
    margin-left: 5px;
}


.panel {
    padding: 0 18px;
    background-color: white;
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.2s ease-out;
}
</style>
  <!-- FAVICON -->
  <link href="favicon.ico" rel="icon" type="image/png">

 </head>

@extends('layouts.app2')
@section('content')

<section class="user-profile section">
<div style="background-color:#e9ebee;">
	<div class="container" style="background-color:white;margin-top:-60px;margin-bottom:-90px">
		<div class="row">
                <div class="col-lg-8">
                     @if(Session::has('msg'))
                     <center>{{Session::get('msg')}}</center>
                     @endif 
                   <div class="review-submission">
                       <h3 class="tab-title"><center> Envoyez-nous un message</center></h3>
						  				
						  				<div class="review-submit">
											{!! Form::open(['route' => 'contact.store', 'method' => 'POST','data-parsley-validate'=>'']) !!}
 
											<div class="form-group">
												{{ Form::label('name', 'Nom') }}
												{{ Form::text('pseudo', null, array('class' => 'form-control','required'=>'','minlength'=>'5','placeholder'=>'Votre nom')) }}
											</div>
											<div class="form-group">
												{{ Form::label('email', 'Email | Telephone') }}
												{{ Form::text('email', null, array('class' => 'form-control','required'=>'','minlength'=>'5','placeholder'=>'Votre email ou phone')) }}
											</div>
											<div class="form-group">
											  {!! Form::label('message','Message') !!}
											  {!! Form::textarea('message',null,['class'=>'form-control']) !!}
											</div>
											
											
											
											<center><div class="form-group">
											 {{ Form::submit('Envoyer', array('class' => 'btn btn-transparent')) }}
											{!! Form::close() !!}
											</div></center>
						  					
						  				</div>
							  		</div>
                                                   				
         </div>
		 <div class="col-md-4">
				<div class="sidebar">
					
                                    <!-- Safety tips widget -->
					                     
					<div class="widget coupon text-center">
						<!-- Coupon description -->
						<p>Aviez-vous un produit à vendre? Poster gratuitement votre annonnce sur azerket.com.
						</p>
						<!-- Submii button -->
						<a href="{{ url('/annonces/create') }}" class="btn btn-transparent-white">Poster Maintenant</a>
                    </div>
					 <div class="widget coupon text-center">
						<!-- Coupon description -->
						<p>N'Aviez-vous pas trouver ce que vous rechercher?
                                                    Exprimer gratuitement votre besoin sur azerket.com.
						</p>
						<!-- Submii button -->
						<a href="{{ url('/besoins/create') }}" class="btn btn-transparent-white">Exprimer Maintenant</a>
                                        </div>
					
					<!-- Coupon Widget -->
					
					
				</div>
			</div>
		</div>
		            
	</div>
		
	</div></div>
</section>

@endsection
