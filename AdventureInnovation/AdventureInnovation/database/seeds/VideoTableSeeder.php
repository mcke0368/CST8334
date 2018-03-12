<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use App\Models\Certification;
use App\Models\User;
use App\Models\Guide;

class VideoTableSeeder extends Seeder
{


        public function run()
    {

        // add pivot table data in here because there's a whacky larvel error saying that GuideCertificationTableSeeder doesn't exist.

        $video = new Video([
            'Youtube_URL' => 'https://www.youtube.com/embed/tgbNymZ7vqY',
            'Facebook_URL' => 'https://www.facebook.com/canada150th/',
            'Twitter_URL' => 'https://twitter.com/canada150th?lang=en',
            'Instagram_URL' => 'https://www.instagram.com/explore/tags/canada150/',
            'guide_id' => 2,
        ]);
        $video.save();
    }
}
