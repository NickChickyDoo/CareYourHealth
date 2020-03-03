<?php

use Illuminate\Database\Seeder;
use App\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
                    [
                        'name'=>'Admin',
                        'lastname'=>'Admin',
                        'sex'=>'Admin',
                        'position' => 'Admin',
                        'is_admin'=>'1',
                        'email'=>'admin@admin.com',
                        'password'=> bcrypt('123456'),
                    ],
                    [
                        'name'=>'User',
                        'lastname'=>'User',
                        'sex'=>'User',
                        'position' => 'User',
                        'email'=>'user@itsolutionstuff.com',
                        'is_admin'=>'0',
                        'password'=> bcrypt('123456'),
                    ],

        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
