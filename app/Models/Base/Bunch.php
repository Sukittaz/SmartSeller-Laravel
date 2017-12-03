<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 18 Nov 2017 01:56:23 +0000.
 */

namespace App\Models\Base;

use Reliese\Database\Eloquent\Model as Eloquent;
use Illuminate\Support\Facades\DB;

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
	private $BunchID;

	public function setBunchID($BunchID){
		$this->BunchID = $BunchID;
	}

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

	public function getPermissions($id) 
	{
        $bunchPermission = DB::table('bunch')
		                ->leftJoin('bunch_permissions', 'bunch.BunchID', '=', 'bunch_permissions.BunchID')
		                ->leftJoin('permission', 'permission.PermissionID', '=', 'bunch_permissions.PermissionID')
		                ->where('bunch.BunchID', '=', $this->BunchID)
		                ->get();  		

		return $bunchPermission;
	}
}
