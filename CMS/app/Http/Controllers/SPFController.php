<?php

namespace CRUX\Http\Controllers;

use CRUX\incidentCases;//use incidentCases model
use CRUX\crisisCases;
use Illuminate\Http\Request;

use CRUX\Http\Requests;
use View;
use DB;
class SPFController extends Controller
{
    
		
		
	public function spfView(){
		
		
		return View::make('pages.spf.spfView');
		
	}
		public function spfViewIncident(){
		
		$incidents = DB::table('incidentReports')->get();	
		
		return View::make('pages.spf.spfViewIncident')->with(compact('incidents'));
		
	}
	
	public function spfViewCrisis(){
		
		
		
		$allCrisis = DB::table('crisis')->get();
		
		return View::make('pages.spf.spfViewCrisis')->with(compact('allCrisis'));
		
	}
	
		public function spfViewMap(){
		
			return View::make('pages.spf.spfViewMap');
		
	}
	
	public function spfChat(){
		
			return View::make('pages.spf.spfChat');
		
	}
		public function spfViewAssets(){	
		
		
		$assets = DB::table('assets')->get();
		
		return View::make('pages.spf.spfViewAssets')->with(compact('assets'));
		
	}
		public function spfAddAssets(){
		

			return View::make('pages.spf.spfAddAssets');
		
	}
}
