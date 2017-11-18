<?php

namespace App\Models;

class Expense extends \App\Models\Base\Expense
{
	protected $fillable = [
		'CompanyID',
		'ExpenseDate',
		'ExpenseRef',
		'ExpenseValue',
		'ExpenseAttach',
		'ExpenseDetail'
	];
}
