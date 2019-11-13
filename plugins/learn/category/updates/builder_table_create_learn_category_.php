<?php namespace Learn\Category\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateLearnCategory extends Migration
{
    public function up()
    {
        Schema::create('learn_category_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('category')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('learn_category_');
    }
}
