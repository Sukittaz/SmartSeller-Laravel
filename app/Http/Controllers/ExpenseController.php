<?php 


namespace App\Http\Controllers;

use App\Models\Base\Expense;
use App\Http\Requests;
use Illuminate\Http\Request;

class ExpenseController extends Controller {

    public function index() {
		$expense = Expense::all();
		$array = array('expense'=>$expense);

        return view('expense-list', $array);
    }

    public function add(Request $request) {
		if ($request->has('submit')) {
			$expenseDate 	= $request->input('ExpenseDate');
			$expenseRef 	= $request->input('ExpenseRef');
			$expenseValue 	= $request->input('ExpenseValue');
			$expenseAttach 	= $request->input('ExpenseAttach');
			$expenseDetail 	= $request->input('ExpenseDetail');

			$expense 				= new Expense;
			$expense->CompanyID 	= 1;
			$expense->ExpenseDate 	= $expenseDate;
			$expense->ExpenseRef 	= $expenseRef;
			$expense->ExpenseValue 	= $expenseValue;
			$expense->ExpenseAttach = $expenseAttach;
			$expense->ExpenseDetail = $expenseDetail;
			$expense->save();

			return redirect('/expense');
		}

    	return view('expense-add');	
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

    	return view('expense-edit', $array);	
	}        

}