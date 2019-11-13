<?php namespace Learn\Movie\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateLearnMovieMovieGenres extends Migration
{
    public function up()
    {
        Schema::create('learn_movie_movie_genres', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('movie_id');
            $table->integer('genre_id');
            $table->primary(['movie_id','genre_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('learn_movie_movie_genres');
    }
}
