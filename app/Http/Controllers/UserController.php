<?php 


namespace App\Http\Controllers;

use App\Models\Base\User;
use App\Http\Requests;
use Illuminate\Http\Request;

class UserController extends Controller {

    public function index() {
		$user  = User::all();
		$array = array('user'=>$user);

        return view('user-list', $array);
    }

    public function add(Request $request) {
		if ($request->has('submit')) {
			$userName 	= $request->input('UserName');
			$userLogin 	= $request->input('UserLogin');
			$userEmail 	= $request->input('UserEmail');
			$userPass 	= $request->input('UserPass');
			$bunchID 	= 6;

			$user 				= new User;
			$user->CompanyID 	= 1;
			$user->UserName 	= $userName;
			$user->UserLogin 	= $userLogin;
			$user->UserEmail 	= $userEmail;
			$user->UserPass 	= md5($userPass);
			$user->BunchID 		= $bunchID;
			$user->save();

			return redirect('/user');
		}

    	return view('user-add');	
    }

}