<?php 


namespace App\Http\Controllers;

use App\Models\Base\User;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class UserController extends Controller {

	public function __construct(Redirector $redirect) {
		$user = new User;
        if($user->isLogged() == false) {
            $redirect->to('login')->send();
        }
	}

    public function index() {
		$user  = User::with('bunch')->get();
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

    public function view($id) {
		$user 	= User::with('bunch')->find($id);
		$array 	= array('user'=>$user);

        return view('user-view', $array);
    } 

    public function edit(Request $request, $id) {
		$user = User::find($id);
		$array 	  = array('user'=>$user);   

		if ($request->has('submit')) {
			$userName 	= $request->input('UserName');
			$userLogin 	= $request->input('UserLogin');
			$userEmail 	= $request->input('UserEmail');
			$userPass 	= $request->input('UserPass');

			$user 				= User::find($id);
			$user->UserName 	= $userName;
			$user->UserLogin 	= $userLogin;
			$user->UserEmail 	= $userEmail;
			$user->UserPass 	= md5($userPass);
			$user->update();

			return redirect('/user');
		}       

    	return view('user-edit', $array);	
	}      

}