<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Certification;

class CertificationGuideTableSeeder extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // add pivot table data in here because there's a whacky larvel error saying that GuideCertificationTableSeeder doesn't exist.
        $user = User::where('email', '=', 'brennan@brennan.com')->firstOrFail();
        $guide = $user->guide;

        $certs = Certification::all();
        foreach ( $certs as $cert) {
            $cert->guides()->attach($guide);
        }
    }
}
