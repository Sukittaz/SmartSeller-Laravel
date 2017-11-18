<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 18 Nov 2017 01:56:23 +0000.
 */

namespace App\Models\Base;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Expense
 * 
 * @property int $ExpenseID
 * @property int $CompanyID
 * @property \Carbon\Carbon $ExpenseDate
 * @property string $ExpenseRef
 * @property float $ExpenseValue
 * @property string $ExpenseAttach
 * @property string $ExpenseDetail
 * 
 * @property \App\Models\Company $company
 *
 * @package App\Models\Base
 */
class Expense extends Eloquent
{
	protected $table = 'expense';
	protected $primaryKey = 'ExpenseID';
	public $timestamps = false;

	protected $casts = [
		'CompanyID' => 'int',
		'ExpenseValue' => 'float'
	];

	protected $dates = [
		'ExpenseDate'
	];

	public function company()
	{
		return $this->belongsTo(\App\Models\Company::class, 'CompanyID');
	}
}
