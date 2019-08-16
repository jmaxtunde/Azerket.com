<div class="sidebar">
					<!-- User Widget -->
					<div class="widget user-dashboard-profile">
						<!-- User Image -->
						<div class="profile-thumb">
							<img src="../../images/user/{{Auth::user()->profilePicture}}" alt="Photo de Profile" />
						</div>
						<!-- User Name -->
						<h5 class="text-center">{{Auth::user()->name}}</h5>
						<p>Enrégistré le {{Auth::user()->created_at}}</p>
                                                <a href="{{ url('/sellers.edit') }}" class="btn btn-main-sm">Modifier profile</a><br/><br/>
                                                <a href="{{ url('/sellers.password') }}" class="btn btn-main-sm">Modifier mot de passe</a>
					</div>
					<!-- Dashboard Links -->
					<div class="widget user-dashboard-menu">
						<ul>
							<li >
								<a href="{{route('home')}}"><i class="fa fa-user"></i> Mes annonces</a>
                                                        </li>
                                                        <li class="active">
								<a href="{{ url('/annonces/create') }}"> <i class="fa fa-plus-circle"></i> Ajouter une annonce </a>
							</li>
                          <li>
								<a href="{{ url('/temoignages/create') }}"> <i class="fa fa-plus-circle"></i> Ajouter un temoignage </a>
							</li>
                            <li>
								<a href="{{ url('premium') }}"> <i class="fa fa-eye"></i> Service Premium </a>
							</li>
                          <li>
								<a href="{{ url('/vendeurrecommandes/create') }}"> <i class="fa fa-plus-circle"></i> Devenir vendeur recommandés </a>
							</li>
							<li>
								<a href="{{ url('/besoins') }}"><i class="fa fa-bookmark-o"></i> Les besoins des clients <span>{{$besoins->count()}}</span></a>
							</li>
							<li>
								<a href="{{route('message.show',['id' => Auth::user()->id]) }}"><i class="fa fa-file-archive-o"></i>Messages des clients<span>{{$message->count()}}</span></a>
							</li>
							<li>
								<a href="{{route('comment')}}"><i class="fa fa-eye"></i> Comment ça marche?</a>
							</li>
                                                        <li>
								<a href="{{route('terme')}}"><i class="fa fa-eye"></i> Règles d'utilisation</a>
							</li>
                                                        <li>
								<a href="{{route('contrat')}}"><i class="fa fa-eye"></i> Politique et confidentialité</a>
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