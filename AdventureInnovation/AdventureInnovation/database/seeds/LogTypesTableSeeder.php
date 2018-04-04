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
        $type->name = 'Rafting';
        $type->slug = "rafting";
        $type->description = 'This is the model for rafting logs';
        $type->save();

        $type = new LogType();
        $type->base_logable_type = 'App\Models\ClimbingLog';
        $type->name = "Rock Climbing";
        $type->slug = "rock-climbing";
        $type->description = 'This is the model for climbining logs';
        $type->save();

        $type = new LogType();
        $type->base_logable_type = 'App\Models\KayakingLog';
        $type->name = 'White Water Kayaking';
        $type->slug = 'white-water-kayaking';
        $type->description = 'This is the model for kayakinging logs';
        $type->save();
    }
}
