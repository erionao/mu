<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrjImage extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('prj_image', function(Blueprint $table){

			$table->integer('id', true);
			$table->string('image', 250);
			$table->integer('project_id');

			$table->foreign('project_id')->references('id')->on('project')->onDelete('cascade');

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
		Schema::drop('prj_image');
	}

}
