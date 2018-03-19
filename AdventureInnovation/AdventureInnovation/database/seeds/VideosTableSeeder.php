<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Video;

class VideosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('email', '=', 'brennan@brennan.com')->firstOrFail();

        $video = new Video();
        $video->Youtube_URL = 'https://youtu.be/tgbNymZ7vqY';
        $video->user_id = $user->id;

        $video->save();


    }

}
