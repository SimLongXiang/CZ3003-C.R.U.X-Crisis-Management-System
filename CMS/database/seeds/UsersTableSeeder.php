<?php

use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

Class UsersTableSeeder extends Seeder {
	
	public function run(){
		DB::table('users')->delete();
		
		User::create(array(
					'id' => '0001',
					'email' => 'jianwei1995@hotmail.com',
					'password' => Hash::make('password'),
					'name' => 'jianwei',
					'role' => '1',//commander/sysadmin	
					'post' => '6593829359',
					));
					
		User::create(array(
					'id' => '0002',
					'email' => 'johnlittle123@hotmail.com',
					'password' => Hash::make('1234567'),
					'name' => 'john',
					'role' => '2',//calloperator
					));
					
		User::create(array(
					'id' => '0003',
					'email' => 'jasonsee@hotmail.com',
					'password' => Hash::make('41sar'),
					'name' => 'jason',
					'role' => '3',//PMO keyappointment holder
					
					));
			
		User::create(array(
					'id' => '0004',
					'email' => 'guojun92@hotmail.com',
					'password' => Hash::make('guojun'),
					'name' => 'guojun',
					'role' => '4',//SAF commander
					
					));
		User::create(array(
					'id' => '0005',
					'email' => 'zhiyang93@hotmail.com',
					'password' => Hash::make('thug'),
					'name' => 'zhiyang',
					'role' => '5',//SCDF commander
					
					));				
		User::create(array(
					'id' => '0006',
					'email' => 'xiaogen94@hotmail.com',
					'password' => Hash::make('gen'),
					'name' => 'gen',
					'role' => '6',//nea liaison
					
					));
		User::create(array(
					'id' => '0007',
					'email' => 'thomas@hotmail.com',
					'password' => Hash::make('train'),
					'name' => 'thomas',
					'role' => '7',//SPF commander
					
					));
					
		User::create(array(
					'id' => '0008',
					'email' => 'ghost@hotmail.com',
					'password' => Hash::make('ghost'),
					'name' => 'ghost',
					'role' => '8',//Email manager
					
					));
		User::create(array(
					'id' => '0009',
					'email' => 'khgoh22@hotmail.com',
					'password' => Hash::make('kh'),
					'name' => 'kh',
					'role' => '9',//public liaison
					
					));
	}
}