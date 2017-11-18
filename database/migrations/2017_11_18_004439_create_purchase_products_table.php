<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePurchaseProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('purchase_products', function(Blueprint $table)
		{
			$table->integer('PurchaseProductsID', true);
			$table->integer('CompanyID')->index('PurchaseProductsCompanyID_idx');
			$table->integer('PurchaseID')->index('PurchaseProductsPurchaseID_idx');
			$table->integer('ProductID')->index('PurchaseProductsProductID_idx');
			$table->integer('PurchaseProductQtd');
			$table->decimal('PurchaseProductCost', 15);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('purchase_products');
	}

}
