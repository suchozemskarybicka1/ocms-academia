<?php namespace Adrian\StudentLogger\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAdrianStudentlogger2 extends Migration
{
    public function up()
    {
        Schema::create('adrian_studentlogger_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->dateTime('arrive');
            $table->boolean('late');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('adrian_studentlogger_');
    }
}
