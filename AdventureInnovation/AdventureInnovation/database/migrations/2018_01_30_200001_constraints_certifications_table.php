<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ConstraintsCertificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('certifications')) {

            Schema::table('certifications', function (Blueprint $table) {
                // add foreign key 
                $table->integer('guide_id')->unsigned()->nullable(false);
                $table->foreign('guide_id')->references('id')->on('guides');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // remove index for guide_id
        Schema::table('certifications', function (Blueprint $table) {
            $table->dropForeign('guide_id');
            $table->dropColumn('guide_id');
        });

    }
}
