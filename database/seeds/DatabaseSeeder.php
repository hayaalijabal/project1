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
        $this->call(productlineSeeder::class);
        $this->call(productSeeder::class);
        $this->call(Order_ProductSeeder::class);
        $this->call(customerSeeder::class);
        $this->call(employeeSeeder::class);
        $this->call(orderSeeder::class);
        $this->call(officeSeeder::class);
    }
}
