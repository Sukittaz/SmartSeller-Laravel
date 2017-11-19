<?php 


namespace App\Http\Controllers;

use App\Http\Requests;
use App\Models\Base\User;
use Illuminate\Http\Request;

class BunchController extends Controller {

	public function __construct() {
		$user = new User;
        if($user->isLogged() == false) {
			return redirect('/login');
        	exit;
        }
	}

    public function index() {

        return view('bunch-list');
    }

}