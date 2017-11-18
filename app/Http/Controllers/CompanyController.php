<?php 


namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class CompanyController extends Controller {

    public function index() {

        return view('company-edit');
    }

}