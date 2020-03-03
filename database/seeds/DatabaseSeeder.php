<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CreateUserSeeder::class);
        $this->call(CreateDrugSeeder::class);
        // $this->call(CreateTimeSeeder::class);
        // $this->call(CreateWhenSeeder::class);
        // $this->call(CreateConditionSeeder::class);
    }
}
