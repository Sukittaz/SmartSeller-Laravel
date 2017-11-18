<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 18 Nov 2017 01:56:23 +0000.
 */

namespace App\Models\Base;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Permission
 * 
 * @property int $PermissionID
 * @property string $PermissionName
 * 
 * @property \Illuminate\Database\Eloquent\Collection $bunches
 *
 * @package App\Models\Base
 */
class Permission extends Eloquent
{
	protected $table = 'permission';
	protected $primaryKey = 'PermissionID';
	public $timestamps = false;

	public function bunches()
	{
		return $this->belongsToMany(\App\Models\Bunch::class, 'bunch_permissions', 'PermissionID', 'BunchID')
					->withPivot('BunchPermissionsID', 'CompanyID');
	}
}
