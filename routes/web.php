<?php

Route::get('/', 'GuestController@landing')->name('landing');

Auth::routes();

Route::get('/logout', 'Auth\LoginController@logout');


//ADMIN ROUTES
//--------------------------------
Route::group(['prefix' => 'dashboard', 'middleware' => 'admin'], function()  {

	//admin Dashboard
		Route::get('/', 'AdminController@index')->name('dashboard');

	//admin Profiles
		Route::resource('profiles', 'AdminprofileController');

});

//FRONTEND
//--------------------------------


