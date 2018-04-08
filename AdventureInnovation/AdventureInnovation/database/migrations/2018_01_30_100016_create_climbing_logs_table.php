<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClimbingLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('climbing_logs', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name')->default('Rock Climbing');
            $table->string('slug')->default('rock-climbing');
            $table->string('climb_type')->nullable(true);
            $table->boolean('multi_pitch')->nullable(true);
            $table->string('climbing_conditions')->nullable(true);
            $table->string('rating_difficulty')->nullable(true);
            $table->string('rating_letter')->nullable(true);
            $table->string('height')->nullable(true);
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
        Schema::dropIfExists('climbing_logs');
    }
}
