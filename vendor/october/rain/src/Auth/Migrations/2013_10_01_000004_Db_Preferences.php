<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DbPreferences extends Migration
{
    public function up()
    {
        Schema::create('preferences', function ($table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('namespace', 100);
            $table->string('group', 50);
            $table->string('item', 150);
            $table->text('value')->nullable();
            $table->index(['user_id', 'namespace', 'group', 'item'], 'user_item_index');
        });
    }

    public function down()
    {
        Schema::drop('preferences');
    }
}
