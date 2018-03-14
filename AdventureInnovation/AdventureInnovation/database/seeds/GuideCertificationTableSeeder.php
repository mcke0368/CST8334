<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Certification;

class GuideCertificationTableSeeder extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('email', '=', 'brennan@brennan.com')->firstOrFail();
        $guide = $user->guide;

        $certs = Certification::all();
        foreach ( $certs as $cert) {
            $cert->guides()->attach($guide);
        }
    }
}
