<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCostumerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('costumer', function(Blueprint $table)
		{
			$table->foreign('CompanyID', 'CostumerCompanyID')->references('CompanyID')->on('company')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('costumer', function(Blueprint $table)
		{
			$table->dropForeign('CostumerCompanyID');
		});
	}

}
