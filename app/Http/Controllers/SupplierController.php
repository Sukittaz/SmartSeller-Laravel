<?php 


namespace App\Http\Controllers;

use App\Models\Base\Supplier;
use App\Http\Requests;
use Illuminate\Http\Request;

class SupplierController extends Controller {

    public function index() {
		$supplier = Supplier::all();
		$array = array('supplier'=>$supplier);

        return view('supplier-list', $array);
    }

    public function add(Request $request) {
		if ($request->has('submit')) {
			$supplierName 	= $request->input('SupplierName');
			$supplierEmail 	= $request->input('SupplierEmail');
			$supplierPhone 	= $request->input('SupplierPhone');
			$supplierCNPJ 	= $request->input('SupplierCNPJ');
			$supplierDetail = $request->input('SupplierDetail');

			$supplier 				  = new Supplier;
			$supplier->CompanyID 	  = 1;
			$supplier->SupplierName   = $supplierName;
			$supplier->SupplierEmail  = $supplierEmail;
			$supplier->SupplierPhone  = $supplierPhone;
			$supplier->SupplierCNPJ   = $supplierCNPJ;
			$supplier->SupplierDetail = $supplierDetail;
			$supplier->save();

			return redirect('/supplier');
		}

    	return view('supplier-add');	
    }

}