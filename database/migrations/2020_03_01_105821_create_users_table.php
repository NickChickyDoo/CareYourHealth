<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	public function up()
	{
		Schema::create('users', function(Blueprint $table) {
			$table->bigIncrements('no_user', true);
			$table->timestamps();
			$table->softDeletes();
			$table->string('name', 50);
			$table->string('lastname', 50);
			$table->string('position', 50);
			$table->string('sex', 10);
			$table->string('picture')->nullable();
			$table->string('email')->unique();
			$table->string('password');
			$table->boolean('is_admin')->nullable()->default(0);
			$table->rememberToken('rememberToken');
			$table->integer('no_assign')->unsigned()->nullable();
			$table->integer('no_role')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('users');
	}
}