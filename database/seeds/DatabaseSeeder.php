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
        $this->call(UserSeeder::class);
        $this->call(ApartmentSeeder::class);
        $this->call(LocationSeeder::class);
        $this->call(MessageSeeder::class);
        $this->call(ServiceSeeder::class);
        $this->call(PlanSeeder::class);
        $this->call(AnalyticSeeder::class);
        $this->call(ApartmentServiceSeeder::class);
        $this->call(ApartmentPlanSeeder::class);
    }
}
