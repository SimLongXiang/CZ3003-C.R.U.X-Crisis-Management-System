<?php

use Illuminate\Database\Seeder;

class assetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		DB::table('assets')->delete();
		
		
			 DB::table('assets')->insert([
					'assetID' => '004999',
					'assetName' => 'Water Pump Veh',
					'assetDescription' => 'Water pump vechicle to drain water in drains',
					'assetType' => 'Vehicle',
					'assetLocation' => 'Jurong',
					'assetStatus' => 'On the move to Orchard',
					'assetRemarks' => 'None',
					'assetDepartment' => 'NEA',
        ]);
    }
}
