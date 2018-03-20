<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBaseLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('base_logs', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->longtext('debrief');
            $table->datetime('date_created');
            $table->datetime('date_occurred');
            $table->datetime('date_modified')->nullable(true);
            $table->string('weather', 50)->nullable(true);
            $table->string('temperature', 5)->nullable(true);
            $table->string('route', 200)->nullable(true);
            $table->string('activity', 200)->nullable(true);
            $table->integer('groupsize')->nullable(true);
            $table->integer('waterlevels')->nullable(true);
            $table->string('location', 200)->nullable(true);
            $table->string('format', 200)->nullable(true);
            $table->longtext('notes')->nullable(true);
            $table->longtext('summary')->nullable(true);
            $table->string('title',100)->nullable(false);
            $table->longtext('html_text')->nullable(true);
            $table->string('attachement_location', 512)->nullable(true);
            $table->string('logable_type',64);
            $table->integer('logable_id');
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
        Schema::dropIfExists('base_logs');
    }
}
