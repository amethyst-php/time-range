<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Schema;

class CreateTimeRangesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create(Config::get('amethyst.time-range.data.time-range.table'), function (Blueprint $table) {
            $table->increments('id');
            $table->string('year', 20);
            $table->string('month', 20);
            $table->string('day', 20);
            $table->string('weekday', 20);
            $table->time('start');
            $table->time('end');
            $table->boolean('aggregate');
            $table->integer('count');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists(Config::get('amethyst.time-range.data.time-range.table'));
    }
}
