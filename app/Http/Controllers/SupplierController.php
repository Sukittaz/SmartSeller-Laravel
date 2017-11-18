<?php 


namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class SupplierController extends Controller {

    public function index() {

        return view('supplier-list');
    }

}