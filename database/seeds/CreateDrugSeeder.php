<?php

use Illuminate\Database\Seeder;
use App\Drug;

class CreateDrugSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $drug = [
            [
                'name'=>'Ibuprofen',
            ],
            [
                'name'=>'Ciproflox',
            ],
            [
                'name'=>'Amoxicillin',
            ],
            [
                'name'=>'Paracetamol',
            ],
            [
                'name'=>'Flumucil',
            ],
        ];

        foreach ($drug as $key => $value) {
            Drug::create($value);
        }
    }
}
