<?php

  // App\User::create([
  // 	'name'=> 'Moderador',
  // 	'email' => 'moderador@binario.net.ve',
  // 	'password' => bcrypt('4321'),
  // 	'role_id' => '2'

  // ]);

Route::get('/', ['as' => "home", 'uses' => "PagesController@home"]);


Route::get('saludos/{nombre?}', ['as' => "saludos", 'uses' => "PagesController@saludo"])->where('nombre', "[A-Za-z]+"); 

Route::resource('mensajes', 'MessagesController');

Route::resource('usuarios', 'UsersController');

//Route::get('login', 'Auth\LoginController@showLoginForm');
//Route::post('login', 'Auth\LoginController@login');

//Route::get('logout', 'Auth\LoginController@logout');
Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');


Route::get('/home', 'HomeController@index')->name('home');

Route::get('roles', function(){
	return \App\Role::with('user')->get();
});