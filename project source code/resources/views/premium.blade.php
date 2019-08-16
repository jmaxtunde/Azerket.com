<html xmlns:og="http://ogp.me/ns#" lang="fr">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Service Premium || Azerket.com</title>
  <meta property="og:title" content="Service premium || Azerket.com" />
  <meta property="og:type" content="web page"/>
  <meta property="og:url" content="http://wwww.azerket.com/premium"/>
  <meta property="og:image" content="http://www.azerket.com/images/logo.png"/>
  <meta name="description" content="Service Premium || Azerket.com : Booster vos annonces grace à notre service de premium" />
  <meta name="keywords" content="booster annonce, referencer annonce, visibilité de produit," />
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

<section class="user-profile section">
<div style="background-color:#e9ebee;">
	<div class="container" style="background-color:white;margin-top:-60px;margin-bottom:-90px">
            <div class="row">
                    <div class="col-lg-12">

<hr />
                        <h2> <center> Service Premium</center> </h2>
                        <h4> <center> Faites la promotion de vos annonces suivant ces plans tarifaires</center> </h4>

                     <p>NB: Remplissez le formulaire correspondant à l'option choisie. Le payment se fera d'abord par mobile money sur ce numéro + 229 66 33 87 29. D'autres moyens de payements seront disponible très prochainement.</p>

                    </div>
            </div>

            <hr />
            
            <div class="row">
                    <div class="col-lg-12">
                            <ul class="pricing-table" >
                                <li class="col-lg-4" style="float:right" >
                                        <h3>Booster votre annonce</h3>
                                        <div class="price-body">
                                                <div class="price">
                                                        <span class="price-figure">3.00 F</span>
                                                        <span class="price-term">Par Jour</span>
                                                </div>
                                            
                                        </div>
                                        <div class="features">
                                                <ul>
                                                        <li>Option vendeur recommendé version journalière <br/>+</li>
                                                        <h6>Procedure pour booster votre annonce</h6>
                                                        <li><span class="fa fa-hand-o-right"></span> Cliquer sur commencer </li>
                                                        <li ><span class="fa fa-hand-o-right"></span> Choississez l'annonce et cliquez sur l'icone booster </li>
                                                        <li ><span class="fa fa-hand-o-right"></span> Definissez votre budget </li>
                                                        <li><span class="fa fa-hand-o-right"></span> votre annonce appaitra parmi les premières annonces dès que nous recevons l'alerte de la bank ou de l'opérateur mobile. </li>
                                                </ul>
                                        </div>
                                        
                                       
                                        <div class="footer">
                                                <a href="{{url('/vendeurrecommandes/create')}}" class="btn btn-info btn-rect">Commencer</a>
                                        </div>
                                </li>
                                <li class="active danger col-lg-4" style="float:right">
                                        <h3>Vendeur Recommandé </h3>
                                        <div class="price-body">
                                                <div class="price">
                                                        <span class="price-figure">8.000 F</span>
                                                        <span class="price-term">Par mois</span>
                                                </div>
                                            
                                        </div>
                                        <span class="price-figure">SPECIAL PROMO</span>
                                        <div class="price-body">
                                                <div class="price">
                                                        <span class="price-figure">5.000 F</span>
                                                        <span class="price-term">Le mois</span>
                                                </div>
                                            
                                        </div>

                                        <div class="features">
                                            <ul >
                                                        
                                                        <li style="color: white">Option : Gratuite  <br/>+</li>
                                                        <li style="color: white"><span class="fa fa-hand-o-right"></span>Bon réferencement</li>
                                                        <li style="color: white"><span class="fa fa-hand-o-right"></span>Client peut voir vos autres annonces</li>
                                                        <li style="color: white"><span class="fa fa-hand-o-right"></span>Avoir au moin un article dans la rubrique marketing "Annonce du jour"</li>
                                                        <li style="color: white"><span class="fa fa-hand-o-right"></span>Avoir plus d'articles le catalogue hebdommadaire et une description complète de votre entreprise</li>
                                                        <li style="color: white"><span class="fa fa-hand-o-right"></span>Fait l'objet d'au moin un article à publier sur notre blog dans le mois</li>
                                                        <li style="color: white"><span class="fa fa-hand-o-right"></span><strong>Bénéficie de notre Audience</strong> sur nos réseaux sociaux</li>
                                                        
                                                </ul>
                                        </div>
                                        <div class="footer">
                                                <a href="{{route('home')}}" class="btn btn-metis-1 btn-lg btn-rect">Commencer....</a>
                                        </div>
                                </li>
                                <li class="col-lg-4" float:right>
                                        <h3>Gratuit</h3>
                                        <div class="price-body">
                                                <div class="price">
                                                        <span class="price-figure"> 0 F </span>
                                                        <span class="price-term"> Par annonce</span>
                                                </div>
                                        </div>
                                        <div class="features">
                                                <ul>
                                                        <li><span class="fa fa-hand-o-right"></span> Créer Compte gratuit</li>
                                                        <li><span class="fa fa-hand-o-right"></span> Publication annonce gratuite</li>
                                                        <li><span class="fa fa-hand-o-right"></span> Voir les besoins des clients </li>
                                                        <li><span class="fa fa-hand-o-right"></span> Partage sur vos réseaux sociaux</li>
                                                        
                                                </ul>
                                            <br/>
                                            <br/>
                                            <br/>
                                            <br/>
                                        </div>
                                        <div class="footer">
                                                <a href="{{ url('/annonces/create') }}" class="btn btn-info btn-rect">Commencer ...</a>
                                        </div>
                                </li>

                        </ul>
                  
                        <div class="clearfix"></div>
                    </div>

            </div>
	
        </div>
		            
</div>
</section>

@endsection
