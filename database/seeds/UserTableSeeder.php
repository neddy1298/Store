<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $user = [
            'name' => 'User',
            'email' => 'user@gmail.com',
            'password' => bcrypt('user1298'),
            'phone' => '082125241014',
        ];

        $admin = [
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin1298')
        ];

        DB::table('users')->insert($user);
        DB::table('admins')->insert($admin);
    }
}
