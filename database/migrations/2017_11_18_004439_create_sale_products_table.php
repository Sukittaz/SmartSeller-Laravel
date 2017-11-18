<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSaleProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sale_products', function(Blueprint $table)
		{
			$table->integer('SaleProductsID', true);
			$table->integer('CompanyID')->index('SaleProductsComapnyID_idx');
			$table->integer('SaleID')->index('SaleProductsSaleID_idx');
			$table->integer('ProductID')->index('SaleProductsProductID_idx');
			$table->integer('SaleProductQtd')->nullable();
			$table->decimal('SaleProductPrice', 15)->nullable();
			$table->decimal('SaleProductFinalPrice', 15)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('sale_products');
	}

}
