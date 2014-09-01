<?php

class TaskTableSeeder extends Seeder {
	public function run()
	{
		DB::table('tasks')->delete();
		Task::create(array(
			'title' => 'title 1',
			'body' => 'body',
			'user_id' => 12,
			'completed' => FALSE
		));
		Task::create(array(
			'title' => 'title 2',
			'body' => 'body2',
			'user_id' => 12,
			'completed' => FALSE
		));
		Task::create(array(
			'title' => 'title 3',
			'body' => 'body3',
			'user_id' => 13,
			'completed' => FALSE
		));
		Task::create(array(
			'title' => 'title 4',
			'body' => 'body4',
			'user_id' => 14,
			'completed' => FALSE
		));
		Task::create(array(
			'title' => 'title 5',
			'body' => 'body5',
			'user_id' => 15,
			'completed' => FALSE
		));
		Task::create(array(
			'title' => 'title 6',
			'body' => 'body6',
			'user_id' => 16,
			'completed' => FALSE
		));
	}
}
