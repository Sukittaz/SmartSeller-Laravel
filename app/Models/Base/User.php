<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 18 Nov 2017 01:56:23 +0000.
 */

namespace App\Models\Base;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class User
 * 
 * @property int $UserID
 * @property int $CompanyID
 * @property int $BunchID
 * @property string $UserName
 * @property string $UserLogin
 * @property string $UserEmail
 * @property string $UserPass
 * @property int $UserStatus
 * 
 * @property \App\Models\Bunch $bunch
 * @property \App\Models\Company $company
 *
 * @package App\Models\Base
 */
class User extends Eloquent
{
	protected $table = 'user';
	protected $primaryKey = 'UserID';
	public $timestamps = false;

	protected $casts = [
		'CompanyID' => 'int',
		'BunchID' => 'int',
		'UserStatus' => 'int'
	];

	public function bunch()
	{
		return $this->belongsTo(\App\Models\Bunch::class, 'BunchID');
	}

	public function company()
	{
		return $this->belongsTo(\App\Models\Company::class, 'CompanyID');
	}
}
