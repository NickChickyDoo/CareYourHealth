<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDispenseTable extends Migration {

	public function up()
	{
		Schema::create('dispense', function(Blueprint $table) {
			$table->bigIncrements('no_dispense', true);
			$table->timestamps();
			$table->softDeletes();
			$table->date('date')->nullable();
			$table->integer('amount')->nullable();
			$table->string('indicator', 50)->nullable();
			$table->integer('take')->nullable();
			$table->integer('daily')->nullable();
			$table->integer('no_when')->unsigned()->nullable();
			$table->string('time', 50)->nullable();
			$table->string('only_when', 50)->nullable();
			$table->bigInteger('no_drug')->unsigned()->nullable();
			$table->integer('no_condition')->unsigned()->nullable();
			$table->bigInteger('no_patiant')->unsigned()->nullable();
			$table->integer('no_user')->unsigned()->nullable();
		});
	}

	public function down()
	{
		Schema::drop('dispense');
	}
}
