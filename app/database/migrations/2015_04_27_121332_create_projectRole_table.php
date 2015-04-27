<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectRoleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('projectroles', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('role');
			$table->integer('user_id')-> unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
			$table->integer('project_id')-> unsigned();
            $table->foreign('project_id')->references('id')->on('projects');
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
        Schema::table('projectroles', function($table) {
            $table->dropForeign('projectroles_project_id_foreign');
            $table->dropForeign('project_roles_user_id_foreign');
        });
		Schema::drop('projectroles');
	}

}
