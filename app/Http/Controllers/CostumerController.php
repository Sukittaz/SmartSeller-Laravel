<?php 

namespace App\Http\Controllers;

use App\Models\Base\Costumer;
use App\Http\Requests;
use Illuminate\Http\Request;

class CostumerController extends Controller {

    public function index() {
		$costumer = Costumer::all();
		$array = array('costumer'=>$costumer);

        return view('costumer-list', $array);
    }

    public function add(Request $request) {
		// if ($request->has('submit')) {
		// 	$categoryName = $request->input('CategoryName');

		// 	$category 				= new Category;
		// 	$category->CompanyID 	= 1;
		// 	$category->CategoryName = $categoryName;
		// 	$category->save();

		// 	return redirect('/category');
		// }

    	return view('category-add');	
    }

}