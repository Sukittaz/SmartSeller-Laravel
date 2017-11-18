<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 18 Nov 2017 01:56:23 +0000.
 */

namespace App\Models\Base;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Costumer
 * 
 * @property int $CostumerID
 * @property int $CompanyID
 * @property string $CostumerName
 * @property string $CostumerCPF
 * @property string $CostumerCNPJ
 * @property string $CostumerEmail
 * @property string $CostumerPhone
 * @property int $CostumerCEP
 * @property string $CostumerAddres
 * @property int $CostumerAddresNumber
 * @property string $CostumerNeigh
 * @property string $CostumerCity
 * @property string $CostumerCountry
 * @property string $CostumerUF
 * @property string $CostumerDetail
 * 
 * @property \App\Models\Company $company
 * @property \Illuminate\Database\Eloquent\Collection $sales
 *
 * @package App\Models\Base
 */
class Costumer extends Eloquent
{
	protected $table = 'costumer';
	protected $primaryKey = 'CostumerID';
	public $timestamps = false;

	protected $casts = [
		'CompanyID' => 'int',
		'CostumerCEP' => 'int',
		'CostumerAddresNumber' => 'int'
	];

	public function company()
	{
		return $this->belongsTo(\App\Models\Company::class, 'CompanyID');
	}

	public function sales()
	{
		return $this->hasMany(\App\Models\Sale::class, 'CostumerID');
	}
}
