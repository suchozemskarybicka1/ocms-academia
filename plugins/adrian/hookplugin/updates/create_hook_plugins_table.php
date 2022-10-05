<?php namespace Adrian\HookPlugin\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateHookPluginsTable extends Migration
{
    public function up()
    {
        Schema::create('adrian_hookplugin_hook_plugins', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('adrian_hookplugin_hook_plugins');
    }
}
