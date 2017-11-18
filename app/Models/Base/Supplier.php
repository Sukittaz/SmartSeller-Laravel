<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 18 Nov 2017 01:56:23 +0000.
 */

namespace App\Models\Base;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Supplier
 * 
 * @property int $SupplierID
 * @property int $CompanyID
 * @property string $SupplierName
 * @property string $SupplierEmail
 * @property string $SupplierPhone
 * @property int $SupplierCNPJ
 * @property string $SupplierDetail
 * 
 * @property \App\Models\Company $company
 * @property \Illuminate\Database\Eloquent\Collection $purchases
 *
 * @package App\Models\Base
 */
class Supplier extends Eloquent
{
	protected $table = 'supplier';
	protected $primaryKey = 'SupplierID';
	public $timestamps = false;

	protected $casts = [
		'CompanyID' => 'int',
		'SupplierCNPJ' => 'int'
	];

	public function company()
	{
		return $this->belongsTo(\App\Models\Company::class, 'CompanyID');
	}

	public function purchases()
	{
		return $this->hasMany(\App\Models\Purchase::class, 'SupplierID');
	}
}
