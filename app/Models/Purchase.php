<?php

namespace App\Models;

class Purchase extends \App\Models\Base\Purchase
{
	protected $fillable = [
		'CompanyID',
		'SupplierID',
		'PurchaseData',
		'PurchaseRef',
		'PurchaseStatus',
		'PurchaseAttach',
		'PurchaseDetail',
		'PurchaseTotal'
	];
}
