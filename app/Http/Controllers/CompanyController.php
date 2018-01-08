<?php 

namespace App\Http\Controllers;

use App\Repositories\UserRepository;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class CompanyController extends Controller {

	public function __construct(Redirector $redirect) {
		$this->CompanyID = session()->get('user')['CompanyID'];
		
        if(UserRepository::isLogged() == false) {
			$redirect->to('login')->send();
        }
	}	

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