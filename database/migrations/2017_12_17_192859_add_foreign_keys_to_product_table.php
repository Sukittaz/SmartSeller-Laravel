<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToProductTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('product', function(Blueprint $table)
		{
			$table->foreign('CategoryID', 'ProductCategoryID')->references('CategoryID')->on('category')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('CompanyID', 'ProductCompanyID')->references('CompanyID')->on('company')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('product', function(Blueprint $table)
		{
			$table->dropForeign('ProductCategoryID');
			$table->dropForeign('ProductCompanyID');
		});
	}

}
