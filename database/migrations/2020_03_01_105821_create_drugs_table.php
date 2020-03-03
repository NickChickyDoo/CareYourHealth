<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDrugsTable extends Migration {

	public function up()
	{
		Schema::create('drugs', function(Blueprint $table) {
			$table->bigIncrements('no_drug', true);
			$table->softDeletes();
			$table->string('name', 50);
		});
	}

	public function down()
	{
		Schema::drop('drugs');
	}
}