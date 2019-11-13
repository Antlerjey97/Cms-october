<?php namespace Learn\Movie\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateLearnMovies extends Migration
{
    public function up()
    {
        Schema::table('learn_movie_', function($table)
        {
            $table->string('slug')->nullable();
        });
    }

    public function down()
    {
        Schema::table('learn_movie_', function($table)
        {
            $table->dropColumn('slug');
        });
    }
}