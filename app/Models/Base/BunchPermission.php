<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 18 Nov 2017 01:56:23 +0000.
 */

namespace App\Models\Base;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class BunchPermission
 * 
 * @property int $BunchPermissionsID
 * @property int $CompanyID
 * @property int $BunchID
 * @property int $PermissionID
 * 
 * @property \App\Models\Bunch $bunch
 * @property \App\Models\Company $company
 * @property \App\Models\Permission $permission
 *
 * @package App\Models\Base
 */
class BunchPermission extends Eloquent
{
	protected $primaryKey = 'BunchPermissionsID';
	public $timestamps = false;

	protected $casts = [
		'CompanyID' => 'int',
		'BunchID' => 'int',
		'PermissionID' => 'int'
	];

	public function bunch()
	{
		return $this->belongsTo(\App\Models\Bunch::class, 'BunchID');
	}

	public function company()
	{
		return $this->belongsTo(\App\Models\Company::class, 'CompanyID');
	}

	public function permission()
	{
		return $this->belongsTo(\App\Models\Permission::class, 'PermissionID');
	}
}
