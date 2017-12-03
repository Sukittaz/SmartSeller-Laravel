<?php 


namespace App\Http\Controllers;

use App\Models\Base\Expense;
use App\Models\Base\User;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class ExpenseController extends Controller {

	private $CompanyID;

	public function __construct(Redirector $redirect) {
		$this->CompanyID = session()->get('user')['CompanyID'];
		
		$user = new User;
        if($user->isLogged() == false) {
			$redirect->to('login')->send();
        }
	}	

    public function index() {
		$expense = Expense::where('CompanyID', '=', $this->CompanyID)->get();
		$array = array('expense'=>$expense);

        return view('expense/expense-list', $array);
    }

    public function add(Request $request) {
		if ($request->has('submit')) {
			$expenseDate 	= $request->input('ExpenseDate');
			$expenseRef 	= $request->input('ExpenseRef');
			$expenseValue 	= $request->input('ExpenseValue');
			$expenseAttach 	= $request->input('ExpenseAttach');
			$expenseDetail 	= $request->input('ExpenseDetail');

			$expense 				= new Expense;
			$expense->CompanyID 	= $this->CompanyID;
			$expense->ExpenseDate 	= $expenseDate;
			$expense->ExpenseRef 	= $expenseRef;
			$expense->ExpenseValue 	= $expenseValue;
			$expense->ExpenseAttach = $expenseAttach;
			$expense->ExpenseDetail = $expenseDetail;
			$expense->save();

			return redirect('/expense');
		}

    	return view('expense/expense-add');	
    }

    public function view($id) {
		$expense = Expense::find($id);
		$array 	  = array('expense'=>$expense);

        return view('expense-view', $array);
    } 

    public function edit(Request $request, $id) {
		$expense = Expense::find($id);
		$array 	  = array('expense'=>$expense);   
		 	
		if ($request->has('submit')) {
			$expenseDate 	= $request->input('ExpenseDate');
			$expenseRef 	= $request->input('ExpenseRef');
			$expenseValue 	= $request->input('ExpenseValue');
			$expenseDetail 	= $request->input('ExpenseDetail');

			$expense 				= Expense::find($id);
			$expense->ExpenseDate 	= $expenseDate;
			$expense->ExpenseRef 	= $expenseRef;
			$expense->ExpenseValue 	= $expenseValue;
			$expense->ExpenseDetail = $expenseDetail;
			$expense->update();

			return redirect('/expense');
		}       

    	return view('expense/expense-edit', $array);	
	}        

}