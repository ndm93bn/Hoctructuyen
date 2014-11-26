<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bills', function(Blueprint $table){

			$table->increments('id');
			$table->integer('tutorial_id');
			$table->integer('user_id');
			$table->integer('admin_id')->nullable();
			$table->integer('start')->nullable();
			$table->integer('status')->default(0);
			$table->string('phone');
			$table->string('address');
			$table->integer('phuongthuc');
			$table->string('description',500);
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
