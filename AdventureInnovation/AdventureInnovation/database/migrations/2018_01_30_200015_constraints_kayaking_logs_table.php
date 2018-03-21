<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ConstraintsKayakingLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('kayaking_logs', function (Blueprint $table) {
            $table->foreign('base_log_id')->references('id')->on('base_logs')->onDelte('cascasde');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('kayaking_logs', function (Blueprint $table) {
            $table->dropForeign('base_log_id');
        });
    }
}
