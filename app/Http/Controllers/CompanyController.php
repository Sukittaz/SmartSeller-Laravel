<?php 

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class CompanyController extends Controller {

    public function index() {

        return view('company-edit');
    }

    public function edit(Request $request, $id) {
		// $category = Category::find($id);
		// $array 	  = array('category'=>$category);   
		 	
		// if ($request->has('submit')) {
		// 	$categoryName = $request->input('CategoryName');

		// 	$category 				= Category::find($id);
		// 	$category->CategoryName = $categoryName;
		// 	$category->update();

		// 	return redirect('/category');
		// }       

  //   	return view('category-edit', $array);	
	}    

}