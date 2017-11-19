<?php

namespace App\Models;
use Session;

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

	public function doLogin($userLogin, $userPass){
		$user = User::select('UserID', 'CompanyID', 'UserName')
				  ->where('UserLogin', '=', $userLogin)
				  ->where('UserPass', '=', md5($userPass))->get();

		if (count($user)) {
			$data = array(
						'UserID' =>  $user[0]->UserID,
						'CompanyID' =>  $user[0]->CompanyID,
						'UserName' =>  $user[0]->UserName,
					);
		
			Session::put('user', $data); 


			return true;
		}else{
			return false;
		}				  
	}

	public function isLogged() {
		dd(Session::get('user'));
		exit;

		
		if(Session::has('user')) {
			return true;
		} else {
			return false;
		}
	}	
}
