<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ConstraintsBaseLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('base_logs', function (Blueprint $table) {
            // add foreign key
            $table->foreign('base_logable_type')->references('base_logable_type')->on('log_types');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('template_id')->references('id')->on('log_templates');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('base_logs', function (Blueprint $table) {
            $table->dropForeign('base_logable_type');
            $table->dropForeign('user_id');
            $table->dropForeign('template_id');
        });
    }
}
