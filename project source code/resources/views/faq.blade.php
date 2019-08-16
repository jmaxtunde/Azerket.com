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
  <meta name="keywords" content="FAQ Azerket, comment ca marche, comment vendre, pourquoi azerket.com,mesure securité azerket, vente benin, troc benin" />
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

<div style="background-color:#e9ebee;">
    
    <div class="container" style="background-color:white;">
       <br/>
    <div class="row">
         <div class="col-md-12 col-md-offset-2">
           <div class="widget personal-info">
                    <h2  style="float:left;"> Les Questions Fréquentes Demandées</h2>
                  <img src="images/custumer.PNG" class="img-responsive" alt="Faq"/>
                  <br/><br/>        
                    <button class="accordion"><h4>  Qu'est ce que Azerket.com </h4></button>
                    <div class="panel">
                                        Azerket.com est une plateforme de marché virtuel qui met en relation les acheteurs et les vendeurs. C'est à dire elle met à disposition 
        son audience à des vendeurs.
                    </div>
                    <button class="accordion"><h4>Qui peut vendre sur Azerket.com</h4></button>
                    <div class="panel">
						Toutes entreprises ou particuliers disposent d'un article neuf ou occasion à vendre.
                    </div>
                    <button class="accordion"><h4> Qu'est ce qu'on peut vendre sur Azerket.com</h4></button>
                    <div class="panel">
                     Tous les objets neufs ou occasions ont une valeur sur Azerket.com. <br/> Voici une liste excautive de ce que 
        vous pouvez vendre:
        				<ul>
                            <li> <span class="fa fa-hand-o-right"></span>  Moyens roulant (Voiture, moto, vélo, pièces de rechanges...)</li><br/>
							<li><span class="fa fa-hand-o-right"></span>  Moyen de communications ( Téléphones, Tablettes, accessoires...)</li><br/>
							<li> <span class="fa fa-hand-o-right"></span>  Electronique ( Ordinateur, TV, ....)</li><br/>
							<li><span class="fa fa-hand-o-right"></span>  Design et Fashions (Sac, Habits, chaussures....)</li><br/>
                          <li> <span class="fa fa-hand-o-right"></span>  Electronique ( Ordinateur, TV, ....)</li><br/>
							<li><span class="fa fa-hand-o-right"></span>  Animaux (Oeuf, Chat, Chien, Poissons)</li><br/>
                          <li> <span class="fa fa-hand-o-right"></span>  Loisir - Art - Sport ( Livre, Jeux, Instrument de musique..)</li><br/>
							<li><span class="fa fa-hand-o-right"></span>  Services Immobiliers (Maisons à vendre, maisons à louer....)</li><br/>
                          <li> <span class="fa fa-hand-o-right"></span>  Produits cosmétiques et pharmaceutiques ( Pommade, Médicament tradionnel ....)</li><br/>
							<li><span class="fa fa-hand-o-right"></span>  Prestations de service (Transport, Education, Maçon, Plombiers....)</li><br/>
                          <li> <span class="fa fa-hand-o-right"></span>  Evènements ( Formation, Séminaire, Conférence....)</li><br/>
							<li><span class="fa fa-hand-o-right"></span>  Mobilier et équipement de bureau et maison </li><br/>
                          <li> <span class="fa fa-hand-o-right"></span>  Hôtellerie et restauration </li><br/>
							<li><span class="fa fa-hand-o-right"></span>  Offre d'emploi</li><br/>
                          <li><span class="fa fa-hand-o-right"></span>  Recherche d'emploi</li><br/>
						</ul><hr/>
                    </div>
                    <button class="accordion"><h4>Comment vendre sur azerket.com ?</h4></button>
                    <div class="panel">
                        Il suffit de créer un compte vendeur sur azerket.com. Alors vous pouvez poster gratuitement vos annonces
        <a   class="nav-link login-button" href="{{ route('register')}}">  Cliquer ici pour créer votre compte</a>
		<br/><br/>
				Publier des annonces sur Azerket est facile et rapide, il suffit de suivre les étapes suivantes pour continuer:

				Cliquez sur Publier GRATUITEMENT
				vous serez immédiatement redirigé vers notre page de connexion à votre compte vendeur (si vous n'êtes pas un utilisateur enregistré, cliquer sur s'inscrire. Vous devrez remplir tous les champs obligatoires et cliquer sur le bouton "Enregistrer" en bas de la page.)

				Cliquez sur nouvelle annonce

				Complétez toutes les informations sur votre article, telles que le titre, la catégorie, le lieu, la description, le prix et ajoutez des photos (au moins trois photos nécessaires aux voitures et aux téléphones).
				Après avoir rempli les champs requis, cliquez sur le bouton “Envoyer”.
				Une fois que vous avez posté votre annonce,
				Votre annonce sera publiée sous peu une fois le processus de modération terminé.
				Une fois votre annonce en ligne, vous recevrez un email de notification.
				Soyez prêt à recevoir de nombreux appels entrants de vos acheteurs potentiels. Bonne chance avec vos ventes!
									</div>
                    <button class="accordion"><h4>Que gagne la plateforme ?</h4></button>
                    <div class="panel">
						<ul>
							 <li> <span class="fa fa-hand-o-right"></span> Vous payez pour référencer vos annonces à travers l'option <b>booster</b></li><br/>
							<li> <span class="fa fa-hand-o-right"></span>Vous payez pour devenir vendeur recommandé</li><br/>
							<a href="{{ url('premium') }}"> <i class="fa fa-eye"></i> Cliquez pour en savoir plus sur le Service Premium </a>
						</ul>
                    </div> 
                    <button class="accordion"><h4> Quelles sont les mesures de sécurités</h4></button>
                    <div class="panel">
                                Les mesures de sécurités prises pour rassurer les acheteurs et les vendeurs <br/>
								1- Le marché virtuel Azerket.com dispose d'un ensemble de règles d'utilisation  disponible ici <a href="{{ route('terme') }}">Règles d'utilisation</a><br/>
								2- Lorsqu'un vendeur créer son compte un email de confirmation est envoyée dans son email. Ce qui permet d'eviter de fausses emails et l'interaction des robots <br/>
								3- Lorsqu'une annonce est postée, elle n'est pas publiées automatiquement. Elle fait l'objet d'une étude pour éviter la vente des produits interdits 
								par la loi<br/><br/>
								4- La plateforme a prévu aux acheteurs de signaler un abu lié à une annonce. Dans ce cas, la cellule de gestion de plaites et gestion de conflits s'encharge.<br/>
								Dans le cas contraire, elle recommande aux acheteurs, le partage de leurs expériences avec les autres acheteurs à travers l'option de partage sur les réseaux sociaux. <br/>
							  
                    </div>
                    <button class="accordion"><h4>Comment savoir si un client à visiter mon produit?</h4></button>
                    <div class="panel">
                        1- Nous avions intégré un système de notification par email qui vous informe si votre annonce est activée <br/>
							2- Sur chaque page de détail d'une annonce, nous avions intégré le nombre de vue.<br/>
							3- Chaque semaine, chaque vendeur recevra une statistique de visite. Elle sera aussi disponible sur son espace privé
						 
                    </div>
                    <button class="accordion"><h4> Que se passe-t-il après la publication de mon annonce? </h4></button>
                    <div class="panel">
                             Nos modérateurs examineront votre annonce très attentivement et si tous les champs sont correctement remplis, son activation sera immédiate.
							Vous pouvez trouver votre annonce sur notre site Web uniquement lorsqu'elle est approuvée par nos modérateurs.
							Vous recevrez un email de notification lorsque votre annonce est active. S'il y a un problème avec votre annonce, vous en serez averti et toutes les erreurs seront spécifiées afin que vous puissiez modifier votre annonce en conséquence.
							Après avoir publié votre annonce, vous pouvez la modifier à nouveau si nécessaire et la republier. Une fois cette opération effectuée, votre annonce subit une modération avant d'être activée sur le site.
							<br/><br/>
							    Vous pouvez toujours gérer vos annonces en vous connectant à votre compte Azerket et en cliquant sur Mes annonces.
                    </div>
                    <button class="accordion"><h4>Quelles sont les règles d'affichage ?</h4></button>
                    <div class="panel">
                                        
                                   Les règles suivantes sont obligatoires lorsque vous publiez des annonces sur Azerket.com:<br/>

    Chaque annonce doit avoir un titre précis.<br/>
    Chaque annonce ne doit contenir que des images uniques (prises par le vendeur et non téléchargées sur Internet) sans information de contact ni filigrane.<br/>
    Toute publicité de voitures ou de téléphones doit contenir des images.<br/>
    Assurez-vous de choisir une catégorie appropriée. Soyez attentif en choisissant une catégorie pour une proposition de travail et / ou un CV.<br/>
    Les prix de vos articles doivent correspondre aux prix réels de produits similaires.<br/>
    Tous les produits et / ou services postés doivent être situés au Bénin ou tous pays de l'Afrique de l'ouest.<br/>
    Tous les articles et produits doivent être légalement autorisés.<br/>
    Chaque article en vente doit être posté séparément. Vous ne pouvez pas publier plusieurs produits dans une même annonce.<br/>
    Chaque annonce doit contenir une description brève et claire.<br/>


                    </div>
                    <button class="accordion"><h4>Mon annonce a été mise en attente ou désactivée. Pourquoi? </h4></button>
                    <div class="panel">
						Il existe plusieurs raisons pour lesquelles votre annonce peut être suspendue par nos modérateurs:   
						Vous avez essayé de publier plusieurs éléments dans une même annonce. Ce n'est pas autorisé. <br/>
						Chaque article en vente doit être posté séparément, une annonce - un produit. Suivez cette règle simple pour que votre annonce soit activée sous peu.
						Les images que vous avez téléchargées contiennent des numéros de contact. <br/>
						Nous n'autorisons pas l'affichage de ce genre de photos. Ajoutez des photos sans numéro de téléphone pour que vos annonces soient actives sur Azerket.com.<br/>
						Il existe certaines restrictions concernant les prix que les utilisateurs peuvent définir. Veuillez saisir un prix approprié pour que votre annonce soit approuvée. <br/>
						Si le prix n'est pas pertinent, il peut être refusé. Assurez-vous de mener une enquête sur la valeur marchande d'un objet que vous souhaitez vendre.

					</div>
                    <button class="accordion"><h4> Articles interdits sur Azerket.com</h4></button>
                    <div class="panel">
                        Veuillez prendre un moment pour examiner les éléments pour lesquels il est interdit de faire de la publicité sur Azerket.com: 

						<br/> 1- Stupéfiants, stéroïdes et autres médicaments nécessitant une ordonnance d'un médecin agréé<br/>
    2- Armes<br/>
    3- Articles militaires / de police restreints<br/>
    3- Organes humains<br/>
    4- Copies illégales / piratées<br/>
    5- Propriété volée<br/>
    6- Dispositifs de saisie de code et de verrouillage<br/>
    7- Équipements électroniques interdits par la loi<br/>
    8- Services à orientation sexuelle<br/>
    9- Prêts, transactions monétaires, Bitcoin<br/>
    10- Programmes de marketing multiniveau, pyramidaux et matriciels<br/>
    11- Marketing de réseau et emplois «Home Base Business»<br/>
    12- Produits (offres ou services) interdits à la vente par la loi<br/>
S'il vous plaît, considérez les règles suivantes:<br/>
Les denrées alimentaires et les articles de santé doivent avoir une date de péremption ou une «date limite d’utilisation» clairement indiquée.<br/>
Les annonces ne peuvent pas contenir d'images de la nudité.

                    </div>
                    <button class="accordion"><h4>Comment laisser des commentaires sur le vendeur ou signaler une activité illégale sur le site Azerket.com?</h4></button>
                    <div class="panel">
                       Si vous souhaitez laisser des commentaires concernant votre expérience d'achat sur Azerket.com,
					   cliquez sur le bouton Laisser un commentaire disponible dans chaque annonce de notre site Web. 
					   Fournissez des commentaires détaillés sur le vendeur et indiquez que vos commentaires seront visibles par tous les utilisateurs Azerket.com.
						Vous pouvez également signaler une activité illégale / frauduleuse si vous trouvez quelque chose de suspect concernant le vendeur ou son annonce. 
						Vos commentaires seront immédiatement redirigés vers les responsables de l'assistance Azerket.com et nous bloquerons le vendeur s'il s'avère être un escroc.
                 
                    </div>
              <button class="accordion"><h4>Combien de temps mes annonces resteront-elles sur le site ? </h4></button>
                    <div class="panel">
                        Vos annonces restent sur le site pendant 3 à 6 mois (à compter de la date de la dernière mise à jour) avant d'être automatiquement supprimées ou jusqu'à ce que vous décidiez de les désactiver. 
                      Notez que vous pouvez mettre à jour votre annonce si vous n'avez pas vendu votre article.
                    </div>
                    <button class="accordion"><h4>Comment signaler une activité illégale / frauduleuse sur l'application Azerket.com? </h4></button>
                    <div class="panel">
                        Si vous voyez quelque chose de suspect sur Azerket.com, signalez le problème en cliquant sur abus? Signaler cet article. 
						Insérez votre texte et cliquez sur Envoyer.
                    </div>
                    <button class="accordion"><h4>Que sont les services Premium ? </h4></button>
                    <div class="panel">
                        Les services Premium sont destinés à des vendeurs de tous types, mais principalement à des vendeurs / entreprises professionnels.
						Ils permettent aux vendeurs de promouvoir activement leurs annonces et de vendre rapidement leurs produits en obtenant jusqu'à 15 fois plus de clients.                                   
                    </div>
                    <button class="accordion"><h4>Avantages des services Premium</h4></button>
                    <div class="panel">
                        Azerket.com étant le lieu de rencontre des acheteurs et des vendeurs, vous aurez besoin d’une bonne promotion pour vos annonces.<br/>

Vous trouverez ci-dessous 6 avantages principaux de nos services Premium:<br/>

1. Azerket.com est le plus grand marché de l'Afrique l'ouest<br/>

Oui, nous sommes fiers du fait que Azerket.com est le plus grand marché de l'Afrique l'ouest par le nombre de visiteurs et d'annonces postées.

2. Azerket.com a plus de clients que les autres. Nous obtenons nos visiteurs uniquement à partir de sources pertinentes telles que Google et Facebook.<br/>

3. Algorithmes de promotion pertinents. Nous faisons la promotion de vos annonces uniquement auprès des utilisateurs susceptibles d'être intéressés par vos produits. 
Cela vous donne le plus grand nombre de vrais clients.<br/>

4. Soutien personnel. Nous avons une équipe de support dédiée qui comprend très bien vos besoins et assure la satisfaction du client. <br/>

5. Juste prix pour les services que vous obtenez. Nous vous facturons en naira pour que vous ne payiez aucune commission supplémentaire. <br/>

6. Azerket.com est en sécurité. Nous utilisons des passerelles sécurisées des banques européennes, de sorte que toutes les transactions sont sécurisées à 100%.

Si vous souhaitez acheter un ensemble de services Premium, veuillez visiter ce lien: https://azerket.com/premium

                    </div>
                    
            </div>
        </div>
		 </div>
            
    </div>
       
    </div>
@endsection