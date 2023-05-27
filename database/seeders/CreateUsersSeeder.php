<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
               'name'=>'Admin User',
               'username' => 'admin',
               'email'=>'admin@itsolutionstuff.com',
               'type'=>0,
               'password'=> bcrypt('123456'),
            ],
            [
               'name'=>'Manager User',
                'username' => 'manager',
               'email'=>'manager@itsolutionstuff.com',
               'type'=> 2,
               'password'=> bcrypt('123456'),
            ],
            [
               'name'=>'User',
                'username' => 'user',
               'email'=>'user@itsolutionstuff.com',
               'type'=>1,
               'password'=> bcrypt('123456'),
            ],
        ];
    
        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}
