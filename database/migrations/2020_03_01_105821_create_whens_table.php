<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWhensTable extends Migration {

	public function up()
	{
		Schema::create('whens', function(Blueprint $table) {
			$table->bigIncrements('no_when', true);
			$table->softDeletes();
			$table->string('name', 50)->nullable();
		});
	}

	public function down()
	{
		Schema::drop('whens');
	}
}