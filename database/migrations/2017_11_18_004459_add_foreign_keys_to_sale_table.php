<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToSaleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('sale', function(Blueprint $table)
		{
			$table->foreign('CompanyID', 'SaleCompanyID')->references('CompanyID')->on('company')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('CostumerID', 'SaleCostumerID')->references('CostumerID')->on('costumer')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('sale', function(Blueprint $table)
		{
			$table->dropForeign('SaleCompanyID');
			$table->dropForeign('SaleCostumerID');
		});
	}

}
