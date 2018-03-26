<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->longText('Type_of_Injury')->nullable(true);
            $table->text('Other_Injury')->nullable(true);
            $table->longText('Type_of_Illness')->nullable(true);
            $table->text('Other_Illness')->nullable(true);
            $table->longText('Program_Activity')->nullable(true);
            $table->text('Other_Activity')->nullable(true);
            $table->longText('Immediate_Cause')->nullable(true);
            $table->text('Other_Cause')->nullable(true);
            $table->longText('Anatomical_Location')->nullable(true);
            $table->date('Report_date')->nullable(true);
            $table->time('Report_time')->nullable(true);
            $table->text('Temperature')->nullable(true);
            $table->text('Location')->nullable(true);
            $table->text('Wind')->nullable(true);
            $table->text('Precipitation')->nullable(true);
            $table->text('Visibility')->nullable(true);
            $table->text('Surface_Condition')->nullable(true);
            $table->text('Incident')->nullable(true);
            $table->text('Evacuation_Method')->nullable(true);
            $table->text('Damage')->nullable(true);
            $table->text('Lost_Day')->nullable(true);
            $table->text('Lost_Number_Of_Days')->nullable(true);
            $table->text('Victim_Left_Field')->nullable(true);
            $table->text('Victim_Left_Date')->nullable(true);
            $table->text('Visit_Facility')->nullable(true);
            $table->text('Left_Date')->nullable(true);
            $table->text('Return_Field')->nullable(true);
            $table->text('Return_Date')->nullable(true);
            $table->text('Re_Curring')->nullable(true);
            $table->integer('user_id')->unsigned();
        });

        Schema::table('reports', function($table) {
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reports');
    }
}
