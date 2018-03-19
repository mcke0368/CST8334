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
        $video->Facebook_URL = 'https://www.facebook.com/canada150th/';
        $video->Twitter_URL = 'https://twitter.com/canada150th?lang=en';
        $video->Instagram_URL = 'https://www.instagram.com/explore/tags/canada150/';
        $video->guide_id = $user->guide->id;

        $video->save();


    }

}
