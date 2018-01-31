<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ConstraintsLogbookTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('logbook', function (Blueprint $table) {
            // add foreign key to logbook_type_id and user_id
            $table->integer('user_id')->unsigned()->nullable(true);
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('logbook_type_id')->unsigned()->nullable(true);
            $table->foreign('logbook_type_id')->references('id')->on('logbook_type');
            //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('logbook', function (Blueprint $table) {
            // drop fk constraint and the columns for user_id and logbook_type_id
        /*
            $table->dropForeign('user_id');
            $table->dropColumn('user_id');
            $table->dropForeign('logbook_type_id');
            $table->dropColumn('logbook_type_id');
        */
        });
    }
}
