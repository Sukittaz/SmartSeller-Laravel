<?php

namespace App\Models;

class PurchaseProduct extends \App\Models\Base\PurchaseProduct
{
	protected $fillable = [
		'CompanyID',
		'PurchaseID',
		'ProductID',
		'PurchaseProductQtd',
		'PurchaseProductCost'
	];
}
