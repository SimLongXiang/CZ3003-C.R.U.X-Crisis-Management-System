<?php

use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

Class IncidentsTableSeeder extends Seeder {
	
	public function run(){
		DB::table('IncidentReports')->delete();
		
			 DB::table('IncidentReports')->insert([
					'caseID' => '0052',
					'incidentName' => 'Fire in Ang Mo Kio',
					'incidentCategory' => 'Fire',
					'description' => 'Fire started in AMK HUB due to arsonist',
					'incidentLocation' => 'AMK',
					'remarks' => 'At AMK',
					'alertLevel' => 'ALERT 3',
					'loggedBy' => 'thomas',
					'datetimeOfIncident' => '2016-01-01 21:11:11',
        ]);
			 DB::table('IncidentReports')->insert([
					'caseID' => '0062',
					'incidentName' => 'Flood in Orchard',
					'incidentCategory' => 'Flood',
					'description' => 'Flash Flood in Orchard',
					'incidentLocation' => 'Orchard',
					'remarks' => 'SCDF team to handle case at 14:21',
					'alertLevel' => 'ALERT 3',
					'loggedBy' => 'guojun',
					'datetimeOfIncident' => '2016-01-12 21:2:22',
        ]);
		
}
}
