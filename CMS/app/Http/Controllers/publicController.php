<?php

namespace CRUX\Http\Controllers;

use Illuminate\Http\Request;
use View;
use CRUX\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use \CRUX\Models\PublicManager;
use Twitter;

class publicController extends Controller
{
    //
		public function viewPublic(){
		
		return View::make('pages.publicView');
	}
	
	
		public function notifyPublic(){
		
		return View::make('pages.notifyPublic');
	}
	public function publicChat(){
		
		return View::make('pages.publicChat');
	}
	
	
	
	public function sendSMS(){
		
		
		$smsPost = Input::get('id');
	
		\CRUX\Models\PublicManager::sendSMS($smsPost);//pass to MODEL to send SMS
		return Redirect::to('publicView');
	}
	public function facebookPost(){
		
		
			$facebookPost = Input::get('facebookPost');
			
			\CRUX\Models\PublicManager::postFacebookStatus($facebookPost);//pass to MODEL to post facebook
					
					
			return Redirect::to('publicView');
			
			
			
	}
	
	public function twitterPost(){
		$twitterPost = Input::get('tweet');
		
		\CRUX\Models\PublicManager::postTweet($twitterPost);//pass to MODEL to post Twitter
		
		
    	return Redirect::to('publicView');

}
}