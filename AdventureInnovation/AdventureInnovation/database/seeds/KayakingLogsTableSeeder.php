<?php

use Illuminate\Database\Seeder;
use App\Models\KayakingLog;
use App\Models\User;
use App\Models\BaseLog;

use Illuminate\Support\Carbon;
class KayakingLogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* get a user */
        $user = User::where('email', '=', 'brennan@brennan.com')->firstOrFail();

        /* construct the base log */
        $base = new BaseLog();
        $base->title = '1st kayaking log';
        $base->location = 'Algonquin College';
        $base->position = 'Guide';
        $base->company = 'ABC Inc';
        $base->start_time = Carbon::createFromFormat('Y-m-d H:i', '2017-12-31 10:00');
        $base->end_time = Carbon::createFromFormat('Y-m-d H:i', '2017-12-31 13:00');
        $base->incident = false;
        $base->number_participants = 10;
        $base->group_size = 10;
        $base->other_leaders = 'John Smith; Peter Jackson';
        $base->weather_conditions = 'snow';
        $base->weather_temp = '20.5 C';
        $base->weather_notes = 'it was a beautiful snowy day';
        $base->notes = 'had a great time';
        $base->html_text = '<div><p> This is some sample text </p></div>';
        $base->user_id = $user->id;


        $log = new KayakingLog();
        $log->rapid_class = 'Class III';
        $log->flow_level = 'high';
        $log->launch_site = 'Orleans';
        $log->takeout_site = 'Kanata';
        $log->distance = '5 km';
        $log->boat_used = "kayak #4";
        $log->notes = "really fun kayaking trip, enjoyed by all";
        $log->save();
        $log->baselogs()->save($base);


    }
}
