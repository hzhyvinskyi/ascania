<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecipePersonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipe__persons', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('amount_of_persons');
            $table->timestamps();

            $table->unique('amount_of_persons');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('recipe__persons', function (Blueprint $table) {
            $table->dropUnique('amount_of_persons');
        });
        Schema::dropIfExists('recipe__persons');
    }
}
