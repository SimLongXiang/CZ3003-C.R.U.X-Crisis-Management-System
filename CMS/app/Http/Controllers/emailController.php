<?php

namespace CRUX\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use CRUX\Http\Requests;
use View;
use Mail;
use DB;
use CRUX\User;
use SMS;
use Notification;
use CRUX\Notifications\NewPost;
use Nexmo;


class emailController extends Controller
{
    
	
	public function viewEmail(){
		
		
		return View::make('pages.viewEmail');
	}
	public function emailChat(){
		
		
		return View::make('pages.emailChat');
	}
	
	public function sendEmail(){
		
		$user = User::find(1)->toArray();
		Mail::send('emails.send',$user, function ($message) use ($user){
			
			$text = Input::get('message');
			$message->to('jianwei1993@hotmail.com');
			$message->subject(Input::get('subject'))->setBody($text);
			
		});
	
			  return Redirect::to('viewEmail');
	}
	

}
