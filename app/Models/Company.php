<?php

namespace App\Models;

class Company extends \App\Models\Base\Company
{
	protected $fillable = [
		'CompanyName',
		'CompanyCNPJ',
		'CompanyAddres',
		'CompanyAddresNumber',
		'CompanyComplement',
		'CompanyNeigh',
		'CompanyCity',
		'CompanyUF',
		'CompanyCep',
		'CompanyPhone',
		'CompanySocialName',
		'CompanyIE',
		'CompanyIEST',
		'CompanyIM',
		'CompanyCNAE',
		'CompanyImage'
	];
}
