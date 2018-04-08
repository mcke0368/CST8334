<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRaftingLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rafting_logs', function (Blueprint $table) {
            $table->engine = 'InnoDB';        
            $table->increments('id');
            $table->string('name')->default("Rafting");
            $table->string('slug')->default("rafting");
            $table->string('rapid_class',100)->nullable(true);
            $table->string('flow_level')->nullable(true);
            $table->string('launch_site')->nullable(true);
            $table->string('takeout_site')->nullable(true);
            $table->string('trip_type')->nullable(true);
            $table->string('trip_number')->nullable(true);
            $table->text('notes')->nullable(true);
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
        Schema::dropIfExists('rafting_logs');
    }
}
