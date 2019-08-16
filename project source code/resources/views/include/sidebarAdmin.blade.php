<div class="sidebar">
					
					<div class="widget user-dashboard-menu">
						<ul>
                                                    <h4><center>OPTIONS</center></h4>
                                                        <li class="active">
								<a href="{{ route('sindam.dashboard')}}"><i class="fa fa-file"></i>  Annonces </a>
                                                        </li>
                                                        <li >
								<a href="{{ url('besoins/voir')}}"> <i class="fa fa-newspaper-o"></i> Besoins </a>
							</li>
                                                        <li>
								<a href="{{ route('booster')}}"> <i class="fa fa-envelope-open"></i> Booster Annonces </a>
							</li>
                                                        <li>
								<a href="{{ route('categorie')}}"><i class="fa fa-list"></i> Categorie </a>
							</li>
							<li>
								<a href="{{ route('souscategorie')}}"> <i class="fa fa-life-buoy"></i>Sous categorie </a>
							</li>
                                                         <li>
								<a href="{{ route('messageinternaute')}}"> <i class="fa fa-envelope-open"></i> Messages Internautes </a>
							</li>
                                                        <li>
								<a href="{{ route('abus')}}"> <i class="fa fa-envelope-open"></i> Messages Abus </a>
							</li>
                                                        <li>
								<a href="{{ route('messagevendeur')}}"> <i class="fa fa-envelope-open"></i> Messages Vendeurs </a>
							</li>
                             
                          <li>
								<a href="{{ route('temoignage')}}"> <i class="fa fa-envelope-open"></i> Temoignages </a>
							</li>
                          <li>
								<a href="{{ route('vendeurrecommande')}}"> <i class="fa fa-envelope-open"></i> Vendeurs recommandes </a>
							</li>
                            <li>
								<a href="{{ route('commentaire')}}"> <i class="fa fa-envelope-open"></i> Commentaires </a>
							</li>
							<li>
								<a href="{{ route('statistiquecategorie')}}"><i class="fa fa-line-chart"></i> Statistiques / Categorie</a>
							</li>
							<li>
								<a href="{{ route('statistique')}}"><i class="fa fa-line-chart"></i> Statistiques / Sous categorie</a>
							</li>
                                                        <li>
								<a href="{{ route('logout') }}"
                                                                     onclick="event.preventDefault();
                                                                     document.getElementById('logout-form').submit();">
                                                                     <i class="fa fa-btn fa-sign-out"></i>
                                                                     Deconnexion
                                                                </a>
                                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                            {{ csrf_field() }}
                                                        </form>
										
							</li>
							
							
						</ul>
					</div>
				</div>