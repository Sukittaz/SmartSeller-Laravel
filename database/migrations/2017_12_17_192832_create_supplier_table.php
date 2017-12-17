<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSupplierTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('supplier', function(Blueprint $table)
		{
			$table->integer('SupplierID', true);
			$table->integer('CompanyID')->index('SupplierCompanyID_idx');
			$table->string('SupplierName', 45);
			$table->string('SupplierEmail', 45)->nullable();
			$table->string('SupplierPhone', 45)->nullable();
			$table->integer('SupplierCNPJ')->nullable();
			$table->text('SupplierDetail', 65535)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('supplier');
	}

}
