<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecipeRecipesCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipe__recipes_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('recipe_id');
            $table->unsignedInteger('category_id');

            $table->index('recipe_id');
            $table->index('category_id');

            $table->foreign('recipe_id')
                ->references('id')->on('recipe__recipes')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('category_id')
                ->references('id')->on('recipe__categories')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('recipe__recipes_categories', function (Blueprint $table) {
            $table->dropForeign('recipe_id');
            $table->dropForeign('category_id');

            $table->dropIndex('recipe_id');
            $table->dropIndex('category_id');
        });
        Schema::dropIfExists('recipe__recipes_categories');
    }
}
