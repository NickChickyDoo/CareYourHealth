<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAssigmentsTable extends Migration {

	public function up()
	{
		Schema::create('assigments', function(Blueprint $table) {
			$table->bigIncrements('no_assign', true);
			$table->timestamps();
			$table->softDeletes();
			$table->date('date')->nullable();
			$table->string('place')->nullable();
			$table->string('assignFor')->nullable();
			$table->integer('no_patiant')->unsigned()->nullable();
			$table->integer('no_user')->unsigned()->nullable();
		});
	}

	public function down()
	{
		Schema::drop('assigments');
	}
}
