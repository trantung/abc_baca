<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGalleryImagesTbl extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('gallery_images', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('summary',1000);
            $table->string('url');
            $table->string('image');
            $table->integer('gallery_id');
            $table->integer('status')->default(ACTIVE);
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
		Schema::drop('gallery_images');
	}

}
