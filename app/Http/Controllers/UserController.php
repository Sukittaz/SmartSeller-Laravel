<?php 


namespace App\Http\Controllers;

use App\Models\Base\User;
use App\Repositories\UserRepository;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class UserController extends Controller {

	private $CompanyID;

	public function __construct(Redirector $redirect) {
		$this->CompanyID = session()->get('user')['CompanyID'];
		
        if(UserRepository::isLogged() == false) {
			$redirect->to('login')->send();
        }
	}

    public function index() {
		$user  = User::with('bunch')->where('CompanyID', '=', $this->CompanyID)->get();
		$array = array('user'=>$user);

        return view('user/user-list', $array);
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

    	return view('user/user-add');	
    }

    public function view($id) {
		$user 	= User::with('bunch')->find($id);
		$array 	= array('user'=>$user);

        return view('user/user-view', $array);
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

    	return view('user/user-edit', $array);	
	}      

}