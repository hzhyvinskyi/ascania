<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecipeComplexityTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipe__complexity_translations', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            // Your translatable fields

            $table->integer('complexity_id')->unsigned();
            $table->string('locale')->index();
            $table->unique(['complexity_id', 'locale']);
            $table->foreign('complexity_id')->references('id')->on('recipe__complexities')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('recipe__complexity_translations', function (Blueprint $table) {
            $table->dropForeign(['complexity_id']);
        });
        Schema::dropIfExists('recipe__complexity_translations');
    }
}
