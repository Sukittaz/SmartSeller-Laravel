<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToBunchPermissionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('bunch_permissions', function(Blueprint $table)
		{
			$table->foreign('BunchID', 'BunchPermissionsBunchID')->references('BunchID')->on('bunch')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('CompanyID', 'BunchPermissionsCompanyID')->references('CompanyID')->on('company')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('PermissionID', 'BunchPermissionsPermissionID')->references('PermissionID')->on('permission')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('bunch_permissions', function(Blueprint $table)
		{
			$table->dropForeign('BunchPermissionsBunchID');
			$table->dropForeign('BunchPermissionsCompanyID');
			$table->dropForeign('BunchPermissionsPermissionID');
		});
	}

}
