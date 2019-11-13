<?php namespace Learn\Movie\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateLearnMovie2 extends Migration
{
    public function up()
    {
        Schema::table('learn_movie_', function($table)
        {
            $table->dropColumn('actors');
        });
    }
    
    public function down()
    {
        Schema::table('learn_movie_', function($table)
        {
            $table->text('actors')->nullable();
        });
    }
}
