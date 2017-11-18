<?php

namespace App\Models;

class Product extends \App\Models\Base\Product
{
	protected $fillable = [
		'CompanyID',
		'CategoryID',
		'ProductName',
		'ProductCode',
		'ProductCost',
		'ProductPrice',
		'ProductQtd',
		'ProductAlert',
		'ProductDetail',
		'ProductTypeCalc'
	];
}
