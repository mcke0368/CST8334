<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ConstraintsGuideCertificationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('guide_certification', function (Blueprint $table) {
            // add foreign key to guide_id and company_id
            $table->foreign('certification_id')->references('id')->on('certifications');
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
        Schema::table('guide_certification', function (Blueprint $table) {
            $table->dropForeign('certification_id');
            $table->dropColumn('certification_id');
            $table->dropForeign('guide_id');
            $table->dropColumn('guide_id');
        });
    }
}
