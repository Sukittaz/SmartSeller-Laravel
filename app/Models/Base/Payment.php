<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 17 Dec 2017 19:49:16 +0000.
 */

namespace App\Models\Base;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Payment
 * 
 * @property int $PaymentID
 * @property string $PaymentName
 * @property string $PaymentType
 * 
 * @property \Illuminate\Database\Eloquent\Collection $sales
 *
 * @package App\Models\Base
 */
class Payment extends Eloquent
{
	protected $table = 'payment';
	protected $primaryKey = 'PaymentID';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'PaymentID' => 'int'
	];

	public function sales()
	{
		return $this->belongsToMany(\App\Models\Sale::class, 'sale_payments', 'PaymentID', 'SaleID')
					->withPivot('SalePaymentsID', 'CompanyID');
	}
}
