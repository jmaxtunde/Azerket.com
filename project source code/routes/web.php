<?php
Route::get('/updateapp', function()
{
    \Artisan::call('dump-autoload');
    echo 'dump-autoload complete';
});
Route::get('/', 'InternauteController@index')->name('index');

Route::get('/confirm/{id}/{token}','Auth\RegisterController@confirm');

Auth::routes();
Route::prefix('sindam')->group(function() {
    Route::get('/login', 'Auth\SindamsLoginController@showLoginForm')->name('sindam.login');
    Route::post('/login', 'Auth\SindamsLoginController@login')->name('sindam.login.submit');
    Route::get('/', 'SindamsController@index')->name('sindam.dashboard');
  });


// ROUTE INTERNAUTE
Route::get('/home', 'HomeController@index')->name('home');
Route::get('comment', 'InternauteController@comment')->name('comment');
Route::get('terme', 'InternauteController@terme')->name('terme');
Route::get('faq', 'InternauteController@faq')->name('faq');
Route::get('contrat', 'InternauteController@contrat')->name('contrat');
Route::get('premium', 'InternauteController@premium')->name('premium');

// ROUTE SELLER

Route::get('sellers.edit','UsersController@edit');
Route::patch('sellers/{user}/update',['as' =>'sellers.update','uses'=>'UsersController@update']);
Route::get('/sellers/{id}', ['as' =>'sellers.show','uses'=>'UsersController@show']);

// ROUTE UPDATE MOT DE PASSE
Route::get('/sellers.password','UsersController@password');
Route::post('/sellers.edit',['as' =>'updatepassword','uses'=>'UsersController@updatePassword']);

// ROUTE BESOINS

Route::get('/besoins/create','BesoinsController@create');
Route::post('/besoins/create',['as' =>'besoins.store','uses'=>'BesoinsController@store']);
Route::get('/besoins','BesoinsController@index')->name('besoins');
Route::post('/besoins/rechercher',['as' =>'besoins.rechercher','uses'=>'BesoinsController@rechercher']);

// ROUTE BOOSTERS

Route::get('/boosters','BoostersController@index')->name('booster');
Route::get('/boosters/create/{id}',['as' =>'boosters.create','uses'=>'BoostersController@create']);
Route::post('/boosters/create',['as' =>'boosters.store','uses'=>'BoostersController@store']);
Route::get('/boosters/edit/{id}',['as' =>'boosters.edit','uses'=>'BoostersController@edit']);
Route::post('/boosters/edit/{id}',['as' =>'boosters.update','uses'=>'BoostersController@update']);

// ROUTE COMMENTAIRES

Route::get('/commentaire','CommentairesController@index')->name('commentaire');
Route::get('/commentaire/{id}',['as' =>'commentaire.delete','uses'=>'CommentairesController@destroy']);
Route::post('/commentaire/create',['as' =>'commentaires.store','uses'=>'CommentairesController@store']);

// ROUTE ABUS
Route::get('/abus','AbusController@index')->name('abus');
Route::get('/abus/{id}',['as' =>'abus.delete','uses'=>'AbusController@destroy']);
Route::post('/abus/create',['as' =>'abus.store','uses'=>'AbusController@store']);


// ROUTE new letter

Route::post('newletter',['as' =>'newletter','uses'=>'NewletterController@store']);

// ROUTE MESSAGES

Route::post('/message/create',['as' =>'message.store','uses'=>'MessagesController@store']);
Route::get('/annonce/create/{id}', ['as' =>'message.create','uses'=>'MessagesController@create']);
Route::get('/message','MessagesController@index')->name('messagevendeur');
Route::get('/message/{id}',['as' =>'message.delete','uses'=>'MessagesController@destroy']);
Route::get('/message/show/{id}',['as' =>'message.show','uses'=>'MessagesController@show']);

// ROUTE TEMOIGNAGNE

Route::get('/temoignages/create','TemoignagesController@create');
Route::post('/temoignages/create',['as' =>'temoignages.store','uses'=>'TemoignagesController@store']);
Route::get('/temoignagnes','TemoignagesController@index')->name('temoignage');

Route::get('temoignagnes/{id}',['as' =>'sindamtemoignage.delete','uses'=>'TemoignagesController@destroy']);
Route::get('temoignagnes/update/{id}',['as' =>'sindamtemoignage.edit','uses'=>'TemoignagesController@edit']);
Route::patch('temoignage/{temoignage}/update',['as' =>'sindamtemoignage.update','uses'=>'TemoignagesController@update']);

// ROUTE vendeur recommande

Route::get('/vendeurrecommandes/create','VendeurrecommendesController@create');
Route::post('/vendeurrecommandes/create',['as' =>'vendeurrecommandes.store','uses'=>'VendeurrecommendesController@store']);
Route::get('/vendeurrecommandes','VendeurrecommendesController@index')->name('vendeurrecommande');

Route::get('vendeurrecommandes/{id}',['as' =>'sindamvendeurrecommande.delete','uses'=>'VendeurrecommendesController@destroy']);
Route::get('vendeurrecommandes/update/{id}',['as' =>'sindamvendeurrecommande.edit','uses'=>'VendeurrecommendesController@edit']);
Route::patch('vendeurrecommandes/{temoignage}/update',['as' =>'sindamvendeurrecommande.update','uses'=>'VendeurrecommendesController@update']);


// ROUTE CONTACT

Route::get('/contact/create','ContactsController@create')->name('contact');
Route::get('/contact','ContactsController@index')->name('messageinternaute');
Route::get('/contact/{id}',['as' =>'contact.delete','uses'=>'ContactsController@destroy']);
Route::post('/contact',['as' =>'contact.store','uses'=>'ContactsController@store']);

// ROUTE ANNONCES

Route::get('/annonces/create','AnnoncesController@create');
Route::post('/annonces/create',['as' =>'annonces.store','uses'=>'AnnoncesController@store']);
Route::get('/annonces','AnnoncesController@index')->name('allannounce');
Route::get('/annonces/categorie/{categorie}', ['as' =>'annonces.affcategorie','uses'=>'AnnoncesController@affcategorie']);
Route::get('annonces/update/{id}',['as' =>'annonces.edit','uses'=>'AnnoncesController@edit']);
Route::patch('annonces/{annonce}/update',['as' =>'annonces.update','uses'=>'AnnoncesController@update']);
Route::get('/annonces/statistiques','AnnoncesController@statistique')->name('statistique');
Route::get('/annonces/statistiquescategorie','AnnoncesController@statistiquecategorie')->name('statistiquecategorie');;
Route::get('/annonces/{id}', ['as' =>'annonces.show','uses'=>'AnnoncesController@show']);
Route::post('/annonces/rechercher',['as' =>'annonces.rechercher','uses'=>'AnnoncesController@rechercher']);
//Route::get('annonces.show','AnnoncesController@show');

// ROUTE sindam
Route::get('sindam/update/{id}',['as' =>'sindampost.edit','uses'=>'AnnoncesController@postedit']);
Route::patch('sindam/{annonce}/update',['as' =>'sindampost.update','uses'=>'AnnoncesController@postupdate']);
Route::get('sindam/{annonce}',['as' =>'sindampost.delete','uses'=>'AnnoncesController@destroy']);

Route::get('besoins/voir','SindamsController@besoins');
Route::get('besoins/{id}',['as' =>'sindambesoin.delete','uses'=>'BesoinsController@destroy']);
Route::get('besoins/update/{id}',['as' =>'sindambesoins.edit','uses'=>'BesoinsController@edit']);
Route::patch('besoins/{besoin}/update',['as' =>'sindambesoins.update','uses'=>'BesoinsController@update']);

// ROUTE CATEGORY
Route::get('/categorie','CategoriesController@index')->name('categorie');
Route::get('/categories/create','CategoriesController@create')->name('categorie.create');
Route::post('/categories',['as' =>'categories.store','uses'=>'CategoriesController@store']);
Route::get('/categories/{id}',['as' =>'categorie.delete','uses'=>'CategoriesController@destroy']);


// ROUTE SOUS CATEGORIE
Route::get('/souscategories','SousCategorieController@index')->name('souscategorie');
Route::get('/souscategories/create','SousCategorieController@create')->name('souscategorie.create');
Route::post('/souscategories',['as' =>'souscategories.store','uses'=>'SousCategorieController@store']);
Route::get('/souscategories/{id}',['as' =>'souscategorie.delete','uses'=>'SousCategorieController@destroy']);


// ROUTE imageupload
Route::get('imageupload/create/{id}',['as' =>'imageupload.create','uses'=>'AnonncesImagesController@create']);
Route::post('imageupload/{annonce}',['as' =>'imageupload.store','uses'=>'AnonncesImagesController@store']);


// ROUTE ERROR PAGE
Route::get('pagenotfound',['as' =>'notfound','uses'=>'HomeController@pagenotfound']);




