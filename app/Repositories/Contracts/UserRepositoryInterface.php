<?php
namespace App\Repositories\Contracts;

interface UserRepositoryInterface{
	public function allUser();
	public function findUser($id);
}