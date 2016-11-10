<?php

use Illuminate\Database\Seeder;

class CrisisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('crisis')->delete();
		
			 DB::table('crisis')->insert([
					'caseID' => '0022',
					'crisisName' => 'Major Fire in Chinese Garden',
					'crisisLocation' => 'Chinese garden',
					'crisisCategory' => 'Fire',
					'crisisDescription' => 'Building on fire',
					'crisisRemarks' => 'Requesting help from SCDF',
					'crisisLevel' => 'ALERT 3',
					'crisisLoggedBy' => 'John',
					'crisisDateTime' => '2016-01-01 09:11:11',
        ]);
    }
}
