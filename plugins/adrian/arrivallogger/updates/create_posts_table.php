<?php namespace Adrian\ArrivalLogger\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreatePostsTable extends Migration
{
    public function up()
    {
        Schema::create('adrian_arrivallogger_posts', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->boolean('late');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('adrian_arrivallogger_posts');
    }
}
