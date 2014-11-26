<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CretePostTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('post', function(Blueprint $table){
			$table->increments('id');
			$table->integer('parent');
			$table->string('title', 500);
			$table->integer('tutorial_id');
			$table->string('alias');
			$table->longtext('content');
			$table->text('description');
			$table->string('code');
			$table->integer('view');
			$table->integer('status')->default(1);
			$table->boolean('locked')->default(false);
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
