<?php 


namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class SaleController extends Controller {

    public function index() {

        return view('sale-list');
    }

}