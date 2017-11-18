<?php

namespace App\Models;

class Costumer extends \App\Models\Base\Costumer
{
	protected $fillable = [
		'CompanyID',
		'CostumerName',
		'CostumerCPF',
		'CostumerCNPJ',
		'CostumerEmail',
		'CostumerPhone',
		'CostumerCEP',
		'CostumerAddres',
		'CostumerAddresNumber',
		'CostumerNeigh',
		'CostumerCity',
		'CostumerCountry',
		'CostumerUF',
		'CostumerDetail'
	];
}
