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

Route::post('login', 'AccountController@doLogin');
Route::post('updateThreat', 'incidentController@updateIncidentThreat');
Route::post('escalateCrisis', 'crisisController@createCrisis');//escalate from incident to crisis
Route::post('createIncident', 'incidentController@createIncident');
Route::post('deleteCrisis', 'crisisController@deleteCrisis');
Route::post('deleteIncident', 'incidentController@deleteIncident');
Route::post('updateCrisisAlert', 'crisisController@updateCrisis');//escalate crisis threat level
Route::post('addAssets', 'assetsController@addAssets');
Route::post('deleteAssets','assetsController@deleteAssets');
Route::post('sendEmail','emailController@sendEmail');
Route::post('updateIncident','incidentController@updateIncident');
Route::post('removeUser','commanderController@deleteUsers');
Route::post('facebookPost','publicController@facebookPost');
Route::post('twitterPost','publicController@twitterPost');
Route::post('sendSMS','publicController@sendSMS');
Route::post('operatorEditIncident', 'incidentController@operatorEditsIncident');
Route::post('operatorUpdatesIncident', 'incidentController@operatorUpdateIncident');
Route::post('deescalateCrisis', 'crisisController@deescalateCrisis');
//define route to insert into database

//Route::resource('createIncident', 'commanderController@viewIncident');

Route::get('auth/facebook','AuthController@redirectToProvider');
Route::get('auth/facebook/callback','AuthController@handleProviderCallback');

//end of route


//Chat
//Route::get('/', 'ChatController@index');


Route::resource('displayReport', 'incidentController@display');
Route::resource('commanderReport', 'commanderController@display');
//endofchat

//define route for commander to do routing


Route::resource('viewIncident', 'commanderController@viewIncident');
Route::resource('home', 'commanderController@home');
Route::resource('viewCrisis', 'commanderController@viewCrisis');
Route::resource('viewAssets', 'commanderController@viewAssets');
Route::resource('deleteAccount', 'commanderController@viewDeleteAccount');
Route::resource('chat', 'commanderController@viewChat');
Route::resource('commanderMap', 'commanderController@viewMap');
//End of commander route

//define route to operator controller to do routing
Route::resource('operatorView', 'operatorController@operatorView');
Route::resource('operatorChat', 'operatorController@operatorChat');
Route::resource('viewMap', 'operatorController@viewMap');
Route::resource('logIncident', 'operatorController@logIncident');
Route::resource('editIncident', 'incidentController@editIncident');
//end of operator route

//define route to pmo controller to do routing
Route::resource('pmoView', 'PMOController@pmoView');
Route::resource('pmoMap', 'PMOController@pmoMap');
Route::resource('pmoCrisis', 'PMOController@pmoCrisis');
Route::resource('pmoEmail','PMOController@pmoEmail');
Route::resource('pmoChat','PMOController@pmoChat');

//end of pmo route

//define route to saf controller to do routing
Route::resource('safView', 'SAFController@safView');
Route::resource('safViewMap', 'SAFController@safViewMap');
Route::resource('safViewIncident', 'SAFController@safViewIncident');
Route::resource('safViewCrisis', 'SAFController@safViewCrisis');
Route::resource('safAddAssets', 'SAFController@safAddAssets');
Route::resource('safViewAssets', 'SAFController@safViewAssets');
Route::resource('safChat', 'SAFController@safChat');
//end of saf route

//define route to scdf controller to do routing
Route::resource('scdfView', 'SCDFController@scdfView');
Route::resource('scdfViewMap', 'SCDFController@scdfViewMap');
Route::resource('scdfViewIncident', 'SCDFController@scdfViewIncident');
Route::resource('scdfViewCrisis', 'SCDFController@scdfViewCrisis');
Route::resource('scdfAddAssets', 'SCDFController@scdfAddAssets');
Route::resource('scdfViewAssets', 'SCDFController@scdfViewAssets');
Route::resource('scdfChat', 'SCDFController@scdfChat');
//end of scdf route

//define route to nea controller to do routing
Route::resource('neaView', 'NEAController@neaView');
Route::resource('neaChat', 'NEAController@neaChat');
Route::resource('neaViewMap', 'NEAController@neaViewMap');
Route::resource('neaViewIncident', 'NEAController@neaViewIncident');
Route::resource('neaViewCrisis', 'NEAController@neaViewCrisis');
Route::resource('neaAddAssets', 'NEAController@neaAddAssets');
Route::resource('neaViewAssets', 'NEAController@neaViewAssets');

//end of nea route

//define route to spf controller to do routing
Route::resource('spfView', 'SPFController@spfView');
Route::resource('spfViewMap', 'SPFController@spfViewMap');
Route::resource('spfViewIncident', 'SPFController@spfViewIncident');
Route::resource('spfViewCrisis', 'SPFController@spfViewCrisis');
Route::resource('spfAddAssets', 'SPFController@spfAddAssets');
Route::resource('spfViewAssets', 'SPFController@spfViewAssets');
Route::resource('spfChat', 'SPFController@spfChat');
//end of spf route

//define route for email manager
Route::resource('viewEmail', 'emailController@viewEmail');
Route::resource('emailChat','emailController@emailChat');

//define route for public liason
Route::resource('publicView','publicController@viewPublic');
Route::resource('publicChat','publicController@publicChat');
Route::resource('notifyPublic','publicController@notifyPublic');



Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
	Auth::logout();
	Session::flush();
	return Redirect::to('/');
    // return what you want
});