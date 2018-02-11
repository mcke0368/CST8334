<?php


// TODO exception handling in case table is already created or admin user already added.

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Carbon;

class InsertCertificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       if (Schema::hasTable('certifications')) {

            
            $user = DB::table('users')->where('email', 'brennan@brennan.com')->first();
            $guide = DB::table('guides')->where('user_id', $user->id)->first();
       
           
            // certifications should be unique so we shouldn't need to check if already present
            DB::table('certifications')->insert(
                array(
                    'guide_id' => (string)$guide->id,
                    'cert_name' => 'Swiftwater Safety Awareness',
                    'cert_link' => 'certification_sample.pdf',
                )
            );
            DB::table('certifications')->insert(
                array(
                    'guide_id' => (string)$guide->id,
                    'cert_name' => 'Rock Climbing Training',
                    'cert_link' => 'certification_sample.pdf',
                )
            );
            DB::table('certifications')->insert(
                array(
                    'guide_id' => (string)$guide->id,
                    'cert_name' => 'Zipline Saftety Course',
                    'cert_link' => 'certification_sample.pdf',
                )
            );
            DB::table('certifications')->insert(
                array(
                    'guide_id' => (string)$guide->id,
                    'cert_name' => 'Khalid',
                    'cert_link' => 'certificate_sample.pdf',
                    'cert_expiry' => Carbon::createFromFormat('Y-m-d','2017-12-31')->toDateString(),
                )
            );
       
       }
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       if (Schema::hasTable('certifications')) {
            DB::table('certifications')->where('email', '=', 'admin@localhost')->delete();
       }
    }
}

