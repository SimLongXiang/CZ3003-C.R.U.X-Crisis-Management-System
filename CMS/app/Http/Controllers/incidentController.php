<?php

namespace CRUX\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use CRUX\Http\Requests;
use View;
use CRUX\Models\IncidentManager;
use DB;
use Route;
use Khill\Lavacharts\Lavacharts;
use Lava;

class incidentController extends Controller
{
    //
	
	
	public function display(){
		
			$noOfIncident = DB::table('incidentReports')->count();
			$noOfFlood = DB::table('incidentReports')->where('incidentCategory','Flood')->count();
			$noOfFire =  DB::table('incidentReports')->where('incidentCategory','Fire')->count();
			$noOfCrisis =  DB::table('crisis')->count();
		
			
			return View::make('pages.report')->with(['incident' => $noOfIncident, 'noOfFlood' => $noOfFlood,'noOfFire'=>$noOfFire,'noOfCrisis'=>$noOfCrisis]);
	
	}
	
	
	
	public function updateIncidentThreat(){
		
		$newThreat =Input::get('threat');
		$incidentCase = Input::get('caseID');
		
		\CRUX\Models\IncidentManager::updateIncidentThreatDB($incidentCase,$newThreat);//pass to MODEL for DB operations
		return Redirect::to('operatorView');
		
	}
	
	public function createIncident(){
		
		$newIncidentID = Input::get('caseID');
		$newIncidentName = Input::get('incidentName');
		$newIncidentCategory = Input::get('incidentCategory');
		$newIncidentDescription = Input::get('incidentDescription');
		$newIncidentLocation = Input::get('incidentLocation');
		$newIncidentDateTime = Input::get('incidentTiming');
		$newIncidentAlertLevel = Input::get('alertLevel');
		$newIncidentRemarks = Input::get('incidentRemarks');
		$newIncidentLoggedBy = Input::get('loggedBy');
		
		$newIncidentLat = Input::get('lat');
		$newIncidentLong = Input::get('lng');
		
		\CRUX\Models\IncidentManager::createMarker($newIncidentID,$newIncidentName,$newIncidentLocation,$newIncidentCategory,$newIncidentLat,$newIncidentLong);
		
		
		\CRUX\Models\IncidentManager::createIncident($newIncidentID,$newIncidentName,$newIncidentCategory,$newIncidentDescription,$newIncidentLocation,$newIncidentDateTime,$newIncidentAlertLevel,$newIncidentRemarks,$newIncidentLoggedBy);//pass to MODEL for DB operation
			
		return Redirect::to('operatorView');
		
	}
	
	public function deleteIncident(){
		$caseID = Input::get('caseID');
		
		
		\CRUX\Models\IncidentManager::deleteIncidentMarker($caseID);
		
		\CRUX\Models\IncidentManager::deleteIncident($caseID);//pass to MODEL for DB operations	
		
		
		return Redirect::to('viewIncident');
		
	}
	
	public function updateIncident(){
		$caseID = Input::get('caseID');
	
		return View::make('pages.editIncident')->with($caseID);
		
	}
	
	public function editIncident(){
		
		$incidents = DB::table('incidentReports')->get();	
		
		return View::make('pages.editIncident')->with(compact('incidents'));
	
		
	}
	public function operatorEditsIncident(){
	$caseID = Input::get('caseID');
		
	$incidents =	\CRUX\Models\IncidentManager::getEditIncident($caseID);
		
	
	return View::make('pages.chooseIncident')->with(compact('incidents'));
		
	}
	
	public function operatorUpdateIncident(){
		
	$newIncidentID = Input::get('caseID');
	$newIncidentName = Input::get('incidentName');
	$newIncidentCategory = Input::get('incidentCategory');
	$newIncidentDescription = Input::get('description');
	$newIncidentLocation = Input::get('incidentLocation');
	$newIncidentDateTime = Input::get('datetimeOfIncident');
	$newIncidentAlertLevel = Input::get('alertLevel');
	$newIncidentRemarks = Input::get('remarks');
	$newIncidentLoggedBy = Input::get('loggedBy');

	
	
	\CRUX\Models\IncidentManager::operatorUpdatingIncident($newIncidentID,$newIncidentName,$newIncidentCategory,$newIncidentDescription,$newIncidentLocation,$newIncidentDateTime,$newIncidentAlertLevel,$newIncidentRemarks,$newIncidentLoggedBy);
	
	
	
	return Redirect::to('operatorView');
		
	}
	
}
