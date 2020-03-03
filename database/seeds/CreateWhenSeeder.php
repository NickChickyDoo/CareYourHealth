<?php

use Illuminate\Database\Seeder;
use App\When;

class CreateWhenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $when = [
            [
                'name'=>'ก่อนอาหาร',
            ],
            [
                'name'=>'หลังอาหาร',
            ],
        ];

        foreach ($when as $key => $value) {
            When::create($value);
        }
    }
}
