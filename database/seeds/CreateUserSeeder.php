<?php

use Illuminate\Database\Seeder;
use App\User;

class CreateUserSeeder extends Seeder
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
                'no_role'=>'2',
            ],
            [
                'name'=>'อดิศักดิ์',
                'lastname'=>'กิตติสาเรศ',
                'sex'=>'ชาย',
                'position' => 'ผู้เชียวชาญโรคสมองและระบบประสาท',
                'email'=>'provider@provider.com',
                'is_admin'=>'0',
                'password'=> bcrypt('123456'),
                'no_role'=>'3',
            ],

        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
