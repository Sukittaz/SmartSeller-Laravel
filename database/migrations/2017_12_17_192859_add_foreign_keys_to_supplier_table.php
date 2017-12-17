<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToSupplierTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('supplier', function(Blueprint $table)
		{
			$table->foreign('CompanyID', 'SupplierCompanyID')->references('CompanyID')->on('company')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('supplier', function(Blueprint $table)
		{
			$table->dropForeign('SupplierCompanyID');
		});
	}

}
