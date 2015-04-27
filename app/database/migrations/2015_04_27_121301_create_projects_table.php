<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
    {
        Schema::create('projects',  function(Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('firstname');
            $table->string('lastname');
            $table->integer('telephone');
            $table->string('email');
            $table->string('RS');
            $table->text('description');
            $table->string('types');
            $table->text('context');
            $table->text('objectives');
            $table->text('constraint');
            $table->text('confirmed');
            $table->integer('agence_id')-> unsigned();
            $table->foreign('agence_id')->references('id')->on('agences')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::table('projects', function($table) {
            $table->dropForeign('projects_agence_id_foreign');
        });
        Schema::drop('projects');
	}

}
