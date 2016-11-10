<?php

namespace CRUX\Http\Controllers;

use CRUX\incidentCases;//use incidentCases model
use CRUX\crisisCases;
use Illuminate\Http\Request;

use CRUX\Http\Requests;
use View;
use DB;

class NEAController extends Controller
{
      
	
	public function neaView(){
		
		
		return View::make('pages.nea.neaView');
		
	}
		public function neaViewIncident(){
		
		$incidents = DB::table('incidentReports')->get();	
		
		return View::make('pages.nea.neaViewIncident')->with(compact('incidents'));
		
	}
	
	public function neaViewCrisis(){
		
		
		
		$allCrisis = DB::table('crisis')->get();
		
		return View::make('pages.nea.neaViewCrisis')->with(compact('allCrisis'));
		
	}
	
		public function neaViewMap(){
		
			return View::make('pages.nea.neaViewMap');
		
	}
	public function neaChat(){
		
			return View::make('pages.nea.neaChat');
		
	}
		public function neaViewAssets(){	
		
		
		$assets = DB::table('assets')->get();
		
		return View::make('pages.nea.neaViewAssets')->with(compact('assets'));
		//to do later
		
	}
		public function neaAddAssets(){
		

			return View::make('pages.nea.neaAddAssets');
		//to do later
		
	}
	
	
	
}
