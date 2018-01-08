<?php 

namespace App\Http\Controllers;

use App\Models\Base\Costumer;
use App\Repositories\UserRepository;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class CostumerController extends Controller {

	private $CompanyID;

	public function __construct(Redirector $redirect) {
		$this->CompanyID = session()->get('user')['CompanyID'];
		
        if(UserRepository::isLogged() == false) {
			$redirect->to('login')->send();
        }
	}	

    public function index() {
		$costumer = Costumer::where('CompanyID', '=', $this->CompanyID)->get();
		$array = array('costumer'=>$costumer);

        return view('costumer/costumer-list', $array);
    }

    public function add(Request $request) {
		if ($request->has('submit')) {
			$costumerName 		  = $request->input('CostumerName');
			$costumerCPF 		  = $request->input('CostumerCPF');
			$costumerEmail 		  = $request->input('CostumerEmail');
			$costumerPhone 		  = $request->input('CostumerPhone');
			$costumerCEP 		  = $request->input('CostumerCEP');
			$costumerAddres 	  = $request->input('CostumerAddres');
			$costumerAddresNumber = $request->input('CostumerAddresNumber');
			$costumerNeigh 		  = $request->input('CostumerNeigh');
			$costumerUF 		  = $request->input('CostumerUF');
			$costumerCity 		  = $request->input('CostumerCity');
			$costumerCountry 	  = $request->input('CostumerCountry');
			$costumerDetail 	  = $request->input('CostumerDetail');

			$costumer 						= new Costumer;
			$costumer->CompanyID 			= $this->CompanyID;
			$costumer->CostumerName 		= $costumerName;
			$costumer->CostumerCPF 			= $costumerCPF;
			$costumer->CostumerEmail 		= $costumerEmail;
			$costumer->CostumerPhone 		= $costumerPhone;
			$costumer->CostumerCEP 			= $costumerCEP;
			$costumer->CostumerAddres 		= $costumerAddres;
			$costumer->CostumerAddresNumber = $costumerAddresNumber;
			$costumer->CostumerNeigh 		= $costumerNeigh;
			$costumer->CostumerUF 			= $costumerUF;
			$costumer->CostumerCity 		= $costumerCity;
			$costumer->CostumerCountry 		= $costumerCountry;
			$costumer->CostumerDetail 		= $costumerDetail;
			$costumer->save();

			return redirect('/costumer');
		}

    	return view('costumer/costumer-add');	
    }

    public function view($id) {
		$costumer = Costumer::find($id);
		$array 	  = array('costumer'=>$costumer);

        return view('costumer/costumer-view', $array);
    } 

    public function edit(Request $request, $id) {
		$costumer = Costumer::find($id);
		$array 	  = array('costumer'=>$costumer);   
		 	
		if ($request->has('submit')) {
			$costumerName 		  = $request->input('CostumerName');
			$costumerCPF 		  = $request->input('CostumerCPF');
			$costumerEmail 		  = $request->input('CostumerEmail');
			$costumerPhone 		  = $request->input('CostumerPhone');
			$costumerCEP 		  = $request->input('CostumerCEP');
			$costumerAddres 	  = $request->input('CostumerAddres');
			$costumerAddresNumber = $request->input('CostumerAddresNumber');
			$costumerNeigh 		  = $request->input('CostumerNeigh');
			$costumerUF 		  = $request->input('CostumerUF');
			$costumerCity 		  = $request->input('CostumerCity');
			$costumerCountry 	  = $request->input('CostumerCountry');
			$costumerDetail 	  = $request->input('CostumerDetail');

			$costumer 						= Costumer::find($id);
			$costumer->CostumerName 		= $costumerName;
			$costumer->CostumerCPF 			= $costumerCPF;
			$costumer->CostumerEmail 		= $costumerEmail;
			$costumer->CostumerPhone 		= $costumerPhone;
			$costumer->CostumerCEP 			= $costumerCEP;
			$costumer->CostumerAddres 		= $costumerAddres;
			$costumer->CostumerAddresNumber = $costumerAddresNumber;
			$costumer->CostumerNeigh 		= $costumerNeigh;
			$costumer->CostumerUF 			= $costumerUF;
			$costumer->CostumerCity 		= $costumerCity;
			$costumer->CostumerCountry 		= $costumerCountry;
			$costumer->CostumerDetail 		= $costumerDetail;
			$costumer->update();

			return redirect('/costumer');
		}       

    	return view('costumer/costumer-edit', $array);	
	}    
}