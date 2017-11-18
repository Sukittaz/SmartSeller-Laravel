<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPurchaseTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('purchase', function(Blueprint $table)
		{
			$table->foreign('CompanyID', 'PurchaseCompanyID')->references('CompanyID')->on('company')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('SupplierID', 'PurchaseSupplierID')->references('SupplierID')->on('supplier')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('purchase', function(Blueprint $table)
		{
			$table->dropForeign('PurchaseCompanyID');
			$table->dropForeign('PurchaseSupplierID');
		});
	}

}
