<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePatiantsTable extends Migration {

	public function up()
	{
		Schema::create('patiants', function(Blueprint $table) {
			$table->bigIncrements('no_patiant', true);
			$table->softDeletes();
			$table->string('name', 50);
			$table->string('lastname', 50);
			$table->string('address');
			$table->date('birth');
			$table->string('pid', 13);
			$table->string('sex', 10);
			$table->string('line', 50)->nullable();
			$table->string('patient_tel', 15)->nullable();
			$table->string('contact', 15)->nullable();
			$table->integer('no_dispense')->unsigned()->nullable();
			$table->integer('no_treatment')->unsigned()->nullable();
			$table->integer('no_assign')->unsigned()->nullable();
			$table->integer('no_role')->unsigned()->default('0');
			
		});
	}

	public function down()
	{
		Schema::drop('patiants');
	}
}
