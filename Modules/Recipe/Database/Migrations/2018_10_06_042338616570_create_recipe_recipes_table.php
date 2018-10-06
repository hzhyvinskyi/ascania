<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecipeRecipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipe__recipes', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->unsignedInteger('times_id');
            $table->unsignedInteger('persons_id');
            $table->unsignedInteger('complexity_id');
            $table->string('name');
            $table->string('image')->nullable();
            $table->text('text')->nullable();
            $table->mediumText('intro')->nullable();
            $table->timestamps();

            $table->index('times_id');
            $table->index('persons_id');
            $table->index('complexity_id');

            $table->foreign('times_id')
                ->references('id')->on('recipe__times')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('persons_id')
                ->references('id')->on('recipe__persons')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('complexity_id')
                ->references('id')->on('recipe__complexities')
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
        Schema::table('recipe__recipes', function (Blueprint $table) {
            $table->dropForeign('times_id');
            $table->dropForeign('persons_id');
            $table->dropForeign('complexity_id');

            $table->dropIndex('times_id');
            $table->dropIndex('persons_id');
            $table->dropIndex('complexity_id');
        });
        Schema::dropIfExists('recipe__recipes');
    }
}
