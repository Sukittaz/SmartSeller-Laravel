<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSaleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sale', function(Blueprint $table)
		{
			$table->integer('SaleID', true);
			$table->integer('CompanyID')->index('SaleCompanyID_idx');
			$table->integer('CostumerID')->nullable()->index('SaleCostumerID_idx');
			$table->dateTime('SaleDate');
			$table->integer('SaleQtd')->nullable();
			$table->decimal('SaleTotal', 15)->nullable();
			$table->decimal('SaleTotalPaid', 15)->nullable();
			$table->decimal('SaleRest', 15)->nullable();
			$table->decimal('SaleProfit', 15)->nullable();
			$table->string('SalePayment', 1)->nullable();
			$table->text('SaleDetail', 65535)->nullable();
			$table->integer('SaleStatus')->nullable();
			$table->string('SaleRefWait', 45)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('sale');
	}

}
