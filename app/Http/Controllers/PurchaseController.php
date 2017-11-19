<?php 


namespace App\Http\Controllers;

use App\Http\Requests;
use App\Models\Base\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class PurchaseController extends Controller {

	public function __construct(Redirector $redirect) {
		$user = new User;
        if($user->isLogged() == false) {
            $redirect->to('login')->send();
        }
	}	

    public function index() {

        return view('purchase-list');
    }

}