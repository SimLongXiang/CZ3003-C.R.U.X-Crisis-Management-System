<?php

namespace CRUX\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Auth;
use Illuminate\Support\Facades\Redirect;
use DB;

class AccountController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
		   $this->middleware('guest', ['except' => ['logout', 'getLogout']]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('login');
    }

	public function doLogin(){

		 $userdata = array(
		    'name' => Input::get('name'),
		    'password' => Input::get('password')
		  );
		   if (Auth::validate($userdata)) {
        if (Auth::attempt($userdata)) {
			
			$curruser = DB::table('users')->where('name',Input::get('name'))->first();
			
			if($curruser->role == '1'){
          return Redirect::intended('home');
			}
			if($curruser->role =='2'){
	    	return Redirect::intended('operatorView');
			}
			if($curruser->role =='3'){
			return Redirect::intended('pmoView');
			}
			if($curruser->role =='4'){
			return Redirect::intended('safView');
			}
			if($curruser->role =='5'){
			return Redirect::intended('scdfView');
			}
			if($curruser->role =='6'){
			return Redirect::intended('neaView');
			}
			if($curruser->role =='7'){
			return Redirect::intended('spfView');
			}
			if($curruser->role =='8'){
			return Redirect::intended('viewEmail');
			}
			if($curruser->role =='9'){
			return Redirect::intended('publicView');
			}
        }
      } 
	  
	  else {   
		 
	   return Redirect::back()->withInput()->withErrors(array('Error'=>'Invalid username or password entered!'));
      }
	
	}
	

	
}
