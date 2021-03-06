<?php 

namespace App\Http\Controllers;

use App\Repositories\UserRepository;
use App\Http\Requests;
use Illuminate\Http\Request;

class LoginController extends Controller {

    public function index(Request $request) {
    	if ($request->has('submit')) {
			$userLogin = $request->input('UserLogin');
			$userPass  = $request->input('UserPass');
			
			if (UserRepository::doLogin($userLogin, $userPass)) {
				return redirect('/product');
			}else{
				return redirect('/login');
			}
		}

        return view('login/login');
    }

    public function logout() {
    	session()->flush();

		return redirect('/login');
    }

}