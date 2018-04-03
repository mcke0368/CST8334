<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ConstraintsLogTemplatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('log_templates', function (Blueprint $table) {
            // add foreign key
            $table->foreign('base_logable_type')->references('base_logable_type')->on('log_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('log_templates', function (Blueprint $table) {
            // add foreign key
            $table->dropForeign('base_logable_type');
        });
    }
}
