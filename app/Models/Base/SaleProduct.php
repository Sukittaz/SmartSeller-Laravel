<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 18 Nov 2017 01:56:23 +0000.
 */

namespace App\Models\Base;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class SaleProduct
 * 
 * @property int $SaleProductsID
 * @property int $CompanyID
 * @property int $SaleID
 * @property int $ProductID
 * @property int $SaleProductQtd
 * @property float $SaleProductPrice
 * @property float $SaleProductFinalPrice
 * 
 * @property \App\Models\Company $company
 * @property \App\Models\Product $product
 * @property \App\Models\Sale $sale
 *
 * @package App\Models\Base
 */
class SaleProduct extends Eloquent
{
	protected $primaryKey = 'SaleProductsID';
	public $timestamps = false;

	protected $casts = [
		'CompanyID' => 'int',
		'SaleID' => 'int',
		'ProductID' => 'int',
		'SaleProductQtd' => 'int',
		'SaleProductPrice' => 'float',
		'SaleProductFinalPrice' => 'float'
	];

	public function company()
	{
		return $this->belongsTo(\App\Models\Company::class, 'CompanyID');
	}

	public function product()
	{
		return $this->belongsTo(\App\Models\Product::class, 'ProductID');
	}

	public function sale()
	{
		return $this->belongsTo(\App\Models\Sale::class, 'SaleID');
	}
}
