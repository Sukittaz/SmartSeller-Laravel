<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('product', function(Blueprint $table)
		{
			$table->integer('ProductID', true);
			$table->integer('CompanyID')->index('ProductCompanyID_idx');
			$table->integer('CategoryID')->index('ProductCategoryID_idx');
			$table->string('ProductName', 45);
			$table->string('ProductCode', 45)->nullable();
			$table->decimal('ProductCost', 15);
			$table->decimal('ProductPrice', 15);
			$table->integer('ProductQtd')->nullable();
			$table->integer('ProductAlert')->nullable();
			$table->text('ProductDetail', 65535)->nullable();
			$table->string('ProductTypeCalc', 10)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('product');
	}

}
