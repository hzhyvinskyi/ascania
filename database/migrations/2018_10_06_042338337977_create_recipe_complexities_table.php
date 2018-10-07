<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecipeComplexitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipe__complexities', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('complexity_level');
            $table->timestamps();

            $table->unique('complexity_level');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('recipe__complexities', function (Blueprint $table) {
            $table->dropUnique('complexity_level');
        });
        Schema::dropIfExists('recipe__complexities');
    }
}
