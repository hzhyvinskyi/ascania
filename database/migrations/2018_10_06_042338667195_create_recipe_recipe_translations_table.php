<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecipeRecipeTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipe__recipe_translations', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            // Your translatable fields

            $table->integer('recipe_id')->unsigned();
            $table->string('locale')->index();
            $table->unique(['recipe_id', 'locale']);
            $table->foreign('recipe_id')->references('id')->on('recipe__recipes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('recipe__recipe_translations', function (Blueprint $table) {
            $table->dropForeign(['recipe_id']);
        });
        Schema::dropIfExists('recipe__recipe_translations');
    }
}
