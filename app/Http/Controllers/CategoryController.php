<?php 

namespace App\Http\Controllers;

use App\Models\Base\Category;
use App\Http\Requests;
use Illuminate\Http\Request;

class CategoryController extends Controller {

    public function index() {
		$category = Category::all();
		$array = array('category'=>$category);

        return view('category-list', $array);
    }

    public function add(Request $request) {
		if ($request->has('submit')) {
			$categoryName = $request->input('CategoryName');

			$category 				= new Category;
			$category->CompanyID 	= 1;
			$category->CategoryName = $categoryName;
			$category->save();

			return redirect('/category');
		}

    	return view('category-add');	
    }

    public function view($id) {
		$category = Category::find($id);
		$array 	  = array('category'=>$category);

        return view('category-view', $array);
    } 

    public function edit(Request $request, $id) {
		$category = Category::find($id);
		$array 	  = array('category'=>$category);   
		 	
		if ($request->has('submit')) {
			$categoryName = $request->input('CategoryName');

			$category 				= Category::find($id);
			$category->CategoryName = $categoryName;
			$category->update();

			return redirect('/category');
		}       

    	return view('category-edit', $array);	
	}
}