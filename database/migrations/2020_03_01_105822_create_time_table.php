<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTimeTable extends Migration {

	public function up()
	{
		Schema::create('time', function(Blueprint $table) {
			$table->bigIncrements('no_time', true);
			$table->softDeletes();
			$table->string('name', 50)->nullable();
		});
	}

	public function down()
	{
		Schema::drop('time');
	}
}