<?php


// TODO exception handling in case table is already created or admin user already added.

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InsertUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       if (Schema::hasTable('users')) {


            // users should be unique so we shouldn't need to check if already present
            DB::table('users')->insert(
                array(
                    'firstname' => 'admin',
                    'lastname' => 'admin', 
                    'username' => env('ADMIN_USER_NAME', 'admin'),
                    'email' => env('ADMIN_USER_EMAIL', 'admin@localhost'),
                    'password' => env('ADMIN_USER_PASSWORD', 'admin'),
                )
            );

            // TODO - move these inserts into a seed directory
            // Insert Brennen
            DB::table('users')->insert(
                array(
                    'firstname' => 'brennan',
                    'lastname' => 'lemieux', 
                    'username' => 'brennan',
                    'email' => 'brennan@brennan.com',
                    'password' => '1234',
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
       if (Schema::hasTable('users')) {
            DB::table('users')->where('email', '=', 'admin@localhost')->delete();
       }
    }
}
