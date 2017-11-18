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

}