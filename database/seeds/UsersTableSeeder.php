<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => '$2y$10$DP66AiVqIzeqpkltEr06Vu1GN3HpGto3KEF21b69dPCSqXVVBN97O',
                'remember_token' => null,
            ],
        ];

        User::insert($users);
    }
}
