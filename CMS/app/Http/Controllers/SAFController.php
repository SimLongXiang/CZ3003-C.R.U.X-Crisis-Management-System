<?php

namespace CRUX\Http\Controllers;

use CRUX\incidentCases;//use incidentCases model
use CRUX\crisisCases;
use Illuminate\Http\Request;

use CRUX\Http\Requests;
use View;
use DB;
class SAFController extends Controller
{
 
		
		
	public function safView(){
		
		
		return View::make('pages.saf.safView');
		
	}
		public function safViewIncident(){
		
		$incidents = DB::table('incidentReports')->get();	
		
		return View::make('pages.saf.safViewIncident')->with(compact('incidents'));
		
	}
	
	public function safViewCrisis(){
		
		
		
		$allCrisis = DB::table('crisis')->get();
		
		return View::make('pages.saf.safViewCrisis')->with(compact('allCrisis'));
		
	}
	
		public function safViewMap(){
		
			return View::make('pages.saf.safViewMap');
		
	}
	public function safChat(){
		
			return View::make('pages.saf.safChat');
		
	}
		public function safViewAssets(){	
		
		
		$assets = DB::table('assets')->get();
		
		return View::make('pages.saf.safViewAssets')->with(compact('assets'));
		//to do later
		
	}
		public function safAddAssets(){
		

			return View::make('pages.saf.safAddAssets');
		//to do later
		
	}
	}
	
	
	