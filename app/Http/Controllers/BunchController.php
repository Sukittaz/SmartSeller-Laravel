<?php 


namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class BunchController extends Controller {

    public function index() {

        return view('bunch-list');
    }

}