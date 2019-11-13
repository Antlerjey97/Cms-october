<?php namespace Learn\Movie\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateLearnMovie3 extends Migration
{
    public function up()
    {
        Schema::table('learn_movie_', function($table)
        {
            $table->timestamp('created_at');
            $table->text('pulished');
        });
    }
    
    public function down()
    {
        Schema::table('learn_movie_', function($table)
        {
            $table->dropColumn('created_at');
            $table->dropColumn('pulished');
        });
    }
}
