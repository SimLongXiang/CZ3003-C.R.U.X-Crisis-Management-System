<?php

namespace CRUX\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
use View;
use Mail;
use CRUX\User;
use SMS;
use Notification;
use CRUX\Notifications\NewPost;
use Nexmo;
use CRUX\Models\IncidentManager;
class CrisisManager extends Model
{
 

public static function createCrisis(String $newCrisisID,$newCrisisName,$newCrisisCategory,$newCrisisDescription,$newCrisisLocation,$newCrisisAlertLevel,$newCrisisRemarks,$newCrisisLoggedBy,$newCrisisDateTime){
	
		$exist = DB::table('crisis')->where('caseID',$newCrisisID)->first();
	/*		
					//Notify relevant authorities through email
		$user = User::find(1)->toArray();
		Mail::send('emails.newCrisisEmail',$user, function ($message) use ($user){
			$message->to('jianwei1993@hotmail.com');
			$message->subject(Input::get('subject'));
			
		});//send to System Admin
		
		Mail::send('emails.newCrisisEmail',$user, function ($message) use ($user){
			$message->to('jianwei1993@hotmail.com');
			$message->subject(Input::get('subject'));
			
		});//send to PMO office
		
		Mail::send('emails.newCrisisEmail',$user, function ($message) use ($user){
			$message->to('jianwei1993@hotmail.com');
			$message->subject(Input::get('subject'));
			
		}); //send to NEA liaison
		
		Mail::send('emails.newCrisisEmail',$user, function ($message) use ($user){
			$message->to('jianwei1993@hotmail.com');
			$message->subject(Input::get('subject'));
			
		}); //Send to SAF Commander
		
		Mail::send('emails.newCrisisEmail',$user, function ($message) use ($user){
			$message->to('jianwei1993@hotmail.com');
			$message->subject(Input::get('subject'));
			
		}); //Send to SCDF Commander
		Mail::send('emails.newCrisisEmail',$user, function ($message) use ($user){
			$message->to('jianwei1993@hotmail.com');
			$message->subject(Input::get('subject'));
			
		}); //Send to SPF Commander
		
		Mail::send('emails.newCrisisEmail',$user, function ($message) use ($user){
			$message->to('jianwei1993@hotmail.com');
			$message->subject(Input::get('subject'));
			
		}); //Send to Email Liaison
		
		//Notify relevant authorities through SMS
		
		$client =new Nexmo\Client(new Nexmo\Client\Credentials\Basic('8e95ced7','90b74367c0d4d7e0'));
		$smsmessage = $client->message()->send([
		'to' => '6592367465',
		'from' => '6593829359',
		'text' => $smsPost
		]);
		//send sms to system admin
		
		$smsmessage = $client->message()->send([
		'to' => '6592367465',
		'from' => '6593829359',
		'text' => $smsPost
		]); //send sms to pmo office
		
		
		$smsmessage = $client->message()->send([
		'to' => '6592367465',
		'from' => '6593829359',
		'text' => $smsPost
		]); //send sms to nea liaison
		
		$smsmessage = $client->message()->send([
		'to' => '6592367465',
		'from' => '6593829359',
		'text' => $smsPost
		]); //send sms to SAF commander
		
		$smsmessage = $client->message()->send([
		'to' => '6592367465',
		'from' => '6593829359',
		'text' => $smsPost
		]); //send sms to SPF commander
		
		$smsmessage = $client->message()->send([
		'to' => '6592367465',
		'from' => '6593829359',
		'text' => $smsPost
		]);
		 //send sms to SCDF commander
		 
		 $smsmessage = $client->message()->send([
		'to' => '6592367465',
		'from' => '6593829359',
		'text' => $smsPost
		]);
		//send sms to email manager
		
		$smsmessage = $client->message()->send([
		'to' => '6592367465',
		'from' => '6593829359',
		'text' => $smsPost
		]);
		//send sms to public liaison
		*/
		$client =new Nexmo\Client(new Nexmo\Client\Credentials\Basic('8e95ced7','90b74367c0d4d7e0'));
		$smsmessage = $client->message()->send([
		'to' => '6592367465',
		'from' => '6593829359',
		'text' => 'Please be notify that there a Crisis'
		]);
		
		
		$smsmessage = $client->message()->send([
		'to' => '6597375463',
		'from' => '6593829359',
		'text' => 'Please be notify that there a Crisis'
		]); 
		
		$smsmessage = $client->message()->send([
		'to' => '6597715695',
		'from' => '6593829359',
		'text' => 'Please be notify that there a Crisis'
		]); 
		
			if($exist == null){
	
				DB::table('crisis')->insert([
			'caseID' => $newCrisisID, 
			'crisisName' => $newCrisisName,
			'crisisCategory' => $newCrisisCategory,
			'crisisDescription'=> $newCrisisDescription,
			'crisisLocation' => $newCrisisLocation,
			'crisisLevel' => $newCrisisAlertLevel,
			'crisisRemarks' => $newCrisisRemarks,
			'crisisLoggedBy' => $newCrisisLoggedBy,
			'crisisDateTime' => $newCrisisDateTime
			]);
			
			return false;
			}
			
			else 
			return true;
}

public static function createMarker(String $newCrisisID,$newCrisisName,$newCrisisLocation,$newCrisisCategory){
	
			$incidentMarkerLat = DB::table('markers')->where('id',$newCrisisID)->value('lat');
			$incidentMarkerLong = DB::table('markers')->where('id',$newCrisisID)->value('lng');
			
			
			
		\CRUX\Models\IncidentManager::deleteIncidentMarker($newCrisisID);
		
		DB::table('markers')->insert([
			'id' => $newCrisisID, 
			'name' => $newCrisisName,
			'type' => $newCrisisCategory,
			'address' => $newCrisisLocation,
			'lat' => $incidentMarkerLat,
			'lng' => $incidentMarkerLong
			]);
		
			return;
		
	}

	public static function deescalateCrisis(String $caseID){
		
		
		$newIncidentCase = $caseID;
		
		$incidentID = DB::table('crisis')->where('caseID',$caseID)->value('caseID');
		$incidentName = DB::table('crisis')->where('caseID',$caseID)->value('crisisName');
		$incidentCategory = DB::table('crisis')->where('caseID',$caseID)->value('crisisCategory');
		$incidentDescription = DB::table('crisis')->where('caseID',$caseID)->value('crisisDescription');
		$incidentLocation= DB::table('crisis')->where('caseID',$caseID)->value('crisisLocation');
		$incidentAlertLevel = DB::table('crisis')->where('caseID',$caseID)->value('crisisLevel');
		$incidentRemarks = DB::table('crisis')->where('caseID',$caseID)->value('crisisRemarks');
		$incidentLoggedBy = DB::table('crisis')->where('caseID',$caseID)->value('crisisLoggedBy');
		$incidentDateTime = DB::table('crisis')->where('caseID',$caseID)->value('crisisDateTime');			
		
		$incidentMarkerID = DB::table('markers')->where('id',$caseID)->value('id');
		$incidentMarkerName = DB::table('markers')->where('id',$caseID)->value('name');
		$incidentMarkerType = DB::table('markers')->where('id',$caseID)->value('type');
		$incidentMarkerAddress = DB::table('markers')->where('id',$caseID)->value('address');
		$incidentMarkerLat = DB::table('markers')->where('id',$caseID)->value('lat');
		$incidentMarkerLong = DB::table('markers')->where('id',$caseID)->value('lng');
		
		
		\CRUX\Models\IncidentManager::deleteIncidentMarker($newIncidentCase);
		DB::table('crisis')->where('caseID',$newIncidentCase)->delete();
		
		DB::table('markers')->insert([
			'id' => $incidentMarkerID, 
			'name' => $incidentMarkerName,
			'type' => $incidentCategory,
			'address' => $incidentMarkerAddress,
			'lat' => $incidentMarkerLat,
			'lng' => $incidentMarkerLong
			]);
			
		DB::table('incidentReports')->insert([
			'caseID' => $incidentID, 
			'incidentName' => $incidentName,
			'incidentCategory' => $incidentCategory,
			'description'=> $incidentDescription,
			'incidentLocation' => $incidentLocation,
			'alertLevel' => $incidentAlertLevel,
			'remarks' => $incidentRemarks,
			'loggedBy' => $incidentLoggedBy,
			'datetimeOfIncident' => $incidentDateTime
			]);
		return;
		
		
		
	}
	
	
	
public static function deleteCrisis(String $caseID){
	DB::table('crisis')->where('caseID',$caseID)->delete();
	\CRUX\Models\IncidentManager::deleteIncidentMarker($caseID);
	
	return;
	
} 

public static function updateCrisis(String $caseID,$newThreat){

		DB::table('crisis')->where('caseID',$caseID)->update(['crisisLevel' => $newThreat]);
		return;
		
	}
	
	
	
}
