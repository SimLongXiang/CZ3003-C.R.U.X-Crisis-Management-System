<?php

namespace CRUX\Models;
use DB;
use Illuminate\Database\Eloquent\Model;
use View;
use Mail;
use CRUX\User;
use SMS;
use Notification;
use CRUX\Notifications\NewPost;
use Nexmo;
use Illuminate\Support\Facades\Redirect;
use Khill\Lavacharts\Lavacharts;

class IncidentManager extends Model
{
		public static function updateIncidentThreatDB(String $incidentCase,$newThreat){
	
     	DB::table('incidentReports')->where('caseID',$incidentCase)->update(['alertLevel' => $newThreat]);
		return;
		//return Redirect::to('operatorView');
		
	}
    //
	public static function createMarker(String $newIncidentID,$newIncidentName,$newIncidentLocation,$newIncidentCategory,$newIncidentLat,$newIncidentLong){
		
		DB::table('markers')->insert([
			'id' => $newIncidentID, 
			'name' => $newIncidentName,
			'type' => $newIncidentCategory,
			'address' => $newIncidentLocation,
			'lat' => $newIncidentLat,
			'lng' => $newIncidentLong
			]);
			
			return;
		
	}
	
		
	public static function getEditIncident(String $caseID){
		
		$incident = DB::table('incidentReports')->where('caseID',$caseID)->first();

		return $incident;
		
	}
	
	public static function createIncident(String $newIncidentID,$newIncidentName,$newIncidentCategory,$newIncidentDescription,$newIncidentLocation,$newIncidentDateTime,$newIncidentAlertLevel,$newIncidentRemarks,$newIncidentLoggedBy){
		
		
		
		DB::table('incidentReports')->insert([
			'caseID' => $newIncidentID, 
			'incidentName' => $newIncidentName,
			'incidentCategory' => $newIncidentCategory,
			'description'=> $newIncidentDescription,
			'incidentLocation' => $newIncidentLocation,
			'alertLevel' => $newIncidentAlertLevel,
			'remarks' => $newIncidentRemarks,
			'loggedBy' => $newIncidentLoggedBy,
			'datetimeOfIncident' => $newIncidentDateTime
			]);
			
		/*	
		//Notify relevant authorities through email
		$user = User::find(1)->toArray();
		Mail::send('emails.newIncidentEmail',$user, function ($message) use ($user){
			$message->to('jianwei1993@hotmail.com');
			$message->subject(Input::get('subject'));
			
		});//send to System Admin
		
		Mail::send('emails.newIncidentEmail',$user, function ($message) use ($user){
			$message->to('zylim93@gmail.com');
			$message->subject(Input::get('subject'));
			
		});//send to PMO office
		
		Mail::send('emails.newIncidentEmail',$user, function ($message) use ($user){
			$message->to('');
			$message->subject(Input::get('subject'));
			
		}); //send to NEA liaison
		
		Mail::send('emails.newIncidentEmail',$user, function ($message) use ($user){
			$message->to('');
			$message->subject(Input::get('subject'));
			
		}); //Send to SAF Commander
		
		Mail::send('emails.newIncidentEmail',$user, function ($message) use ($user){
			$message->to('');
			$message->subject(Input::get('subject'));
			
		}); //Send to SCDF Commander
		Mail::send('emails.newIncidentEmail',$user, function ($message) use ($user){
			$message->to('');
			$message->subject(Input::get('subject'));
			
		}); //Send to SPF Commander
		
		Mail::send('emails.newIncidentEmail',$user, function ($message) use ($user){
			$message->to('');
			$message->subject(Input::get('subject'));
			
		}); //Send to Email Liaison
		
		//Notify relevant authorities through SMS
		
		$client =new Nexmo\Client(new Nexmo\Client\Credentials\Basic('8e95ced7','90b74367c0d4d7e0'));
		$smsmessage = $client->message()->send([
		'to' => '6592367465',
		'from' => '6593829359',
		'text' => 'Please be notify that there is a new incident'
		]);
		//send sms to system admin
		
		$smsmessage = $client->message()->send([
		'to' => '6597309519',
		'from' => '6593829359',
		'text' => 'Please be notify that there is a new incident'
		]); //send sms to pmo office
		
		
		$smsmessage = $client->message()->send([
		'to' => '',
		'from' => '6593829359',
		'text' => $smsPost
		]); //send sms to nea liaison
		
		$smsmessage = $client->message()->send([
		'to' => '',
		'from' => '6593829359',
		'text' => $smsPost
		]); //send sms to SAF commander
		
		$smsmessage = $client->message()->send([
		'to' => '',
		'from' => '6593829359',
		'text' => $smsPost
		]); //send sms to SPF commander
		
		$smsmessage = $client->message()->send([
		'to' => '',
		'from' => '6593829359',
		'text' => $smsPost
		]);
		 //send sms to SCDF commander
		 
		 $smsmessage = $client->message()->send([
		'to' => '',
		'from' => '6593829359',
		'text' => $smsPost
		]);
		//send sms to email manager
		
		$smsmessage = $client->message()->send([
		'to' => '',
		'from' => '6593829359',
		'text' => $smsPost
		]);
		//send sms to public liaison
		*/
		
		$client =new Nexmo\Client(new Nexmo\Client\Credentials\Basic('8e95ced7','90b74367c0d4d7e0'));
		$smsmessage = $client->message()->send([
		'to' => '6592367465',
		'from' => '6593829359',
		'text' => 'Please be notify that there is a new incident'
		]);
		//send sms to system admin
		
		$smsmessage = $client->message()->send([
		'to' => '6597309519',
		'from' => '6593829359',
		'text' => 'Please be notify that there is a new incident'
		]); //send sms to SCDF
		
		
			return;
	}
	
		public static function deleteIncident(String $caseID){
		
		
		DB::table('incidentReports')->where('caseID',$caseID)->delete();
	
		return;
		
	}
	public static function deleteIncidentMarker(String $caseID){
		
		
		DB::table('markers')->where('id',$caseID)->delete();
	
		return;
		
	}
	
	
	public static function operatorUpdatingIncident(String $newIncidentID,$newIncidentName,$newIncidentCategory,$newIncidentDescription,$newIncidentLocation,$newIncidentDateTime,$newIncidentAlertLevel,$newIncidentRemarks,$newIncidentLoggedBy){
		
		
		DB::table('incidentReports')->where('caseID',$newIncidentID)->update(['caseID' => $newIncidentID, 
			'incidentName' => $newIncidentName,
			'incidentCategory' => $newIncidentCategory,
			'description'=> $newIncidentDescription,
			'incidentLocation' => $newIncidentLocation,
			'alertLevel' => $newIncidentAlertLevel,
			'remarks' => $newIncidentRemarks,
			'loggedBy' => $newIncidentLoggedBy,
			'datetimeOfIncident' => $newIncidentDateTime]);
			
			
			return;
			
	}
}
