<?php

namespace CRUX\Models;

use Illuminate\Database\Eloquent\Model;
use Nexmo;
use Twitter;

class PublicManager extends Model
{
    //
	
	public static function sendSMS(String $smsPost){
		
		
		$client =new Nexmo\Client(new Nexmo\Client\Credentials\Basic('8e95ced7','90b74367c0d4d7e0'));
		$smsmessage = $client->message()->send([
		'to' => '6597309519',
		'from' => '6593829359',
		'text' => $smsPost
		]);
	
		
		return;
	}
	
	public static function postTweet(String $tweetPost){
		
		Twitter::postTweet(['status' => $tweetPost,'format' => 'json']);
		
		return;
	}
	
	public static function postFacebookStatus(String $facebookPost){
		
			$page_access_token ='EAACEdEose0cBAAbK5crC3UIH8wlKXDVdFyidvGlvaUuiCuXMIaZBFF0ZCXKB4sfnXgZCcqAaKmWTMCWZCZCcVg06J6USE0uZCqvBEZAZBZBssksqM4dXY9EXDZChhGG7cPpnU5VfeFChGjoQ9kcJZChPwTQHcHuBMoffEwuBZBdtPyZAzAtekkNPaAxPA';
			
			
		$page_id='124384388035479';
		
		$data['message'] = $facebookPost;
		
		$data['access_token'] = $page_access_token;
		$post_url = 'https://graph.facebook.com/'.$page_id.'/feed';
		
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $post_url);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$return = curl_exec($ch);
		curl_close($ch);
		return;
	}
}

