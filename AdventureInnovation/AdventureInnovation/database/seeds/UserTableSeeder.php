<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $role_guide_user = Role::where('name', 'guide_role')->first();

        $guide_user = new User();
        $guide_user->firstname = 'admin';
        $guide_user->lastname = 'admin';
        $guide_user->username = 'admin';
        $guide_user->email = 'admin@localhost';
        $guide_user->password = bcrypt('admin');
        $guide_user->save();
        $guide_user->roles()->attach($role_guide_user);

        $guide_user = new User();
        $guide_user->firstname = 'Brennan';
        $guide_user->lastname = 'Lemieux';
        $guide_user->username = 'brennan';
        $guide_user->email = 'brennan@brennan.com';
        $guide_user->password = bcrypt('brennan');
        $guide_user->save();
        $guide_user->roles()->attach($role_guide_user);

    }
}
