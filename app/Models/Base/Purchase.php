<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 18 Nov 2017 01:56:23 +0000.
 */

namespace App\Models\Base;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Purchase
 * 
 * @property int $PurchaseID
 * @property int $CompanyID
 * @property int $SupplierID
 * @property \Carbon\Carbon $PurchaseData
 * @property string $PurchaseRef
 * @property int $PurchaseStatus
 * @property string $PurchaseAttach
 * @property string $PurchaseDetail
 * @property float $PurchaseTotal
 * 
 * @property \App\Models\Company $company
 * @property \App\Models\Supplier $supplier
 * @property \Illuminate\Database\Eloquent\Collection $products
 *
 * @package App\Models\Base
 */
class Purchase extends Eloquent
{
	protected $table = 'purchase';
	protected $primaryKey = 'PurchaseID';
	public $timestamps = false;

	protected $casts = [
		'CompanyID' => 'int',
		'SupplierID' => 'int',
		'PurchaseStatus' => 'int',
		'PurchaseTotal' => 'float'
	];

	protected $dates = [
		'PurchaseData'
	];

	public function company()
	{
		return $this->belongsTo(\App\Models\Company::class, 'CompanyID');
	}

	public function supplier()
	{
		return $this->belongsTo(\App\Models\Supplier::class, 'SupplierID');
	}

	public function products()
	{
		return $this->belongsToMany(\App\Models\Product::class, 'purchase_products', 'PurchaseID', 'ProductID')
					->withPivot('PurchaseProductsID', 'CompanyID', 'PurchaseProductQtd', 'PurchaseProductCost');
	}
}
