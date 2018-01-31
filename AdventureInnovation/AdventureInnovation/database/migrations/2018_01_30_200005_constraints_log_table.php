<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ConstraintsLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('log', function (Blueprint $table) {
            // add foreign key for guide
            $table->integer('guide_id')->unsigned()->nullable(true);
            $table->foreign('guide_id')->references('id')->on('guide');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('log', function (Blueprint $table) {
            // drop foreign key and column for guide
            $table->dropForeign('guide_id');
            $table->dropColumn('guide_id');
        });
    }
}
