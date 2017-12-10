<?php 

namespace App\Http\Controllers;

use App\Models\Base\User;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class PdvController extends Controller {

	private $CompanyID;

	public function __construct(Redirector $redirect) {
		$this->CompanyID = session()->get('user')['CompanyID'];

		$user = new User;
        if($user->isLogged() == false) {
			$redirect->to('login')->send();
        }
	}	

    public function index() {
        $user  = User::with('bunch')->where('CompanyID', '=', $this->CompanyID)->get();
        $array = array('user'=>$user);

        return view('pdv/cashier', $array);        
    }

    public function pdv(){
        $array = array();
        $userID = session()->get('user')['UserID'];
        $userName = session()->get('user')['UserName'];

        $array['userID']   = $userID;
        $array['userName'] = $userName;

        return view('pdv/pdv', $array);        
    }
}