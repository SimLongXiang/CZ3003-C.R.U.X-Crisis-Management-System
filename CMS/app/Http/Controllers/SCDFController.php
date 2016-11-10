<?php

namespace CRUX\Http\Controllers;

use CRUX\incidentCases;//use incidentCases model
use CRUX\crisisCases;
use Illuminate\Http\Request;

use CRUX\Http\Requests;
use View;
use DB;
class SCDFController extends Controller
{
    
		
		
	public function scdfView(){
		
		
		return View::make('pages.scdf.scdfView');
		
	}
		public function scdfViewIncident(){
		
		$incidents = DB::table('incidentReports')->get();	
		
		return View::make('pages.scdf.scdfViewIncident')->with(compact('incidents'));
		
	}
	
	public function scdfViewCrisis(){
		
		
		
		$allCrisis = DB::table('crisis')->get();
		
		return View::make('pages.scdf.scdfViewCrisis')->with(compact('allCrisis'));
		
	}
	public function scdfChat(){
		

		
		return View::make('pages.scdf.scdfChat');
		
	}
	
		public function scdfViewMap(){
		
			return View::make('pages.scdf.scdfViewMap');
		
	}
		public function scdfViewAssets(){	
		
		
		$assets = DB::table('assets')->get();
		
		return View::make('pages.scdf.scdfViewAssets')->with(compact('assets'));
		
		
	}
		public function scdfAddAssets(){
		

			return View::make('pages.scdf.scdfAddAssets');
		
	}
}
