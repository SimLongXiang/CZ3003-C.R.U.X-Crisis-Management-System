<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
		Eloquent::unguard();
		
		$this->call('UsersTableSeeder');
		$this->call('IncidentsTableSeeder');
		$this->call('CrisisTableSeeder');
		$this->call('assetsTableSeeder');
		$this->call('markersTableSeeder');
		$this->command->info('Assets table seeded!');
		$this->command->info('Crisis table seeded!');
		$this->command->info('Users table seeded!');
		$this->command->info('Incidents table seeded!');
		$this->command->info('Markers table seeded!');
    }
}
