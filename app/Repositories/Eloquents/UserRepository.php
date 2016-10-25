<?php
namespace App\Repositories\Eloquents;
use App\User;
use App\Repositories\Contracts\UserRepoSitoryInterface;

class UserRepoSitory implements UserRepoSitoryInterface{

	public function allUser()
	{
		return User::all();
	}

	public function findUser($id)
	{
		return User::find($id);
	}
}