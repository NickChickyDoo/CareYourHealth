<?php

use Illuminate\Database\Seeder;
use App\Condition;

class CreateConditionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $condition = [
            [
                'name'=>'ยานี้ทำให้ง่วงซึม',
            ],
            [
                'name'=>'กินติดต่อจนหมด',
            ],
            [
                'name'=>'ก่อนอาหารทันที',
            ],
            [
                'name'=>'หลังอาหารทันที แล้วดื่มน้ำตามมากๆ',
            ],
        ];

        foreach ($condition as $key => $value) {
            Condition::create($value);
        }
    }
}
