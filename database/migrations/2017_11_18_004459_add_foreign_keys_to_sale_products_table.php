<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToSaleProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('sale_products', function(Blueprint $table)
		{
			$table->foreign('CompanyID', 'SaleProductsCompanyID')->references('CompanyID')->on('company')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('ProductID', 'SaleProductsProductID')->references('ProductID')->on('product')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('SaleID', 'SaleProductsSaleID')->references('SaleID')->on('sale')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('sale_products', function(Blueprint $table)
		{
			$table->dropForeign('SaleProductsCompanyID');
			$table->dropForeign('SaleProductsProductID');
			$table->dropForeign('SaleProductsSaleID');
		});
	}

}
