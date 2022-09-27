<?php namespace Adrian\StudentLogger\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAdrianStudentlogger extends Migration
{
    public function up()
    {
        Schema::table('adrian_studentlogger_', function($table)
        {
            $table->dateTime('test');
        });
    }
    
    public function down()
    {
        Schema::table('adrian_studentlogger_', function($table)
        {
            $table->dropColumn('test');
        });
    }
}
