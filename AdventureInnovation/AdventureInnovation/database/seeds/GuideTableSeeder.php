<?php

use Illuminate\Database\Seeder;
use App\Models\Guide;
use App\Models\User;
use App\Models\Certification;

class GuideTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $guide = new Guide([
                'about' => '<p>Hi I&rsquo;m Brennan, A passionate individual who loves to facilitate growth and higher experiences in others. I have been working in the industry for over 3 years now and have never looked back! I love working with different people while having fun and achieving our goals. I possess a very entrepreneurial mindset that keeps me motivated and continually recognizing new opportunities. I possess many different skills and training as well so check out my logs and profile if you want a better look under the hood! oidfjgoldkhgjldkghldkfgjl;dkfgjodkfgjdo;figj</p>',
                'work_experience' => '<blockquote>\n<h5><strong>Adventure Guide</strong></h5>\n</blockquote>\n<ul>\n<li>Guiding clients on a variety of wilderness adventures including canoeing, kayaking, fishing, and day hikes while delivering an enjoyable, educational and safe environment</li>\n<li>Experience organizing, hosting and planning events for adults, youth and children</li>\n<li>Leadership skills such as communication, decision making and risk management</li>\n<li>Office duties including answering call/emails, booking clients, scheduling tours, filing client information, and office organization</li>\n<li>Planning, preparing, and guiding all multi day tours</li>\n<li>Outdoor adventure leadership</li>\n<li>Professionalism and ethics</li>\n<li>Search and rescue training</li>\n<li>Accounting</li>\n<li>Ecology</li>\n<li>Communications</li>\n<li>Computer applications</li>\n</ul>',
                'employment_history' => '<h5><strong>Adventure Guide</strong></h5>\n<ul>\n<li>Guiding clients on a variety of wilderness adventures including canoeing, kayaking, fishing, and day hikes while delivering an enjoyable, educational and safe environment</li>\n<li>Experience organizing, hosting and planning events for adults, youth and children</li>\n<li>Leadership skills such as communication, decision making and risk management</li>\n<li>Office duties including answering call/emails, booking clients, scheduling tours, filing client information, and office organization</li>\n<li>Planning, preparing, and guiding all multi day tours</li>\n<li>​​​​​​​Outdoor adventure leadership</li>\n<li>Professionalismi and ethics</li>\n<li>Search and rescue training</li>\n<li>Accounting</li>\n<li>Ecology</li>\n<li>Communications</li>\n<li>Computer applications</li>\n</ul>',
                'training' => '<ul>\n<li>Outdoor adventure leadership</li>\n<li>Professionalism and ethics</li>\n<li>Search and rescue training</li>\n<li>Accounting</li>\n<li>Risk management</li>\n<li>Ecology</li>\n<li>Communications</li>\n<li>Computer applications</li>\n</ul>',
        ]);

        $user = User::where('email', '=', 'brennan@brennan.com')->firstOrFail();
        $user->guide()->save($guide);


    }
}
