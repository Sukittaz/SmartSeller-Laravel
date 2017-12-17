<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateExpenseTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('expense', function(Blueprint $table)
		{
			$table->integer('ExpenseID', true);
			$table->integer('CompanyID')->index('ExpenseCompanyID_idx');
			$table->dateTime('ExpenseDate');
			$table->string('ExpenseRef', 45);
			$table->decimal('ExpenseValue', 15);
			$table->string('ExpenseAttach', 100)->nullable();
			$table->text('ExpenseDetail', 65535)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('expense');
	}

}
