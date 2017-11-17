<?php 


namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class CategoryController extends Controller {

    public function index() {
        return view('category-list');
    }

}