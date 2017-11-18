<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCompanyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('company', function(Blueprint $table)
		{
			$table->integer('CompanyID', true);
			$table->string('CompanyName', 45)->nullable();
			$table->string('CompanyCNPJ', 20)->nullable();
			$table->string('CompanyAddres', 45)->nullable();
			$table->string('CompanyAddresNumber', 45)->nullable();
			$table->string('CompanyComplement', 45)->nullable();
			$table->string('CompanyNeigh', 45)->nullable();
			$table->string('CompanyCity', 45)->nullable();
			$table->string('CompanyUF', 2)->nullable();
			$table->string('CompanyCep', 20)->nullable();
			$table->string('CompanyPhone', 45)->nullable();
			$table->string('CompanySocialName', 45)->nullable();
			$table->string('CompanyIE', 45)->nullable();
			$table->string('CompanyIEST', 45)->nullable();
			$table->string('CompanyIM', 45)->nullable();
			$table->string('CompanyCNAE', 45)->nullable();
			$table->text('CompanyImage', 65535)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('company');
	}

}
