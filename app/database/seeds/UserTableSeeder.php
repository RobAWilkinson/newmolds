<?php

class UserTableSeeder extends Seeder {
	public function run()
	{
		DB::table('users')->delete();
		User::create(array(
			'username' => 'user1'
		));

		User::create(array(
			'username' => 'user2'
		));
		User::create(array(
			'username' => 'user3'
		));
		User::create(array(
			'username' => 'user3'
		));
		User::create(array(
			'username' => 'user4'
		));
	}
}

