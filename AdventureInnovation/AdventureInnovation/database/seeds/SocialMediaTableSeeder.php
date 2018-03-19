<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\SocialMedia;

class SocialMediaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('email', '=', 'brennan@brennan.com')->firstOrFail();

        $soc = new SocialMedia();
        $soc->Facebook_URL = 'https://www.facebook.com/canada150th/';
        $soc->Twitter_URL = 'https://twitter.com/canada150th?lang=en';
        $soc->Instagram_URL = 'https://www.instagram.com/explore/tags/canada150/';
        $soc->user_id = $user->id;

        $soc->save();
    }
}
