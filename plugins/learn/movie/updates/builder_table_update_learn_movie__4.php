<?php namespace Learn\Movie\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateLearnMovie4 extends Migration
{
    public function up()
    {
        Schema::table('learn_movie_', function($table)
        {
            $table->boolean('pulished')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('learn_movie_', function($table)
        {
            $table->text('pulished')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}
