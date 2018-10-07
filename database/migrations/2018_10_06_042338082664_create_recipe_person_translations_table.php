<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecipePersonTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipe__person_translations', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            // Your translatable fields

            $table->integer('person_id')->unsigned();
            $table->string('locale')->index();
            $table->unique(['person_id', 'locale']);
            $table->foreign('person_id')->references('id')->on('recipe__persons')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('recipe__person_translations', function (Blueprint $table) {
            $table->dropForeign(['person_id']);
        });
        Schema::dropIfExists('recipe__person_translations');
    }
}
