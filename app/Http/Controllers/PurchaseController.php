<?php 


namespace App\Http\Controllers;

use App\Models\Base\Purchase;
use App\Http\Requests;
use App\Models\Base\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class PurchaseController extends Controller {

	private $CompanyID;

	public function __construct(Redirector $redirect) {
		$this->CompanyID = session()->get('user')['CompanyID'];

		$user = new User;
        if($user->isLogged() == false) {
            $redirect->to('login')->send();
        }
	}	

    public function index() {
        $purchase = Purchase::with('supplier')->where('CompanyID', '=', $this->CompanyID)->get();
        $array    = array('purchase'=>$purchase);

        return view('purchase/purchase-list', $array);
    }

    public function add() {

        return view('purchase/purchase-add');
    }


}