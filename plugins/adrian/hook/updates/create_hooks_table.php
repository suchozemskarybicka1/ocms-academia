<?php namespace Adrian\Hook\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateHooksTable extends Migration
{
    public function up()
    {
        Schema::create('adrian_hook_hooks', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('desc')->nullable();
            $table->text('skills')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('adrian_hook_hooks');
    }
}
