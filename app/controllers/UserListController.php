<?php

class UserListController extends BaseController {
	public function index()
	{
		$lists = UserList::all();
		return $lists;
	}
}
