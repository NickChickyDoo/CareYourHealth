<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTreatmentsTable extends Migration {

	public function up()
	{
		Schema::create('treatments', function(Blueprint $table) {
			$table->bigIncrements('no_treatment', true);
			$table->timestamps();
			$table->softDeletes();
			$table->string('cheifCompaint')->nullable();
			$table->string('presentIllness')->nullable();
			$table->string('pastHistory')->nullable();
			$table->string('drugAllergy')->nullable();
			$table->string('familyHistry')->nullable();
			$table->string('diagnosis')->nullable();
			$table->string('treatment');
			$table->integer('no_patiant')->unsigned();
			$table->integer('no_user')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('treatments');
	}
}