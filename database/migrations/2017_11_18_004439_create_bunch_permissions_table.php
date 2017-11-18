<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBunchPermissionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bunch_permissions', function(Blueprint $table)
		{
			$table->integer('BunchPermissionsID', true);
			$table->integer('CompanyID')->index('BunchPermissionsCompanyID_idx');
			$table->integer('BunchID')->index('BunchPermissionsBunchID_idx');
			$table->integer('PermissionID')->index('BunchPermissionsPermissionID_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('bunch_permissions');
	}

}
