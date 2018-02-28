<?php

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_employee = new Role();
        $role_employee->name = 'corporate_role';
        $role_employee->description = 'A corporate user';
        $role_employee->save();


        $role_manager = new Role();
        $role_manager->name = 'guide_role';
        $role_manager->description = 'A Guide User';
        $role_manager->save();
    }
}
