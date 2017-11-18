<?php 


namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class ExpenseController extends Controller {

    public function index() {

        return view('expense-list');
    }

}