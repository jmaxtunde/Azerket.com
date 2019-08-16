<html xmlns:og="http://ogp.me/ns#" lang="fr">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Azerket.com : Achat, vente et Troc</title>
  <meta property="og:title" content="Azerket.com : Achat, vente et Troc" />
  <meta property="og:type" content="article"/>
  <meta property="og:url" content="http://wwww.azerket.com"/>
  <meta property="og:image" content="http://www.azerket.com/images/logo.jpg"/>
  <meta name="description" content="Azerket.com est une plateforme de marché en ligne où vous pouvez acheter, vendre ou échanger vos produits ou services. Avec azerket.com, vendez rapidement et sans limite;
          achetez intelligemment les produits et services." />
  <meta name="keywords" content="azerket, azerket.com, azerketcom, marketplace benin,achat benin, vente benin, troc benin" />
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
  
                            <link href="https://snatchbot.me/sdk/webchat.css" rel="stylesheet" type="text/css"><script src="https://snatchbot.me/sdk/webchat.min.js"></script><script> Init('?botID=47728&appID=webchat', 600, 600, 'https://dvgpba5hywmpo.cloudfront.net/media/image/BRgSpGdGtLlCilAxvN2YlL47d', 'bubble', '#00AFF0', 90, 90, 62.99999999999999, '', '1', '#FFFFFF', '#FFFFFF', 1); /* for authentication of its users, you can define your userID (add &userID={login}) */ </script>
                       
  
	 <style>
.accordion {
    background-color: white;
    
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
<style type="text/css">
<!--
a.gflag {vertical-align:middle;font-size:16px;padding:1px 0;background-repeat:no-repeat;background-image:url(//gtranslate.net/flags/16.png);}
a.gflag img {border:0;}
a.gflag:hover {background-image:url(//gtranslate.net/flags/16a.png);}
#goog-gt-tt {display:none !important;}
.goog-te-banner-frame {display:none !important;}
.goog-te-menu-value:hover {text-decoration:none !important;}
body {top:0 !important;}
#google_translate_element2 {display:none!important;}
-->
</style>  

  <!-- FAVICON -->
  <link href="favicon.ico" rel="icon" type="image/png">

 </head>
<body>
<div class="se-pre-con"></div>

<section class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
	<div class="container">
		<div class="row">
			<div class="col-md-12 ">
			<nav class="navbar navbar-expand-lg navbar-light ">
			  
			  <a class="navbar-brand" href="{{ route('index') }}">
						<img src="images/logo.png" alt="">
                                                
			  </a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			  </button>

			  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
				<ul class="navbar-nav ml-auto main-nav ">
							<li class="nav-item active">
								<a class="nav-link" href="{{ route('index') }}">Accueil</a>
							</li>
                                                        <li class="nav-item dropdown dropdown-slide">
								<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Achats <span><i class="fa fa-angle-down"></i></span>
								</a>
								<!-- Dropdown list -->
								<div class="dropdown-menu dropdown-menu-right">
									<a class="dropdown-item" href="{{ route('allannounce') }}">Tous les produits</a>
									<a class="dropdown-item" href="{{route('annonces.affcategorie',['categorie' => 'Moyens de déplacements']) }}">Moyens de déplacements</a>
									<a class="dropdown-item" href="{{route('annonces.affcategorie',['categorie' => 'Téléphones et Tablettes']) }}">Téléphones et Tablettes</a>
									<a class="dropdown-item" href="{{route('annonces.affcategorie',['categorie' => 'Electroniques']) }}">Electronique (PC, USB, TV, DVD)</a>
                                                                        <a class="dropdown-item" href="{{route('annonces.affcategorie',['categorie' => 'Fashions']) }}">  Fashions (Sacs, Habits,Montre...)</a>
                                                                        <a class="dropdown-item" href="{{route('annonces.affcategorie',['categorie' => 'Services Immobiliers']) }}">Immobiliers (Maison à louer, à vendre..)</a>
                                                                        <a class="dropdown-item" href="{{route('annonces.affcategorie',['categorie' => 'Animaux']) }}">Animaux(Chat, Chien, Produit animal..)</a>
                                                                        <a class="dropdown-item" href="{{route('annonces.affcategorie',['categorie' => 'Produits de Beauté et de santé']) }}">Produits de Beauté et de santé</a>
                                                                        <a class="dropdown-item" href="{{route('annonces.affcategorie',['categorie' => 'Articles Bébés-Enfants']) }}">Articles Bébés-Enfants</a>
                                                                        
                                                                </div>
							</li>
							
							
							<li class="nav-item dropdown dropdown-slide">
								<a class="nav-link dropdown-toggle" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Besoins <span><i class="fa fa-angle-down"></i></span>
								</a>
								<!-- Dropdown list -->
								<div class="dropdown-menu dropdown-menu-right">
									<a class="dropdown-item" href="{{ url('/besoins/create') }}">Exprimez votre besoin</a>
									<a class="dropdown-item" href="{{ url('/besoins') }}">Voir les besoins des clients</a>
								</div>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="https://azerketcom.blogspot.com" target = "_blank"> Blog</a>
							</li>
							<li class="nav-item active">
								<a class="nav-link" href="{{ route('faq') }}">FAQ</a>
							</li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
                                <!-- Authentication Links -->
                                @guest
									<li class="nav-item">
										<a   class="nav-link login-button" href="{{ route('register')}}">  Inscription</a>
									</li>
									<li class="nav-item">
										<a class="nav-link login-button" href="{{ url('/annonces/create') }}"> <i class="fa fa-plus-circle"></i> Vendre</a>
									</li>
                                    @else
                                    <li class="nav-item dropdown dropdown-slide">
										<a class="nav-link dropdown-toggle" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <img src="images/user/{{ Auth::user()->profilePicture }}" alt="" class="img-responsive" style="width:15px;  height:15px;" alt="">{{ Auth::user()->name }}</a>
											<div class="dropdown-menu dropdown-menu-right">
												<a class="nav-link login-button" href="{{ url('/annonces/create') }}"> <i class="fa fa-plus-circle"></i> Vendre</a>
												<a class="dropdown-item" href="{{ url('/sellers.edit') }}"> <i class="fa fa-user"></i> Modifier profile</a>
                                                                                                <a href="{{ url('/sellers.password') }}"><i class="fa fa-user-secret"></i>Modifier mot de passe</a>
												<a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                                    <i class="fa fa-btn fa-sign-out"></i>Deconnexion
                                                 </a>
												<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
											</div>
				    </li>
                                @endguest
						 </ul>
			  </div>
			</nav>
				
			</div>
		</div>
	</div>
</section>

  @if(Session::has('msg'))
                     <center>{{Session::get('msg')}}</center>
                     @endif
<section class="hero-area bg-1 text-center " style="margin-top:-10px;">
	<!-- Container Start -->
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-lg-12">
				<!-- Header Contetnt -->
				<div class="content-block">
                                    
					<br/><br/>
                                        <h1 style="text-align:right;">Achats - Ventes - Trocs</h1>
					<p style="text-align:right;"> Azerket.com, Offrez-vous le meilleur produit, Pour de meilleur prix près de chez vous.</p>
				</div>
				
			</div>
		</div>
	</div>
	<!-- Container End -->
</section>

<!--===========================================
=  For research and categories menu later           =
============================================-->

<!--===========================================
=  25 at almost article =
============================================-->

<section class="popular-deals section bg-gray">
	<div class="container" style="background-color:white;margin-top:-90px;margin-bottom:-80px;">
      <br/><br/>
		
	  <center>
                <a href="#" onclick="doGTranslate('fr|en');return false;" title="English" class="gflag nturl" style="background-position:-0px -0px;"><img src="//gtranslate.net/flags/blank.png" height="16" width="16" alt="English" /></a><a href="#" onclick="doGTranslate('fr|fr');return false;" title="French" class="gflag nturl" style="background-position:-200px -100px;"><img src="//gtranslate.net/flags/blank.png" height="16" width="16" alt="French" /></a><a href="#" onclick="doGTranslate('fr|de');return false;" title="German" class="gflag nturl" style="background-position:-300px -100px;"><img src="//gtranslate.net/flags/blank.png" height="16" width="16" alt="German" /></a><a href="#" onclick="doGTranslate('fr|it');return false;" title="Italian" class="gflag nturl" style="background-position:-600px -100px;"><img src="//gtranslate.net/flags/blank.png" height="16" width="16" alt="Italian" /></a><a href="#" onclick="doGTranslate('fr|pt');return false;" title="Portuguese" class="gflag nturl" style="background-position:-300px -200px;"><img src="//gtranslate.net/flags/blank.png" height="16" width="16" alt="Portuguese" /></a><a href="#" onclick="doGTranslate('fr|ru');return false;" title="Russian" class="gflag nturl" style="background-position:-500px -200px;"><img src="//gtranslate.net/flags/blank.png" height="16" width="16" alt="Russian" /></a><a href="#" onclick="doGTranslate('fr|es');return false;" title="Spanish" class="gflag nturl" style="background-position:-600px -200px;"><img src="//gtranslate.net/flags/blank.png" height="16" width="16" alt="Spanish" /></a><a href="#" onclick="doGTranslate('fr|yo');return false;" title="Yoruba" class="gflag nturl" style="background-position:-700px -900px;"><img src="//gtranslate.net/flags/blank.png" height="16" width="16" alt="Yoruba" /></a>
 
				<br /><select onchange="doGTranslate(this);"><option value="">Select Language</option><option value="fr|ar">Arabic</option><option value="fr|zh-CN">Chinese (Simplified)</option><option value="fr|en">English</option><option value="fr|fr">French</option><option value="fr|de">German</option><option value="fr|it">Italian</option><option value="fr|ja">Japanese</option><option value="fr|ko">Korean</option><option value="fr|pt">Portuguese</option><option value="fr|ru">Russian</option><option value="fr|es">Spanish</option><option value="fr|yo">Yoruba</option><option value="fr|zu">Zulu</option></select><div id="google_translate_element2"></div>

 <br /> <br /> 
        		
        		<a href="{{ url('/annonces/create') }}" > <button type="button" class="btn btn-success"><i class="fa fa-bullhorn"></i>Publier gratuitement</button></a>
      
      </center>
		<br/>
      
<!-- GTranslate: https://gtranslate.io/ -->
      
      

           	
<!--==========================================
=            All Category Section            =
===========================================-->

<section class=" section" style="margin-top:-100px;margin-bottom:-100px;">
	<!-- Container Start -->
	<div class="container">
		<div class="row">
			<div class="col-12">
				<!-- Section title -->
				<div class="section-title">
									<p>Parcourez certaines de nos catégories les plus populaires.</p>
				</div>
				<div class="row">
					<!-- Category list -->
					<div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
						<div class="category-block">
							<button class="accordion">
								<i class="fa fa-car icon-bg-6"></i> 
								Moyens roulants
							</button>
							<div class="panel"><ul class="category-list" >
								<li><a href="{{route('annonces.affcategorie',['categorie' => 'Voitures']) }}">Voitures</li>
								<li><a href="{{route('annonces.affcategorie',['categorie' => 'Motos']) }}">Motos </a></li>
								<li><a href="{{route('annonces.affcategorie',['categorie' => 'Tricycles']) }}">Tricycles  </a></li>
								<li><a href="{{route('annonces.affcategorie',['categorie' => 'Pièces de voitures']) }}">Pièces de voitures</a></li>
                              </ul></div></div>
					
					</div><br/> <!-- /Category List -->
					<!-- Category list -->
					<div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
						<div class="category-block">
							<button class="accordion">
								<i class="fa fa-mobile icon-bg-8"></i> 
								Télephones 
							</button>
							<div class="panel"><ul class="category-list" >
								<li><a href="{{route('annonces.affcategorie',['categorie' => 'Téléphones Androides']) }}">Téléphones Androides </a></li>
								<li><a href="{{route('annonces.affcategorie',['categorie' => 'Téléphones Iphones']) }}">Téléphones Iphones </a></li>
								<li><a href="{{route('annonces.affcategorie',['categorie' => 'Téléphones Simples']) }}">Téléphones Simples </a></li>
								<li><a href="{{route('annonces.affcategorie',['categorie' => 'Tablettes']) }}">Tablettes</a></li>
                              </ul></div>
                      </div>
					</div> <!-- /Category List -->
					<!-- Category list -->
					<div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
						<div class="category-block">
							<button class="accordion">
								<i class="fa fa-laptop icon-bg-3"></i> 
								 Electroniques
							</button>
							<div class="panel"><ul class="category-list" >
								<li><a href="{{route('annonces.affcategorie',['categorie' => 'Ordinateurs']) }}">Ordinateurs </a></li>
								<li><a href="{{route('annonces.affcategorie',['categorie' => 'TV - DVD']) }}">TV - DVD </a></li>
								<li><a href="{{route('annonces.affcategorie',['categorie' => 'Jeux Vidéos']) }}">Jeux Vidéos  </a></li>
								<li><a href="{{route('annonces.affcategorie',['categorie' => 'Appareils photos']) }}">Appareils photos </a></li>
                              </ul>
						</div></div>
					</div> <!-- /Category List -->
					<!-- Category list -->
					<div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
						<div class="category-block">
                          <button class="accordion"><i class="fa fa-shopping-basket icon-bg-4"></i> Shoppings 
                                  </button>
							
							<div class="panel"><ul class="category-list" >
								<li><a href="{{route('annonces.affcategorie',['categorie' => 'Sacs']) }}">Sacs </a></li>
								<li><a href="{{route('annonces.affcategorie',['categorie' => 'Habits']) }}">Habits </a></li>
								<li><a href="{{route('annonces.affcategorie',['categorie' => 'Pagnes']) }}">Pagnes </a></li>
								<li><a href="{{route('annonces.affcategorie',['categorie' => 'Chaussures']) }}">Chaussures </a></li>
								<li><a href="{{route('annonces.affcategorie',['categorie' => 'Montres']) }}">Montres </a></li>
							</ul>
                          </div>         
						</div>
					</div><!-- /Category List -->
					<!-- Category list -->
					<div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
						<div class="category-block">	
                      <button class="accordion">
								<i class="fa fa-briefcase icon-bg-5"></i> 
								Jobs
							</button>
							<div class="panel"><ul class="category-list" >
								<li><a href="{{route('annonces.affcategorie',['categorie' => 'Comptabilité']) }}">Comptabilité </a></li>
								<li><a href="{{route('annonces.affcategorie',['categorie' => 'Agriculture']) }}">Agriculture </a></li>
								<li><a href="{{route('annonces.affcategorie',['categorie' => 'Santé']) }}">  Santé</a></li>
								<li><a href="{{route('annonces.affcategorie',['categorie' => 'Education']) }}">Education</a></li>
                              </ul></div>
                      </div></div> <!-- /Category List -->
					<!-- Category list -->
					<div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
						<div class="category-block">
                      <button class="accordion">
								<i class="fa fa-home icon-bg-3"></i> 
								Services Immobiliers
							</button>
							<div class="panel"><ul class="category-list" >
								<li><a href="{{route('annonces.affcategorie',['categorie' => 'Terre A Vendre']) }}"> 	Parcelles à vendre </a></li>
								<li><a href="{{route('annonces.affcategorie',['categorie' => ' 	Boutiques A louer']) }}"> 	Boutiques à louer</a></li>
								<li><a href="{{route('annonces.affcategorie',['categorie' => 'Maisons ou Appartement à louer']) }}">Maisons ou Appartement à louer </a></li>
								<li><a href="{{route('annonces.affcategorie',['categorie' => 'Maisons ou Appartement à vendre']) }}">Maisons ou Appartement à vendre </a></li>
							</ul>
						</div>
                      </div>
					</div> <!-- /Category List -->
					<!-- Category list -->
					<div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
						<div class="category-block">
							<button class="accordion">
								<i class="fa fa-server icon-bg-1"></i> 
								Services
							</button>
							<div class="panel"><ul class="category-list" >
								<li><a href="{{route('annonces.affcategorie',['categorie' => 'Peintre-Dessinateur']) }}">Peintre-Dessinateur </a></li>
								<li><a href="{{route('annonces.affcategorie',['categorie' => 'Photographie et Vidéos']) }}">Photographie et Vidéos </a></li>
								<li><a href="{{route('annonces.affcategorie',['categorie' => 'TIC']) }}"> TIC</a></li>
								<li><a href="{{route('annonces.affcategorie',['categorie' => 'Entretiens']) }}">Entretiens</a></li>
                              </ul>
                          </div></div>
					</div> <!-- /Category List -->
					<!-- Category list -->
					<div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
						<div class="category-block">	
                      <button class="accordion">
								<i class="fa fa-comment icon-bg-8"></i> 
								Evènements
							</button>
							  <div class="panel"><ul class="category-list" >
								<li><a href="{{route('annonces.affcategorie',['categorie' => 'Formations']) }}"> Formations</a></li>
								<li><a href="{{route('annonces.affcategorie',['categorie' => 'Seminaires']) }}">Seminaires</a></li>
								<li><a href="{{route('annonces.affcategorie',['categorie' => 'Conférences']) }}">Conférences</a></li>
								<li><a href="{{route('annonces.affcategorie',['categorie' => 'Soiré de Gala']) }}">Soiré de Gala</a></li>
                                </ul>
						</div>
                      </div>
					</div> <!-- /Category List -->
					
					
				</div>
			</div>
		</div>
	</div>
	<!-- Container End -->
</section>
<hr/>
 <div class="row">
			<div class="col-md-12">
				<!-- Advance Search -->
				
				<div class="container" style="background-color:white;">		
                <div class="row">
			<div class="col-md-12">
				<!-- Advance Search -->
				
				<div class="advance-search">
									
					 {!! Form::open(['route' => 'annonces.rechercher', 'method' => 'POST', 'data-parsley-validate'=>'']) !!}
                                    <div class="form-group" style="float:left;width:85%;">
                                        {{ Form::text('query', null, array('class' => 'editor','required'=>'','placeholder'=>'Que rechercher-vous ?')) }}
                                    </div>
									
									<center><div class="form-group"style="margin-top:-10px;">
										{{ Form::submit('Rechercher', array('class' => 'btn btn-transparent fa fa-search')) }}
										
                                    </div></center>
									{!! Form::close() !!}
				</div>
			</div>
		</div>
                </div>
			</div>
		</div>
		<hr/>		


      
		<div class="row">
			<div class="col-md-12">
                            <div class="titre">
				<div class="section-title">
                  <br/><h2>Approchez, Regardez y a beaucoup de nouveautés...</h2>
				</div>
			</div>
                        </div>
		</div>
		<div class="row">
			<!-- offer 01 -->
        @forelse($annonces->chunk(20) as $chunk)
            @foreach($chunk as $annonce)
		    
                    <div class="col-sm-12 col-md-4 col-lg-3">
                        <div class="product-item bg-light">
                                <div class="card">
                                    <div class="thumb-content"> 
                                        <!-- <div class="price">$200</div> -->
                                                <a href="{{route('annonces.show',['id' => $annonce->id]) }}">
													<br/><center><img class="card-img-top img-fluid" src="images/products/{{$annonce->picture}}" class="img-responsive" style="width:250px;  height:250px;" alt="{{$annonce->titreAnnonce}}"></center>
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
                                          <a href="{{route('annonces.show',['id' => $annonce->id]) }}">{{ Form::submit('Acheter', array('class' => 'btn btn-transparent')) }}</a>
                                            
										</center>
                                    </div>
                                   </div>
                        </div>
                    </div>
            @endforeach
			@empty
				<h3>Aucun Produit</h3>
		@endforelse
        </div>
	<div>
		<center><a  href="{{ route('allannounce') }}"><button class="btn btn-transparent">  Voir plus ... </button></a></center><br/>
	</div>
        <hr/>
  <div class="section-title"><h2>Nos utilisateurs en parlent.</h2>
				</div>
<div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

  <!--Indicators-->
  <ol class="carousel-indicators">
    <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
    <li data-target="#multi-item-example" data-slide-to="1"></li>
    <li data-target="#multi-item-example" data-slide-to="2"></li>
  </ol>
  <!--/.Indicators-->

  <!--Slides-->
  <div class="carousel-inner" role="listbox">
  
    <!--First slide-->
    <div class="carousel-item active">
    <div class="row">
     @foreach($temoignages as $annonce)
      <div class="col-md-3">
        <div class="card mb-2">
        <center>
          <img class="card-img-top" src="images/user/{{$annonce->user->profilePicture}}" class="img-responsive" style="width:100px;  height:100px;" alt="Photo de Profile"/>

          <div class="card-body">
            <p class="card-title">{{$annonce->contenue}}</p>
            <h4 class="card-title"><u>{{$annonce->user->name}}</u></h4>
          </div>
          </center>
        </div>
      </div>
      @endforeach

      
    </div>
    <!--/.First slide-->

    <!--Second slide-->
    <!--/.Second slide-->

    <!--Third slide-->
    <!--/.Third slide-->


  <!--/.Slides-->

</div>
<!--/.Carousel Wrapper-->
               
</div>
	<hr/>
      
	<div class="row">
        <div class="col-sm-12 col-lg-6">
			<div class="widget coupon text-center">
				<p>Aviez-vous un produit à vendre? Poster gratuitement votre annonnce sur azerket.com.</p>
				<a href="{{ url('/annonces/create') }}" class="btn btn-transparent-white">Poster Maintenant</a>
            </div>
        </div> 
        <div class="col-sm-12 col-lg-6">
            <div class="widget coupon text-center">
				<p>N'aviez-vous pas trouver ce que vous rechercher? Exprimer gratuitement votre besoin.</p>
				<a href="{{ url('/besoins/create') }}" class="btn btn-transparent-white">Exprimer Maintenant</a>
		    </div>
        </div>      
    </div>
</div>
</section>

<!--============================
=            Footer            =
=============================-->

<footer class="footer section section-sm">
  <!-- Container Start -->
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-7 offset-md-1 offset-lg-0">
        <!-- About -->
        <div class="block about">
          <!-- footer logo -->
          <img src="images/logo.jpg" alt="">
          <!-- description -->
          <p class="alt-color">Azerket.com est une plateforme de marché en ligne où vous pouvez acheter, vendre ou échanger vos produits ou services. Avec azerket.com, vendez rapidement et sans limite;
          achetez intelligemment les produits et services.</p>
        </div>
      </div>
      <!-- Link list -->
      <div class="col-lg-2 offset-lg-1 col-md-3">
        <div class="block">
            <div class="block">
                <h4>Pages</h4>
                <ul>
                  <li><a href="{{ route('index') }}">Accueil</a></li>
                              <li><a href="{{ route('allannounce') }}">Achat</a></li>
                              <li><a href="{{ url('/annonces/create') }}">Vente</a></li>
                              <li><a href="{{ url('/besoins') }}">Besoins</a></li>
                              <li><a href="{{ route('comment') }}">Comment ça marche?</a></li>
                              <li><a href="{{ route('terme') }}">Règles d'utilisation</a></li>
                              <li><a href="{{ route('contrat') }}">Politique de confidentialité</a></li>
                  				<li class="nav-item active">
								<a href="{{ route('faq') }}">FAQ</a>
							</li>
                              <li><a href="https://azerketcom.blogspot.com" target = "_blank"> Blog</a></li>
                              <li><a href="{{ route('contact') }}">Contacter-Nous</a></li>
                </ul>
            </div>
        </div>
      </div>
      <!-- Link list -->
      <div class="col-lg-2 col-md-3 offset-md-1 offset-lg-0">
        <div class="block">
          <h4>Nos Sponsors</h4>
          <ul>
            <li>
              Devenez partenaire de azerket.com pour profiter de notre audience.</li>
          <li><a href="{{ route('contact') }}">Contacter-Nous</a></li>
          <li>Tél: +229 66 33 87 29</li>
            <li>Email:info@azerket.com / azerketmarket@gmail.com</li>
          </ul>
        </div>
      </div>
      <!-- Promotion -->
      <div class="col-lg-4 col-md-7">
        <!-- App promotion -->
        <div class="block-2 app-promotion">
          <a href="https://play.google.com/store/apps/details?id=com.azerket.jmax.azerketappp" target = "_blank">
            <!-- Icon -->
            <img src="images/footer/phone-icon.png" alt="">
			Télécharger notre application mobile
          </a>

        </div>
        <!-- newletters -->
        <form action="{{ route('newletter') }}" method="post">
        <h4 style="color:white">Abonnez-vous pour recevoir nos dernières annonces.</h4>
    <div class="form-group">
    
       
        <input type="email" name="user_email" id="exampleInputEmail" placeholder="Votre email" class="form-control">
    </div>
    {{ csrf_field() }}
    <button type="submit" class="btn btn-transparent-white">Envoyez</button>
</form>
 <!-- end newletters -->
      </div>
    </div>
  </div>
  <!-- Container End -->
</footer>
<!-- Footer Bottom -->
<footer class="footer-bottom">
    <!-- Container Start -->
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-12">
          <!-- Copyright -->
          <div class="copyright">
            <p>Copyright © AZERKET.COM 2019</p>
          </div>
        </div>
        <div class="col-sm-6 col-12">
          <!-- Social Icons -->
          <ul class="social-media-icons text-right">
              <li><a class="fa fa-facebook" href="https://www.facebook.com/azerketcom/" target = "_blank"></a></li>
              <li><a class="fa fa-twitter" href="https://twitter.com/azerketcom" target = "_blank"></a></li>
            <li><a class="fa fa-instagram" href="https://www.instagram.com/azerketcom/" target = "_blank"></a></li>
              <li><a class="fa fa-pinterest-p" href=""></a></li>
              <li><a class="fa fa-vimeo" href=""></a></li>
            </ul>
        </div>
      </div>
    </div>
    <!-- Container End -->
    <!-- To Top -->
    <div class="top-to">
      <a id="top" class="" href=""><i class="fa fa-angle-up"></i></a>
    </div>
</footer>


  <!-- JAVASCRIPTS -->
  <script src="{{url('../plugins/jquery/jquery.min.js')}}"></script>
  <script src="{{url('../plugins/jquery-ui/jquery-ui.min.js')}}"></script>
  
  <script src="{{url('plugins/jqueryjquery-ui/external/jquery/jquery.js')}}"></script>
  <script src="{{url('plugins/jquery/jquery.min.js')}}"></script>
  <script src="{{url('plugins/jquery-ui/jquery-ui.min.js')}}"></script>
  <script src="{{url('plugins/tether/js/tether.min.js')}}"></script>
  <script src="{{url('plugins/raty/jquery.raty-fa.js')}}"></script>
  <script src="{{url('plugins/bootstrap/dist/js/popper.min.js')}}"></script>
  <script src="{{url('plugins/bootstrap/dist/js/bootstrap.min.js')}}"></script>
  <script src="{{url('plugins/seiyria-bootstrap-slider/dist/bootstrap-slider.min.js')}}"></script>
  <script src="{{url('plugins/slick-carousel/slick/slick.min.js')}}"></script>
  <script src="{{url('plugins/jquery-nice-select/js/jquery.nice-select.min.js')}}"></script>
  <script src="{{url('plugins/fancybox/jquery.fancybox.pack.js')}}"></script>
  <script src="{{url('plugins/smoothscroll/SmoothScroll.min.js')}}"></script>
  <script src="{{url('js/scripts.js')}}"></script>
  <SCRIPT LANGUAGE="JavaScript" TYPE="text/javascript" SRC="//smarticon.geotrust.com/si.js"></SCRIPT>
 <div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = 'https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v3.1';
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
</script>
<script>
	var acc = document.getElementsByClassName("accordion");
	var i;

	for (i = 0; i < acc.length; i++) {
	  acc[i].addEventListener("click", function() {
		this.classList.toggle("active");
		var panel = this.nextElementSibling;
		if (panel.style.maxHeight){
		  panel.style.maxHeight = null;
		} else {
		  panel.style.maxHeight = panel.scrollHeight + "px";
		} 
	  });
	}
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-130403233-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-130403233-1');
</script>
 <script src="{{url('js/jquery-1.5.2.min.js')}}"></script>
   <script src="{{url('js/modernizr-2.8.3.min.js')}}"></script>

<script>
	$(window).load(function() {
		// Animate loader off screen
		$(".se-pre-con").fadeOut("slow");;
	}); 
	</script>
<script type="text/javascript">
function googleTranslateElementInit2() {new google.translate.TranslateElement({pageLanguage: 'fr',autoDisplay: false}, 'google_translate_element2');}
</script><script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2"></script>


<script type="text/javascript">
/* <![CDATA[ */
eval(function(p,a,c,k,e,r){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('6 7(a,b){n{4(2.9){3 c=2.9("o");c.p(b,f,f);a.q(c)}g{3 c=2.r();a.s(\'t\'+b,c)}}u(e){}}6 h(a){4(a.8)a=a.8;4(a==\'\')v;3 b=a.w(\'|\')[1];3 c;3 d=2.x(\'y\');z(3 i=0;i<d.5;i++)4(d[i].A==\'B-C-D\')c=d[i];4(2.j(\'k\')==E||2.j(\'k\').l.5==0||c.5==0||c.l.5==0){F(6(){h(a)},G)}g{c.8=b;7(c,\'m\');7(c,\'m\')}}',43,43,'||document|var|if|length|function|GTranslateFireEvent|value|createEvent||||||true|else|doGTranslate||getElementById|google_translate_element2|innerHTML|change|try|HTMLEvents|initEvent|dispatchEvent|createEventObject|fireEvent|on|catch|return|split|getElementsByTagName|select|for|className|goog|te|combo|null|setTimeout|500'.split('|'),0,{}))
/* ]]> */
</script>  
  

<!--<script src="{{url('js/snowstorm.js')}}"></script>

<script>
snowStorm.snowColor = '#99ccff';   // blue-ish snow!?
snowStorm.flakesMaxActive = 96;    // show more snow on screen at once
snowStorm.useTwinkleEffect = true; // let the snow flicker in and out of view
</script>-->
  
 

</body>
</html>
