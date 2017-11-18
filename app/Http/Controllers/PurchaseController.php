<?php 


namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class PurchaseController extends Controller {

    public function index() {

        return view('purchase-list');
    }

}