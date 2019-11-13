<?php namespace Learn\Movie\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateLearnMovieActorsMovies extends Migration
{
    public function up()
    {
        Schema::create('learn_movie_actors_movies', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('movie_id')->unsigned();
            $table->integer('actor_id')->unsigned();
            $table->primary(['movie_id','actor_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('learn_movie_actors_movies');
    }
}
