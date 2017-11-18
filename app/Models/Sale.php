<?php

namespace App\Models;

class Sale extends \App\Models\Base\Sale
{
	protected $fillable = [
		'CompanyID',
		'CostumerID',
		'SaleDate',
		'SaleQtd',
		'SaleTotal',
		'SaleTotalPaid',
		'SaleRest',
		'SaleProfit',
		'SalePayment',
		'SaleDetail',
		'SaleStatus',
		'SaleRefWait'
	];
}
