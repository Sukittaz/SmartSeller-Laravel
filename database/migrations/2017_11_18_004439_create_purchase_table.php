<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePurchaseTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('purchase', function(Blueprint $table)
		{
			$table->integer('PurchaseID', true);
			$table->integer('CompanyID')->index('PurchaseCompanyID_idx');
			$table->integer('SupplierID')->index('PurchaseSupplierID_idx');
			$table->dateTime('PurchaseData');
			$table->string('PurchaseRef', 45);
			$table->integer('PurchaseStatus')->nullable();
			$table->string('PurchaseAttach', 200)->nullable();
			$table->text('PurchaseDetail', 65535)->nullable();
			$table->decimal('PurchaseTotal', 15)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('purchase');
	}

}
