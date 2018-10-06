<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecipeTimeTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipe__time_translations', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            // Your translatable fields

            $table->integer('time_id')->unsigned();
            $table->string('locale')->index();
            $table->unique(['time_id', 'locale']);
            $table->foreign('time_id')->references('id')->on('recipe__times')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('recipe__time_translations', function (Blueprint $table) {
            $table->dropForeign(['time_id']);
        });
        Schema::dropIfExists('recipe__time_translations');
    }
}
