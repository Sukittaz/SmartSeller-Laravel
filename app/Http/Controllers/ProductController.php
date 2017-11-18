<?php 


namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class ProductController extends Controller {

    public function index() {

        return view('product-list');
    }

}