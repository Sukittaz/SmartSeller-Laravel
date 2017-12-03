<?php 

namespace App\Http\Controllers;

use App\Models\Base\Category;
use App\Models\Base\User;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class CategoryController extends Controller {

	private $CompanyID;

	public function __construct(Redirector $redirect) {
		$this->CompanyID = session()->get('user')['CompanyID'];

		$user = new User;
        if($user->isLogged() == false) {
			$redirect->to('login')->send();
        }
	}	

    public function index() {
		$category = Category::where('CompanyID', '=', $this->CompanyID)->get();

		$array = array('category'=>$category);

        return view('category/category-list', $array);
    }

    public function add(Request $request) {
		if ($request->has('submit')) {
			$categoryName = $request->input('CategoryName');

			$category 				= new Category;
			$category->CompanyID 	= $this->CompanyID;
			$category->CategoryName = $categoryName;
			$category->save();

			return redirect('/category');
		}

    	return view('category/category-add');	
    }

    public function view($id) {
		$category = Category::find($id);
		$array 	  = array('category'=>$category);

        return view('category/category-view', $array);
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

    	return view('category/category-edit', $array);	
	}
}