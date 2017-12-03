<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 18 Nov 2017 01:56:23 +0000.
 */

namespace App\Models\Base;
use Illuminate\Support\Facades\DB;

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
	private $CompanyID;
	private $UserID;

	public function __construct() {
        $this->CompanyID = session()->get('user')['CompanyID'];
        $this->UserID    = session()->get('user')['UserID'];
    }  

	public function bunches()
	{
		return $this->belongsToMany(\App\Models\Bunch::class, 'bunch_permissions', 'PermissionID', 'BunchID')
					->withPivot('BunchPermissionsID', 'CompanyID');
	}

	public function hasPermission($PermissionID){
        $hasPermission = DB::table('user')
		                ->join('bunch_permissions', 'bunch_permissions.BunchID', '=', 'user.BunchID')
		                ->where('user.UserID', '=', $this->UserID)
		                ->where('user.CompanyID', '=', $this->CompanyID)
		                ->where('bunch_permissions.PermissionID', '=', $PermissionID)
		                ->get(); 

		if (count($hasPermission) > 0) {
			return true;
		}                		

		return false;
	}
}
