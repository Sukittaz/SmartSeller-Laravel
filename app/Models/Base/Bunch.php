<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 18 Nov 2017 01:56:23 +0000.
 */

namespace App\Models\Base;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Bunch
 * 
 * @property int $BunchID
 * @property int $CompanyID
 * @property string $BunchName
 * 
 * @property \App\Models\Company $company
 * @property \Illuminate\Database\Eloquent\Collection $permissions
 * @property \Illuminate\Database\Eloquent\Collection $users
 *
 * @package App\Models\Base
 */
class Bunch extends Eloquent
{
	protected $table = 'bunch';
	protected $primaryKey = 'BunchID';
	public $timestamps = false;

	protected $casts = [
		'CompanyID' => 'int'
	];

	public function company()
	{
		return $this->belongsTo(\App\Models\Company::class, 'CompanyID');
	}

	public function permissions()
	{
		return $this->belongsToMany(\App\Models\Permission::class, 'bunch_permissions', 'BunchID', 'PermissionID')
					->withPivot('BunchPermissionsID', 'CompanyID');
	}

	public function users()
	{
		return $this->hasMany(\App\Models\User::class, 'BunchID');
	}
}
