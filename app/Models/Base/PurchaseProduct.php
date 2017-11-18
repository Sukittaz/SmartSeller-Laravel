<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 18 Nov 2017 01:56:23 +0000.
 */

namespace App\Models\Base;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class PurchaseProduct
 * 
 * @property int $PurchaseProductsID
 * @property int $CompanyID
 * @property int $PurchaseID
 * @property int $ProductID
 * @property int $PurchaseProductQtd
 * @property float $PurchaseProductCost
 * 
 * @property \App\Models\Company $company
 * @property \App\Models\Product $product
 * @property \App\Models\Purchase $purchase
 *
 * @package App\Models\Base
 */
class PurchaseProduct extends Eloquent
{
	protected $primaryKey = 'PurchaseProductsID';
	public $timestamps = false;

	protected $casts = [
		'CompanyID' => 'int',
		'PurchaseID' => 'int',
		'ProductID' => 'int',
		'PurchaseProductQtd' => 'int',
		'PurchaseProductCost' => 'float'
	];

	public function company()
	{
		return $this->belongsTo(\App\Models\Company::class, 'CompanyID');
	}

	public function product()
	{
		return $this->belongsTo(\App\Models\Product::class, 'ProductID');
	}

	public function purchase()
	{
		return $this->belongsTo(\App\Models\Purchase::class, 'PurchaseID');
	}
}
