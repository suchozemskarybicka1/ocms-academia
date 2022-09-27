<?php namespace Adrian\StudentLogger\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteAdrianStudentlogger extends Migration
{
    public function up()
    {
        Schema::dropIfExists('adrian_studentlogger_');
    }
    
    public function down()
    {
        Schema::create('adrian_studentlogger_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name', 191);
            $table->dateTime('arrive');
            $table->boolean('late');
        });
    }
}
