<?php

use Illuminate\Database\Seeder;
use App\Models\LogType;

class LogTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $type = new LogType();
        $type->base_logable_type = 'App\Models\RaftingLog';
        $type->description = 'This is the model for rafting logs';
        $type->save();

        $type = new LogType();
        $type->base_logable_type = 'App\Models\ClimbingLog';
        $type->description = 'This is the model for climbining logs';
        $type->save();

        $type = new LogType();
        $type->base_logable_type = 'App\Models\KayakingLog';
        $type->description = 'This is the model for kayakinging logs';
        $type->save();
    }
}
