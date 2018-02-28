<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use App\Models\Certification;
use App\Models\User;
use App\Models\Guide;

class CertificationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $cert = new Certification([
            'cert_name' => 'Swiftwater Safety Awareness',
            'cert_link' => 'certification_sample.pdf',
        ]);
        $cert->save();

         $cert = new Certification([
             'cert_name' => 'Rock Climbing Training',
             'cert_link' => 'certification_sample.pdf',
        ]);
        $cert->save();

         $cert = new Certification([
             'cert_name' => 'Zipline Saftety Course',
             'cert_link' => 'certification_sample.pdf',
        ]);
        $cert->save();

         $cert = new Certification([
             'cert_name' => 'Khalid',
             'cert_link' => 'certificate_sample.pdf',
             'cert_expiry' => Carbon::createFromFormat('Y-m-d', '2017-12-31')->toDateString(),
        ]);
        $cert->save();


        // add pivot table data in here because there's a whacky larvel error saying that GuideCertificationTableSeeder doesn't exist.
        $user = User::where('email', '=', 'brennan@brennan.com')->firstOrFail();
        $guide = $user->guide;

        $certs = Certification::all();
        foreach ( $certs as $cert) {
            $cert->guides()->attach($guide);
        }


    }
}
