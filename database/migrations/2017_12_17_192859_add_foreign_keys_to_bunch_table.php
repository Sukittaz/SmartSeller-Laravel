<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToBunchTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('bunch', function(Blueprint $table)
		{
			$table->foreign('CompanyID', 'BunchCompanyID')->references('CompanyID')->on('company')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('bunch', function(Blueprint $table)
		{
			$table->dropForeign('BunchCompanyID');
		});
	}

}
