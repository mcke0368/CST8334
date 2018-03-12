<?php

use Illuminate\Database\Seeder;

class VideosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('videos')->insert([
            'Youtube_URL' => 'https://www.youtube.com/embed/tgbNymZ7vqY',
            'Facebook_URL' => 'https://www.facebook.com/canada150th/',
            'Twitter_URL' => 'https://twitter.com/canada150th?lang=en',
            'Instagram_URL' => 'https://www.instagram.com/explore/tags/canada150/',
            'guide_id' => 1,
        ]);
    }
}
