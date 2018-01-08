<?php 


namespace App\Http\Controllers;

use App\Http\Requests;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class SaleController extends Controller {

	private $CompanyID;

	public function __construct(Redirector $redirect) {
		$this->CompanyID = session()->get('user')['CompanyID'];
		
        if(UserRepository::isLogged() == false) {
			$redirect->to('login')->send();
        }
	}

    public function index() {

        return view('sale/sale-list');
    }

}