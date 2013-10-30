<?php

use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration {

	public function up()
	{
	    Schema::create('users', function($table)
	    {
	        $table->increments('id');
	        $table->string('name');
	        $table->string('password');
	        $table->string('email')->unique();
	        $table->timestamps();
	    });
	}

	public function down()
	{
	    Schema::drop('users');
	}

}