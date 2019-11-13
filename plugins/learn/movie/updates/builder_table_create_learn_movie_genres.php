<?php namespace Learn\Movie\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateLearnMovieGenres extends Migration
{
    public function up()
    {
        Schema::create('learn_movie_genres', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('genre_title');
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('learn_movie_genres');
    }
}
