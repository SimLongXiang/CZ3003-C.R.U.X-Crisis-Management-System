<?php
/*
  |--------------------------------------------------------------------------
  | Routes File
  |--------------------------------------------------------------------------
  |
  | Here is where you will register all of the routes in an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the controller to call when that URI is requested.
  |
 */
 // First Route method – Root URL will match this method
/*
*/

Route::get('/', function () {
   return View::make('pages.login');
});


Route::get('login', function() {
	
  return View::make('pages.login');
});



Route::post('login', 'HomeController@doLogin');

Route::get('viewIncident',function(){
	
	return View::make('pages.viewIncident');
});

Route::get('viewCrisis',function(){
	
	return View::make('pages.viewCrisis');
});

Route::get('viewAssets',function(){
	
	return View::make('pages.viewAssets');
});

