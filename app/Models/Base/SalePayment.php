<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 17 Dec 2017 19:49:45 +0000.
 */

namespace App\Models\Base;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class SalePayment
 * 
 * @property int $SalePaymentsID
 * @property int $CompanyID
 * @property int $SaleID
 * @property int $PaymentID
 * 
 * @property \App\Models\Payment $payment
 * @property \App\Models\Company $company
 * @property \App\Models\Sale $sale
 *
 * @package App\Models\Base
 */
class SalePayment extends Eloquent
{
	protected $primaryKey = 'SalePaymentsID';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'SalePaymentsID' => 'int',
		'CompanyID' => 'int',
		'SaleID' => 'int',
		'PaymentID' => 'int'
	];

	public function payment()
	{
		return $this->belongsTo(\App\Models\Payment::class, 'PaymentID');
	}

	public function company()
	{
		return $this->belongsTo(\App\Models\Company::class, 'CompanyID');
	}

	public function sale()
	{
		return $this->belongsTo(\App\Models\Sale::class, 'SaleID');
	}
}
