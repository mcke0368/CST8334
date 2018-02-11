<?php


// TODO exception handling in case table is already created or admin user already added.

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

use Illuminate\Log;

class InsertGuidesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('guides')) {
            // insert admin as blank guide
            echo "hi there";
            $user = DB::table('users')->where('email', 'admin@localhost')->first();
            DB::table('guides')->insert(
                array(
                    'user_id' => (string)$user->id,
                    )
            );

             // Add brennan
             // TODO - remove this once databse is seed properly
             $user = DB::table('users')->where('email', 'brennan@brennan.com')->first();

             // guide should be unique so we shouldn't need to check if already present
             DB::table('guides')->insert(
                 array(
                    'user_id' => (string)$user->id,
                    'about' => '<p>Hi I&rsquo;m Brennan, A passionate individual who loves to facilitate growth and higher experiences in others. I have been working in the industry for over 3 years now and have never looked back! I love working with different people while having fun and achieving our goals. I possess a very entrepreneurial mindset that keeps me motivated and continually recognizing new opportunities. I possess many different skills and training as well so check out my logs and profile if you want a better look under the hood! oidfjgoldkhgjldkghldkfgjl;dkfgjodkfgjdo;figj</p>',
                    'work_experience' => '<blockquote>\n<h5><strong>Adventure Guide</strong></h5>\n</blockquote>\n<ul>\n<li>Guiding clients on a variety of wilderness adventures including canoeing, kayaking, fishing, and day hikes while delivering an enjoyable, educational and safe environment</li>\n<li>Experience organizing, hosting and planning events for adults, youth and children</li>\n<li>Leadership skills such as communication, decision making and risk management</li>\n<li>Office duties including answering call/emails, booking clients, scheduling tours, filing client information, and office organization</li>\n<li>Planning, preparing, and guiding all multi day tours</li>\n<li>Outdoor adventure leadership</li>\n<li>Professionalism and ethics</li>\n<li>Search and rescue training</li>\n<li>Accounting</li>\n<li>Ecology</li>\n<li>Communications</li>\n<li>Computer applications</li>\n</ul>',

                    'employment_history' => '<h5><strong>Adventure Guide</strong></h5>\n<ul>\n<li>Guiding clients on a variety of wilderness adventures including canoeing, kayaking, fishing, and day hikes while delivering an enjoyable, educational and safe environment</li>\n<li>Experience organizing, hosting and planning events for adults, youth and children</li>\n<li>Leadership skills such as communication, decision making and risk management</li>\n<li>Office duties including answering call/emails, booking clients, scheduling tours, filing client information, and office organization</li>\n<li>Planning, preparing, and guiding all multi day tours</li>\n<li>​​​​​​​Outdoor adventure leadership</li>\n<li>Professionalismi and ethics</li>\n<li>Search and rescue training</li>\n<li>Accounting</li>\n<li>Ecology</li>\n<li>Communications</li>\n<li>Computer applications</li>\n</ul>',
                    'training' => '<ul>\n<li>Outdoor adventure leadership</li>\n<li>Professionalism and ethics</li>\n<li>Search and rescue training</li>\n<li>Accounting</li>\n<li>Risk management</li>\n<li>Ecology</li>\n<li>Communications</li>\n<li>Computer applications</li>\n</ul>',
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
        if (Schema::hasTable('guides')) {
            DB::table('guides')->where('email', '=', 'admin@localhost')->delete();
        }
    }
}
