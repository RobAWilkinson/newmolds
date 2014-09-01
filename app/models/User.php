<?php 
class User extends Eloquent{
	public function userlists() 
	{
		return $this->hasMany('UserList');
	}
}
