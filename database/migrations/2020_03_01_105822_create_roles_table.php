<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRolesTable extends Migration {

	public function up()
	{
		Schema::create('roles', function(Blueprint $table) {
			$table->bigIncrements('no_role', true);
			$table->softDeletes();
			$table->string('name');
		});
	}

	public function down()
	{
		Schema::drop('roles');
	}
}