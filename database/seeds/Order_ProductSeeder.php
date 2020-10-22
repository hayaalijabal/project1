<?php

use Illuminate\Database\Seeder;

class Order_ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Order_Product::class,3)->create();
    }
}
