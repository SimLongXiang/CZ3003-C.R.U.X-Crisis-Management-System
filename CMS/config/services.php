<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */
	
	'nexmo' => [
	'key'=> '8e95ced7',
	'secret'=> '90b74367c0d4d7e0',
	'sms_from' => '6593829359'
	
	
	],

    'mailgun' => [
        'domain' => env('[MAILGUN_DOMAIN'),
        'secret' => env('[MAILGUN_SECRET'),
    ],
	
	'mandrill'=> [
		'secret'=>env('MANDRILL_SECRET'),
	],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],
	
	'facebook' => [
		'client_id'=> env('FACEBOOK_CLIENT_ID'),
		'client_secret' => env('FACEBOOK_CLIENT_SECRET'),
		'redirect'=> env('CALLBACK_URL'),
	
	
	],

    'stripe' => [
        'model' => CRUX\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

];
