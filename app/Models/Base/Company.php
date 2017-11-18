<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 18 Nov 2017 01:56:23 +0000.
 */

namespace App\Models\Base;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Company
 * 
 * @property int $CompanyID
 * @property string $CompanyName
 * @property string $CompanyCNPJ
 * @property string $CompanyAddres
 * @property string $CompanyAddresNumber
 * @property string $CompanyComplement
 * @property string $CompanyNeigh
 * @property string $CompanyCity
 * @property string $CompanyUF
 * @property string $CompanyCep
 * @property string $CompanyPhone
 * @property string $CompanySocialName
 * @property string $CompanyIE
 * @property string $CompanyIEST
 * @property string $CompanyIM
 * @property string $CompanyCNAE
 * @property string $CompanyImage
 * 
 * @property \Illuminate\Database\Eloquent\Collection $bunches
 * @property \Illuminate\Database\Eloquent\Collection $bunch_permissions
 * @property \Illuminate\Database\Eloquent\Collection $categories
 * @property \Illuminate\Database\Eloquent\Collection $costumers
 * @property \Illuminate\Database\Eloquent\Collection $expenses
 * @property \Illuminate\Database\Eloquent\Collection $products
 * @property \Illuminate\Database\Eloquent\Collection $purchases
 * @property \Illuminate\Database\Eloquent\Collection $purchase_products
 * @property \Illuminate\Database\Eloquent\Collection $sales
 * @property \Illuminate\Database\Eloquent\Collection $sale_products
 * @property \Illuminate\Database\Eloquent\Collection $suppliers
 * @property \Illuminate\Database\Eloquent\Collection $users
 *
 * @package App\Models\Base
 */
class Company extends Eloquent
{
	protected $table = 'company';
	protected $primaryKey = 'CompanyID';
	public $timestamps = false;

	public function bunches()
	{
		return $this->hasMany(\App\Models\Bunch::class, 'CompanyID');
	}

	public function bunch_permissions()
	{
		return $this->hasMany(\App\Models\BunchPermission::class, 'CompanyID');
	}

	public function categories()
	{
		return $this->hasMany(\App\Models\Category::class, 'CompanyID');
	}

	public function costumers()
	{
		return $this->hasMany(\App\Models\Costumer::class, 'CompanyID');
	}

	public function expenses()
	{
		return $this->hasMany(\App\Models\Expense::class, 'CompanyID');
	}

	public function products()
	{
		return $this->hasMany(\App\Models\Product::class, 'CompanyID');
	}

	public function purchases()
	{
		return $this->hasMany(\App\Models\Purchase::class, 'CompanyID');
	}

	public function purchase_products()
	{
		return $this->hasMany(\App\Models\PurchaseProduct::class, 'CompanyID');
	}

	public function sales()
	{
		return $this->hasMany(\App\Models\Sale::class, 'CompanyID');
	}

	public function sale_products()
	{
		return $this->hasMany(\App\Models\SaleProduct::class, 'CompanyID');
	}

	public function suppliers()
	{
		return $this->hasMany(\App\Models\Supplier::class, 'CompanyID');
	}

	public function users()
	{
		return $this->hasMany(\App\Models\User::class, 'CompanyID');
	}
}
