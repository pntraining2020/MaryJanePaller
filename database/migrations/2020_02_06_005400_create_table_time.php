<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTime extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_time', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('name_id');
            $table->time('clock_in');
            $table->time('start_break');
            $table->time('end_break');
            $table->time('clock_out');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_time');
    }
}
