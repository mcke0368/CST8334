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
            $table->string('name')->default("White Water Kayaking");
            $table->string('slug')->default("white-water-kayaking");
            $table->string('rapid_class',100)->nullable(true);
            $table->string('flow_level')->nullable(true);
            $table->string('launch_site')->nullable(true);
            $table->string('takeout_site')->nullable(true);
            $table->string('distance')->nullable(true);
            $table->string('boat_used')->nullable(true);
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
        Schema::dropIfExists('kayaking_logs');
    }
}
