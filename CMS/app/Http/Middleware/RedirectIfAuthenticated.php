<?php

namespace CRUX\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Auth\Guard;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
	 
	protected $auth;
	public function __construct(Guard $auth){
		$this->auth = $auth;
	}
	
    public function handle($request, Closure $next, $guard = null)
    {
		
		/*
		if($this->auth->check()){
			
			$auth = Auth::user()->role()->first();
			
			switch($auth->role){
				
				case '1' : return redirect()->route('pages.viewCrisis');break;
				
				case '2' : return redirect()->route('pages.viewIncident');break;
				
				default : return redirect()->route('pages.login');break;
			}
			
			
			
		}
		*/
        if (Auth::guard($guard)->check()) {
            return redirect('/home');
        }
		

        return $next($request);
    }
}
