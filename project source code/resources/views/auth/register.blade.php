<html xmlns:og="http://ogp.me/ns#" lang="fr">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Inscription || Azerket.com</title>
  <meta property="og:title" content="Inscription || Azerket.com" />
  <meta property="og:type" content="web page"/>
  <meta property="og:url" content="http://wwww.azerket.com/register"/>
  <meta property="og:image" content="http://www.azerket.com/images/logo.png"/>
  <meta name="description" content="Inscription || Azerket.com: S'inscrire pour devenir vendeur de azerket.com,ajouter, de modifier ou de supprimer votre annonce, voir les besoins des vendeurs" />
  <meta name="keywords" content="inscription sur azerket, comment devenir vendeur, vendre sur azerket" />
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
@extends('layouts.app')
@section('content')
<div style="background-color:#FAFAFA;">
<div class="container">
    <div class="row">
        <div class="col-md-9 col-md-offset-2">
			
            <div class="widget personal-info">
              @if(count($errors)>0)
                                    <ul>
                                        @foreach($errors->all() as $error)
                                            <li class="alert alert-danger">{{$error}}</li>
                                        @endforeach
                                    </ul>
                                @endif
                <h3 class="widget-header user"><center>Inscription</center></h3>
                    <center>
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                        <label for="nom" class="col-md-4 control-label">Nom </label>
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">

                            <div class="col-md-10">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Nom ou entreprise" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <label for="telephone" class="col-md-4 control-label">N° Téléphone </label>
                        <div class="form-group{{ $errors->has('callPhoneNumber') ? ' has-error' : '' }}"><br/>

                            <div class="col-md-10">
                                <input id="name" type="text" class="form-control"  name="callPhoneNumber" value="{{ old('callPhoneNumber') }}" placeholder="Tel sans espace " required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('callPhoneNumber') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <label for="email" class="col-md-4 control-label">Addresse E-Mail </label>
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}"><br/>

                            <div class="col-md-10">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder=" Votre E-Mail " required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <label for="password" class="col-md-4 control-label">Mot de passe </label>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <br/>

                            <div class="col-md-10">
                                <input id="password" type="password" class="form-control" name="password" placeholder="votre mot de passe" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <label for="confirmation" class="col-md-4 control-label">Confirmation </label>
                        <div class="form-group"><br/>
                            
                            <div class="col-md-10">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirmation" required>
                            </div>
                        </div>
                      <input type="hidden" id="recommended" name="recommended" value="No">
                        <p>En vous enrégistrant, vous acceptez les <a class="btn btn-link" href="{{ route('terme') }}">conditions d'utilisation</a> <br/> et <a class="btn btn-link" href="{{ route('contrat') }}"> de confidentialité</a> de Azerket.com</p>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-transparent">
                                    Enrégistrer
                                </button>
                            </div>
                        </div>
                    </form>
                    </center>
                </div>
            </div>
             <div class="col-md-3">
				<div class="sidebar">
					
                                    <!-- Safety tips widget -->
					<div class="widget disclaimer">
                                            <h3 class="widget-header" style="color:red;"><center>Pourquoi s'enrégistrer ?</center></h3>
						<ul>
                                                    <li> <span class="fa fa-hand-o-right"></span>  Donne droit à une identité en tant que vendeur de Azerket.com</li><br/>
							<li><span class="fa fa-hand-o-right"></span>  Permet d'ajouter, de modifier ou de supprimer votre annonce </li><br/>
							<li> <span class="fa fa-hand-o-right"></span>  Voir les besoins des clients </li><br/>
                                                        <li> <span class="fa fa-hand-o-right"></span>  Booster vos annonces </li><br/>
							<li><span class="fa fa-hand-o-right"></span>  Configurer votre compte (Personnel ou entreprise)</li><br/>
                                                        <li><span class="fa fa-hand-o-right"></span>  Beaucoup d'autres....</li><br/>
						</ul>
					</div>
                                        <div class="widget coupon text-center">
						<!-- Coupon description -->
						<p>De quoi ont besoin les clients?
						</p>
						<!-- Submii button -->
						<a href="{{ url('/besoins') }}" class="btn btn-transparent-white">Voir Maintenant</a>
                                        </div>
					
					
				</div>
	    </div>
        </div>
    </div>
</div>
@endsection
