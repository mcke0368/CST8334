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
            $table->string('title',100)->nullable(false);
            $table->string('location')->nullable(true);
            $table->string('position')->nullable(true);
            $table->string('company')->nullable(true);
            $table->datetime('start_time')->nullable(true);
            $table->datetime('end_time')->nullable(true);
            $table->boolean('indicent')->nullable(true);
            $table->integer('number_participants')->nullable(true);
            $table->integer('group_size')->nullable(true);
            $table->string('other_leaders')->nullable(true);
            $table->string('weather_contitions')->nullable(true);
            $table->string('weather_temp')->nullable(true);
            $table->string('weather_wind')->nullable(true);
            $table->text('weather_notes')->nullable(true);
            $table->longtext('notes')->nullable(true);
            $table->longtext('html_text')->nullable(true);
            $table->string('logable_type',64);

            /* foreign keys */
            $table->integer('user_id')->unsigned();
            $table->integer('logable_id')->unsigned();
            $table->integer('template_id')->unsigned();
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
