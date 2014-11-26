<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTutorialTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tutorials', function(Blueprint $table)
			{
				$table->increments('id');
				$table->string('title',500);
				$table->id('user_id');
				$table->text('description');
				$table->string('avatar');
				$table->string('alias');
				$table->integer('status')->default(1);
				$table->boolean('locked')->default(false);
				$table->integer('view')->default(0);
				$table->integer('location')->nullable();
				$table->integer('length')->nullable();
				$table->integer('cost')->nullable();
				$table->timestamps();

			});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
