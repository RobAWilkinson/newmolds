<?php

class UserListTableSeeder extends Seeder {
	public function run()
	{
		DB::table('user_lists')->delete();
		UserList::create(array(
			'list_title' => 'LIst title 1',
			'user_id' => 8
		));
		UserList::create(array(
			'list_title' => 'LIst title 2',
			'user_id' => 8
		));
		UserList::create(array(
			'list_title' => 'LIst title 3',
			'user_id' => 7
		));
	}
}
