<?php

use Illuminate\Database\Seeder;
use App\Time;

class CreateTimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $time = [
            [
                'name'=>'เช้า',
            ],
            [
                'name'=>'กลางวัน',
            ],
            [
                'name'=>'เย็น',
            ],
            [
                'name'=>'ก่อนนอน',
            ],

        ];

        foreach ($time as $key => $value) {
            Time::create($value);
        }
    }
}
