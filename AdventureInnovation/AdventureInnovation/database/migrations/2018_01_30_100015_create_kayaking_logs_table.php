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
            $table->string('rapid_class',100)->nullable(true);
            $table->string('flow_level')->nullable(true);
            $table->string('company')->nullable(true);
            $table->string('trip_type')->nullable(true);
            $table->integer('trip_number')->nullable(true);
            $table->integer('base_log_id')->unsigned()->nullable(true);
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
