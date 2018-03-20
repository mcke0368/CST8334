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
            $table->foreign('logable_type')->references('logable_type')->on('log_types');
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
            $table->dropForeign('logable_type');
        });
    }
}
