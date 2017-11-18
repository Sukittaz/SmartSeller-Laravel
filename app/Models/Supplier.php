<?php

namespace App\Models;

class Supplier extends \App\Models\Base\Supplier
{
	protected $fillable = [
		'CompanyID',
		'SupplierName',
		'SupplierEmail',
		'SupplierPhone',
		'SupplierCNPJ',
		'SupplierDetail'
	];
}
