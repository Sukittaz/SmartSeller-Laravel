<?php 


namespace App\Http\Controllers;

use App\Models\Base\Supplier;
use App\Models\Base\User;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class SupplierController extends Controller {

	private $CompanyID;

	public function __construct(Redirector $redirect) {
		$this->CompanyID = session()->get('user')['CompanyID'];
		
		$user = new User;
        if($user->isLogged() == false) {
            $redirect->to('login')->send();
        }
	}	

    public function index() {
		$supplier = Supplier::where('CompanyID', '=', $this->CompanyID)->get();
		$array = array('supplier'=>$supplier);

        return view('supplier/supplier-list', $array);
    }

    public function add(Request $request) {
		if ($request->has('submit')) {
			$supplierName 	= $request->input('SupplierName');
			$supplierEmail 	= $request->input('SupplierEmail');
			$supplierPhone 	= $request->input('SupplierPhone');
			$supplierCNPJ 	= $request->input('SupplierCNPJ');
			$supplierDetail = $request->input('SupplierDetail');

			$supplier 				  = new Supplier;
			$supplier->CompanyID 	  = $this->CompanyID;
			$supplier->SupplierName   = $supplierName;
			$supplier->SupplierEmail  = $supplierEmail;
			$supplier->SupplierPhone  = $supplierPhone;
			$supplier->SupplierCNPJ   = $supplierCNPJ;
			$supplier->SupplierDetail = $supplierDetail;
			$supplier->save();

			return redirect('/supplier');
		}

    	return view('supplier/supplier-add');	
    }

    public function view($id) {
		$supplier = Supplier::find($id);
		$array 	  = array('supplier'=>$supplier);

        return view('supplier/supplier-view', $array);
    } 

    public function edit(Request $request, $id) {
		$supplier = Supplier::find($id);
		$array 	  = array('supplier'=>$supplier);   
		 	
		if ($request->has('submit')) {
			$supplierName 	= $request->input('SupplierName');
			$supplierEmail 	= $request->input('SupplierEmail');
			$supplierPhone 	= $request->input('SupplierPhone');
			$supplierCNPJ 	= $request->input('SupplierCNPJ');
			$supplierDetail = $request->input('SupplierDetail');

			$supplier 				  = Supplier::find($id);;
			$supplier->SupplierName   = $supplierName;
			$supplier->SupplierEmail  = $supplierEmail;
			$supplier->SupplierPhone  = $supplierPhone;
			$supplier->SupplierCNPJ   = $supplierCNPJ;
			$supplier->SupplierDetail = $supplierDetail;
			$supplier->update();

			return redirect('/supplier');
		}       

    	return view('supplier/supplier-edit', $array);	
	}    

}