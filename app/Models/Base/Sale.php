<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 18 Nov 2017 01:56:23 +0000.
 */

namespace App\Models\Base;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Sale
 * 
 * @property int $SaleID
 * @property int $CompanyID
 * @property int $CostumerID
 * @property \Carbon\Carbon $SaleDate
 * @property int $SaleQtd
 * @property float $SaleTotal
 * @property float $SaleTotalPaid
 * @property float $SaleRest
 * @property float $SaleProfit
 * @property string $SalePayment
 * @property string $SaleDetail
 * @property int $SaleStatus
 * @property string $SaleRefWait
 * 
 * @property \App\Models\Company $company
 * @property \App\Models\Costumer $costumer
 * @property \Illuminate\Database\Eloquent\Collection $products
 *
 * @package App\Models\Base
 */
class Sale extends Eloquent
{
	protected $table = 'sale';
	protected $primaryKey = 'SaleID';
	public $timestamps = false;

	protected $casts = [
		'CompanyID' => 'int',
		'CostumerID' => 'int',
		'SaleQtd' => 'int',
		'SaleTotal' => 'float',
		'SaleTotalPaid' => 'float',
		'SaleRest' => 'float',
		'SaleProfit' => 'float',
		'SaleStatus' => 'int'
	];

	protected $dates = [
		'SaleDate'
	];

	public function company()
	{
		return $this->belongsTo(\App\Models\Company::class, 'CompanyID');
	}

	public function costumer()
	{
		return $this->belongsTo(\App\Models\Costumer::class, 'CostumerID');
	}

	public function products()
	{
		return $this->belongsToMany(\App\Models\Product::class, 'sale_products', 'SaleID', 'ProductID')
					->withPivot('SaleProductsID', 'CompanyID', 'SaleProductQtd', 'SaleProductPrice', 'SaleProductFinalPrice');
	}
}
