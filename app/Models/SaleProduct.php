<?php

namespace App\Models;

class SaleProduct extends \App\Models\Base\SaleProduct
{
	protected $fillable = [
		'CompanyID',
		'SaleID',
		'ProductID',
		'SaleProductQtd',
		'SaleProductPrice',
		'SaleProductFinalPrice'
	];
}
