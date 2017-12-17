<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToSalePaymentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('sale_payments', function(Blueprint $table)
		{
			$table->foreign('CompanyID', 'SalePaymentsCompanyID')->references('CompanyID')->on('company')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('SaleID', 'SalePaymentsSaleID')->references('SaleID')->on('sale')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('PaymentsID', 'SalePaymentsPaymentsID')->references('PaymentsID')->on('payments')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('sale_payments', function(Blueprint $table)
		{
			$table->dropForeign('SalePaymentsCompanyID');
			$table->dropForeign('SalePaymentsSaleID');
			$table->dropForeign('SalePaymentsPaymentsID');
		});
	}

}
