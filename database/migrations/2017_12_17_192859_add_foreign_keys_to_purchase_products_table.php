<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPurchaseProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('purchase_products', function(Blueprint $table)
		{
			$table->foreign('CompanyID', 'PurchaseProductsCompanyID')->references('CompanyID')->on('company')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('ProductID', 'PurchaseProductsProductID')->references('ProductID')->on('product')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('PurchaseID', 'PurchaseProductsPurchaseID')->references('PurchaseID')->on('purchase')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('purchase_products', function(Blueprint $table)
		{
			$table->dropForeign('PurchaseProductsCompanyID');
			$table->dropForeign('PurchaseProductsProductID');
			$table->dropForeign('PurchaseProductsPurchaseID');
		});
	}

}
