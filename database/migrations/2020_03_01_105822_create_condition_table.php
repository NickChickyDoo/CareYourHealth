<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateConditionTable extends Migration {

	public function up()
	{
		Schema::create('condition', function(Blueprint $table) {
			$table->bigIncrements('no_condition', true);
			$table->softDeletes();
			$table->string('name', 50)->nullable();
		});
	}

	public function down()
	{
		Schema::drop('condition');
	}
}