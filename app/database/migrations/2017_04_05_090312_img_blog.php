<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ImgBlog extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('blg_image', function(Blueprint $table){

			$table->integer('id', true);
			$table->string('image', 250);
			$table->integer('blog_id');

			$table->foreign('blog_id')->references('id')->on('blog')->onDelete('cascade');

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
		Schema::drop('blg_image');
	}

}
