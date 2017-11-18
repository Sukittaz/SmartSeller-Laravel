<?php

namespace App\Models;

class User extends \App\Models\Base\User
{
	protected $fillable = [
		'CompanyID',
		'BunchID',
		'UserName',
		'UserLogin',
		'UserEmail',
		'UserPass',
		'UserStatus'
	];
}
