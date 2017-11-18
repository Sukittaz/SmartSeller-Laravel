<?php

namespace App\Models;

class BunchPermission extends \App\Models\Base\BunchPermission
{
	protected $fillable = [
		'CompanyID',
		'BunchID',
		'PermissionID'
	];
}
