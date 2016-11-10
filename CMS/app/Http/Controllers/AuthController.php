<?php

namespace CRUX\Http\Controllers;

use Illuminate\Http\Request;

use CRUX\Http\Requests;
use CRUX\FacebookUser;
use Socialite;
use Auth;
class AuthController extends Controller
{
    protected $redirectPath = '/home';
	
	public function redirectToProvider(){
		
		return Socialite::driver('facebook')->redirect();
		
	}
	
	public function handleProviderCallback(){
		
		try{
			$user = Socialite::driver('facebook')->users();
		}
		catch(Exception $e){
			return redirect('auth/facebook');
		}
		
		$authUser = $this->findOrCreateUser($user);
		Auth::login($authUser,true);
		return redirect()->route('home');
	}
	
	
	private function findOrCreateUser($facebookUser){
		
		$authUser = FacebookUser::where('facebook_id',$facebookUser->id)->first();
		
		if($authUser){
			return $authUser;
		}
		
		return FacebookUser::create([
		'name'=> $facebookUser->name,
		'email'=> $facebookUser->email,
		'facebook_id' =>$facebookUser->id,
		'avatar' => $facebookUser->avatar
		
		]);
	}
}
