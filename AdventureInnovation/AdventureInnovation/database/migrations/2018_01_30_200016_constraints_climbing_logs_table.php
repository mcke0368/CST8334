<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ConstraintsClimbingLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('climbing_logs', function (Blueprint $table) {
            $table->foreign('base_log_id')->references('id')->on('base_logs')->onDelte('cascasde');
            $table->foreign('template_id')->references('id')->on('log_templates')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('climbing_logs', function (Blueprint $table) {
            $table->dropForeign('base_log_id');
            $table->dropForeign('template_id');
        });
    }
}
