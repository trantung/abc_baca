<?php

class AdminTableSeeder extends Seeder {

	public function run()
	{
		Admin::create([
				'role_id' => 1,
				'email'=>'dungnm@abc-group.vn',
				'password'=>Hash::make('123456'),
				'username'=> 'dungnm',
			]);
	}

}