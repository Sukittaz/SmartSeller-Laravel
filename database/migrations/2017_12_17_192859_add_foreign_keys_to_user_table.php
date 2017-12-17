<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('user', function(Blueprint $table)
		{
			$table->foreign('BunchID', 'UserBunchID')->references('BunchID')->on('bunch')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('CompanyID', 'UserCompanyID')->references('CompanyID')->on('company')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('user', function(Blueprint $table)
		{
			$table->dropForeign('UserBunchID');
			$table->dropForeign('UserCompanyID');
		});
	}

}
