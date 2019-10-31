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
                'password'       => '$2y$10$kfzeTa47bWzaPekGLG2XG.fgYUuGNw9.h9KY6othVtyvyoo2XaECG',
                'remember_token' => null,
            ],
        ];

        User::insert($users);
    }
}
