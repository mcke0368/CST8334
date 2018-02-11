<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ConstraintsCompaniesGuidesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('companies_guides', function (Blueprint $table) {
             // add foreign key to guide_id and company_id
            $table->integer('guide_id')->unsigned()->nullable(true);
            $table->foreign('guide_id')->references('id')->on('guides');
            $table->integer('company_id')->unsigned()->nullable(true);
            $table->foreign('company_id')->references('id')->on('companies');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('companies_guides', function (Blueprint $table) {
            $table->dropForeign('guides_id');
            $table->dropColumn('guides_id');
            $table->dropForeign('companies_id');
            $table->dropColumn('companies_id');
        });
    }
}
