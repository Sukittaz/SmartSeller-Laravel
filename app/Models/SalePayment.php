<?php

namespace App\Models;

class SalePayment extends \App\Models\Base\SalePayment
{
	protected $fillable = [
		'CompanyID',
		'SaleID',
		'PaymentID'
	];
}
