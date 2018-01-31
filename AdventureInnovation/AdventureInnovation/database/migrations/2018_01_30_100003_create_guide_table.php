<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGuideTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

     /*
     TODO:
     consider whether or not it would be better to store work experience, employement history, etc as more than just longtext
     */
    public function up()
    {
        Schema::create('guide', function (Blueprint $table) {
            $table->increments('id');
            $table->longtext('about')->nullable(true);
            $table->longtext('work_experience')->nullable(true);
            $table->longtext('employement_history')->nullable(true);
            $table->longtext('training')->nullable(true);
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
        Schema::dropIfExists('guide');
    }
}
