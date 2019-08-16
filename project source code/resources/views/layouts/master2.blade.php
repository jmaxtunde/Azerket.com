<html lang="fr">
<head>

  <!-- SITE TITTLE -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Azerket.com</title>
  
  <!-- PLUGINS CSS STYLE -->
  <link rel="stylesheet" href="{{url('plugins/jquery-ui/jquery-ui.min.css')}}">
  <link rel="stylesheet" href="{{url('../plugins/jquery-ui/jquery-ui.min.css')}}">
  
	
      
    
  <!-- Bootstrap -->
  <link rel="stylesheet" href="{{url('plugins/bootstrap/dist/css/bootstrap.min.css')}}">
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

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>

<body>

<section class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<nav class="navbar navbar-expand-lg  navbar-light">
					<a class="navbar-brand" href="{{ route('index') }}">
                                                <img src="../../images/logo.png" alt="">
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav ml-auto main-nav ">
							<li class="nav-item active">
								<a class="nav-link" href="{{ route('index') }}">Accueil</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="{{route('home')}}"> Annonces</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="{{ url('/annonces/create') }}"> Nouvelle</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="{{ url('/besoins') }}"> Besoins</a>
							</li>
                                                        <li class="nav-item dropdown dropdown-slide">
								<a class="nav-link dropdown-toggle" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Télécharger <span><i class="fa fa-angle-down"></i></span>
								</a>
								<!-- Dropdown list -->
								<div class="dropdown-menu dropdown-menu-right">
									<a class="dropdown-item" href="https://play.google.com/store/apps/details?id=com.azerket.jmax.azerketappp" target = "_blank">App Android</a>
								</div>
							</li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
                                <!-- Authentication Links -->
                                @guest
									<li class="nav-item">
										<a class="nav-link" href="{{ route('login') }}">Connection</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="{{ route('register')}}">Inscription</a>
									</li>
                                    @else
                                    <li class="nav-item dropdown dropdown-slide">
										<a class="nav-link dropdown-toggle" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="images/user/{{ Auth::user()->profilePicture }}" alt="" class="img-responsive" style="width:15px;  height:15px;" alt="">{{ Auth::user()->name }}</a>
											<div class="dropdown-menu dropdown-menu-right">
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
    @yield('content')
    

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
          <img src="../../images/logo.jpg" alt="">
          <!-- description -->
          <p class="alt-color">Azerket.com est un site web où vous pouvez acheter, vendre et échanger vos produits ou services partout en particulier au Bénin. Les meilleures affaires se réalisent souvent 
		  avec des gens qui vivent dans votre propre ville ou pays. Avec Azerket.com, il est facile d'acheter, de vendre et d'échanger localement..</p>
        </div>
      </div>
      <!-- Link list -->
      <div class="col-lg-2 offset-lg-1 col-md-3">
        <div class="block">
          <h4>Pages</h4>
          <ul>
            <li><a href="{{ route('index') }}">Accueil</a></li>
			<li><a href="{{ route('allannounce') }}">Achats</a></li>
			<li><a href="{{ url('/annonces/create') }}">Ventes</a></li>
			<li><a href="{{ url('/besoins') }}">Besoins</a></li>
			<li><a href="{{ route('comment') }}">Comment ça marche?</a></li>
            <li><a href="{{ route('terme') }}">Règles d'utilisation</a></li>
            <li><a href="{{ route('contrat') }}">Politique de confidentialité</a></li>
            <li><a class="nav-link" href="{{ route('faq') }}">FAQ</a></li>
             <li><a href="https://azerketcom.blogspot.com" target = "_blank"> Blog</a></li>
            <li><a href="{{ route('contact') }}">Contacter-Nous</a></li>
          </ul>
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
            <img src="../../images/footer/phone-icon.png" alt="mobile-icon">
          </a>
          <p>Télécharger notre application mobile</p>
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
            <p>Copyright © AZERKET.COM 2018</p>
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
  <script src="{{url('plugins/jquery/jquery.min.js')}}"></script>
  <script src="{{url('plugins/jquery/summernote.js')}}"></script>
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

<!-- <script src="{{url('js/snowstorm.js')}}"></script>

<script>
snowStorm.snowColor = '#99ccff';   // blue-ish snow!?
snowStorm.flakesMaxActive = 96;    // show more snow on screen at once
snowStorm.useTwinkleEffect = true; // let the snow flicker in and out of view
</script>-->
</body>
</html>
