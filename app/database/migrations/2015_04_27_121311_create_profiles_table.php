<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('profiles', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('year');
            $table->integer('note');
			$table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::table('profiles', function($table) {
            $table->dropForeign('profiles_user_id_foreign');
        });

		Schema::drop('profiles');
	}

}
