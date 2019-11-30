<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker\Factory::create();
        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => '$2y$10$vUIzDlvfpu2yOATsPYcPaOTY/zgbgwViLIWSfZxSlmRBFV.g/fmOW',
                'remember_token' => null,
            ],
        ];

        User::insert($users);

        foreach(range(1,10) as $id)
        {
            User::create([
                'name' => $faker->unique()->name,
                'email' => "user$id@user$id.com",
                'password' => bcrypt('password'),
            ]);
        }
    }
}
