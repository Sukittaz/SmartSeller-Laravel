<?php

namespace App\Models;

class Payment extends \App\Models\Base\Payment
{
	protected $fillable = [
		'PaymentName',
		'PaymentType'
	];
}
