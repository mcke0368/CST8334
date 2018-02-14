<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ConstraintsLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('logs', function (Blueprint $table) {
            // add foreign key for guide
            $table->integer('guide_id')->unsigned()->nullable(true);
            $table->foreign('guide_id')->references('id')->on('guides');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('logs', function (Blueprint $table) {
            // drop foreign key and column for guide
            $table->dropForeign('guide_id');
            $table->dropColumn('guide_id');
        });
    }
}
