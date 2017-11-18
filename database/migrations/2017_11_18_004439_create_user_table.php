<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user', function(Blueprint $table)
		{
			$table->integer('UserID', true);
			$table->integer('CompanyID')->index('UserCompanyID_idx');
			$table->integer('BunchID')->nullable()->index('UserBunchID_idx');
			$table->string('UserName', 45)->nullable();
			$table->string('UserLogin', 45);
			$table->string('UserEmail', 45)->nullable();
			$table->string('UserPass', 32)->nullable();
			$table->integer('UserStatus')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user');
	}

}
