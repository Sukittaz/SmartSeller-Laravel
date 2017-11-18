<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 18 Nov 2017 01:56:23 +0000.
 */

namespace App\Models\Base;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Product
 * 
 * @property int $ProductID
 * @property int $CompanyID
 * @property int $CategoryID
 * @property string $ProductName
 * @property string $ProductCode
 * @property float $ProductCost
 * @property float $ProductPrice
 * @property int $ProductQtd
 * @property int $ProductAlert
 * @property string $ProductDetail
 * @property string $ProductTypeCalc
 * 
 * @property \App\Models\Category $category
 * @property \App\Models\Company $company
 * @property \Illuminate\Database\Eloquent\Collection $purchases
 * @property \Illuminate\Database\Eloquent\Collection $sales
 *
 * @package App\Models\Base
 */
class Product extends Eloquent
{
	protected $table = 'product';
	protected $primaryKey = 'ProductID';
	public $timestamps = false;

	protected $casts = [
		'CompanyID' => 'int',
		'CategoryID' => 'int',
		'ProductCost' => 'float',
		'ProductPrice' => 'float',
		'ProductQtd' => 'int',
		'ProductAlert' => 'int'
	];

	public function category()
	{
		return $this->belongsTo(\App\Models\Category::class, 'CategoryID');
	}

	public function company()
	{
		return $this->belongsTo(\App\Models\Company::class, 'CompanyID');
	}

	public function purchases()
	{
		return $this->belongsToMany(\App\Models\Purchase::class, 'purchase_products', 'ProductID', 'PurchaseID')
					->withPivot('PurchaseProductsID', 'CompanyID', 'PurchaseProductQtd', 'PurchaseProductCost');
	}

	public function sales()
	{
		return $this->belongsToMany(\App\Models\Sale::class, 'sale_products', 'ProductID', 'SaleID')
					->withPivot('SaleProductsID', 'CompanyID', 'SaleProductQtd', 'SaleProductPrice', 'SaleProductFinalPrice');
	}
}
