<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBunchTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bunch', function(Blueprint $table)
		{
			$table->integer('BunchID', true);
			$table->integer('CompanyID')->index('BunchCompanyID_idx');
			$table->string('BunchName', 45);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('bunch');
	}

}
