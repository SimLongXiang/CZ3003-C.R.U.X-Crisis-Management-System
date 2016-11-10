<?php

namespace CRUX\Http\Controllers;

use Illuminate\Http\Request;

use CRUX\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use CRUX\Models\CrisisManager;
use CRUX\Models\IncidentManager;
use View;
use DB;

class crisisController extends Controller
{
	
	public function createCrisis(){
		
		
	
	$newCrisisID = Input::get('caseID');
	$newCrisisName = Input::get('incidentName');
	$newCrisisCategory = Input::get('incidentCategory'); 
	$newCrisisDescription = Input::get('incidentDescription'); 
	$newCrisisLocation = Input::get('incidentLocation'); 
	$newCrisisAlertLevel = Input::get('incidentAlertLevel'); 
	$newCrisisRemarks = Input::get('incidentRemarks'); 
	$newCrisisLoggedBy = Input::get('incidentLoggedBy');
	$newCrisisDateTime = Input::get('incidentDateTime');
	
	
	

	\CRUX\Models\CrisisManager::createMarker($newCrisisID,$newCrisisName,$newCrisisLocation,'Crisis');
	
	
		
	\CRUX\Models\IncidentManager::deleteIncident($newCrisisID);//pass to MODEL for DB operations	

	
	
	
	$exist = \CRUX\Models\CrisisManager::createCrisis($newCrisisID,$newCrisisName,$newCrisisCategory,$newCrisisDescription,$newCrisisLocation,$newCrisisAlertLevel,$newCrisisRemarks,$newCrisisLoggedBy,$newCrisisDateTime);//pass to MODEL for DB operations
			
		if($exist){
		return Redirect::back()->withInput()->withErrors(array('message'=>'Incident is already a crisis'));
		}
		else
		return Redirect::to('viewCrisis');
		
			
			
	}
	
	public function deescalateCrisis(){
		
		
		$caseID = Input::get('caseID');
		
		
		\CRUX\Models\CrisisManager::deescalateCrisis($caseID);
		
		
		return Redirect::to('viewIncident');
	}
	
		public function deleteCrisis(){
			
		$caseID = Input::get('caseID');
		
		
		\CRUX\Models\CrisisManager::deleteCrisis($caseID);//pass to MODEL for DB operations		
		return Redirect::to('viewCrisis');
		
	}
	
		public function updateCrisis(){
			
		$caseID = Input::get('caseID');
		$newThreat = Input::get('threat');
				
		\CRUX\Models\CrisisManager::updateCrisis($caseID,$newThreat);//pass to MODEL for DB operations	
		
		return Redirect::to('viewCrisis');
		
	}
}
