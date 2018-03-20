<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKayakingLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kayaking_logs', function (Blueprint $table) {
            $table->engine = 'InnoDB';        
            $table->increments('id');
            $table->string('water_level',100);
            $table->integer('base_log_id')->unsigned()->nullable(true);
            $table->integer('template_id')->unsigned()->nullable(true);
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
        Schema::dropIfExists('kayaking_logs');
    }
}
