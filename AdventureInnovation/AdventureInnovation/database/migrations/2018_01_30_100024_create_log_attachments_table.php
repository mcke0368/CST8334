<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLogAttachmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('log_attachments', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->timestamps();
            //variables
            $table->string('original_name');
            $table->string('storage_path');

            $table->integer('base_log_id')->unsigned();
            $table->integer('user_id')->unsigned();
        });
        Schema::table('log_attachments', function($table) {
            $table->foreign('base_log_id')->references('id')->on('base_logs');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('log_attachments');
    }
}
