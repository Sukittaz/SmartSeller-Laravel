<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCostumerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('costumer', function(Blueprint $table)
		{
			$table->integer('CostumerID', true);
			$table->integer('CompanyID')->index('CostumerCompanyID_idx');
			$table->string('CostumerName', 45);
			$table->string('CostumerCPF', 20)->nullable();
			$table->string('CostumerCNPJ', 20)->nullable();
			$table->string('CostumerEmail', 45)->nullable();
			$table->string('CostumerPhone', 45)->nullable();
			$table->integer('CostumerCEP');
			$table->string('CostumerAddres', 45);
			$table->integer('CostumerAddresNumber');
			$table->string('CostumerNeigh', 45);
			$table->string('CostumerCity', 45);
			$table->string('CostumerCountry', 45)->nullable();
			$table->string('CostumerUF', 2)->nullable();
			$table->text('CostumerDetail', 65535)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('costumer');
	}

}
