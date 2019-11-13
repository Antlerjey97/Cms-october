<?php namespace Learn\Movie\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateLearnMovie extends Migration
{
    public function up()
    {
        Schema::create('learn_movie_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->text('desicription')->nullable();
            $table->integer('year');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('learn_movie_');
    }
}
