<?php

use Illuminate\Database\Seeder;
use App\Models\ClimbingLog;
use App\Models\User;
use App\Models\BaseLog;

use Illuminate\Support\Carbon;
class ClimbingLogsTableSeeder extends Seeder
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
        $base->title = '1st climbing log';
        $base->location = 'Algonquin College';
        $base->position = 'Guide';
        $base->company = 'ABC Inc';
        $base->start_time = Carbon::createFromFormat('Y-m-d H:i', '2017-12-31 09:00');
        $base->end_time = Carbon::createFromFormat('Y-m-d H:i', '2017-12-31 15:00');
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
        //$base->save();


        $log = new ClimbingLog();
        $log->climb_type = 'Class III';
        $log->multi_pitch = 1;
        $log->climbing_conditions = 'Granite:Old Bolts:Wet:Solid:';
        $log->rating_difficulty = '5.10';
        $log->rating_letter = 'A';
        $log->height = "500 m";
        $log->notes = "really fun climbing trip, almost fell though";
        $log->save();
        $log->baselogs()->save($base);


    }
}
