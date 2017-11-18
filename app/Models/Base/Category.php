<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 18 Nov 2017 01:56:23 +0000.
 */

namespace App\Models\Base;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Category
 * 
 * @property int $CategoryID
 * @property int $CompanyID
 * @property string $CategoryName
 * 
 * @property \App\Models\Company $company
 * @property \Illuminate\Database\Eloquent\Collection $products
 *
 * @package App\Models\Base
 */
class Category extends Eloquent
{
	protected $table = 'category';
	protected $primaryKey = 'CategoryID';
	public $timestamps = false;

	protected $casts = [
		'CompanyID' => 'int'
	];

	public function company()
	{
		return $this->belongsTo(\App\Models\Company::class, 'CompanyID');
	}

	public function products()
	{
		return $this->hasMany(\App\Models\Product::class, 'CategoryID');
	}
}
