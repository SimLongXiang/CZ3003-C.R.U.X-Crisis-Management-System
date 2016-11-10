<?php

use Illuminate\Database\Seeder;

class markersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		
		DB::table('markers')->delete();
		
			 DB::table('markers')->insert([
					'id' => '0052',
					'name' => 'Fire in Ang Mo Kio',
					'address' => 'AMK',
					'type' => 'Fire',
					'lng' =>'103.845434', 
					'lat' =>'1.369115' ,
					
        ]);
			 DB::table('markers')->insert([
					'id' => '0062',
					'name' => 'Flood in Orchard',
					'address' => 'Orchard',
					'type' => 'Flood',
					'lng' =>'103.838271', 
					'lat' =>'1.301583' ,
        ]);
		
		DB::table('markers')->insert([
					'id' => '0022',
					'name' => 'Major Fire in Chinese Garden',
					'address' => 'Chinese Garden',
					'type' => 'Crisis',
					'lng' =>'103.730000', 
					'lat' =>'1.338611' ,
        ]);
		
		DB::table('markers')->insert([
					'id' => '003111',
					'name' => 'Red Rhino',
					'address' => 'Queenstown',
					'type' => 'Asset',
					'lng' =>'103.786127', 
					'lat' =>'1.294166' ,
        ]);
		
		DB::table('markers')->insert([
					'id' => '004999',
					'name' => 'Water Pump Veh',
					'address' => 'Jurong',
					'type' => 'Asset',
					'lng' =>'103.743552', 
					'lat' =>'1.332857' ,
        ]);
		
		
		
		
		
    }
}
