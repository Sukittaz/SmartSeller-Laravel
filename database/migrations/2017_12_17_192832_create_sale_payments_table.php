<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSalePaymentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sale_payments', function(Blueprint $table)
		{
			$table->integer('SalePaymentsID')->primary();
			$table->integer('CompanyID')->index('SalePaymentsCompanyID_idx');
			$table->integer('SaleID')->index('SalePaymentsSaleID_idx');
			$table->integer('PaymentsID')->index('SalePaymentsPaymentsID_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('sale_payments');
	}

}
