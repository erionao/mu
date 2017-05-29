<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BcgImage extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('bcg_image', function(Blueprint $table){

            $table->integer('id', true);
            $table->string('image', 250);
            $table->integer('section_id');

            $table->foreign('section_id')->references('id')->on('page_sections')->onDelete('cascade');

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
        Schema::drop('bcg_image');
	}

}
