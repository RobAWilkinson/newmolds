<?php

class UserController extends BaseController {
	public function index()
	{
		$users = User::all();
		return View::make('users/index')->with('users', $users);
	}
	public function show($id)
	{
		$user = User::find($id);
		$lists = User::find($id)->userlists;
		return View::make('users/show')->with(array('user' =>  $user, 'lists' => $lists));
	}

}
