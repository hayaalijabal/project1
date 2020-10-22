<?php

use Illuminate\Database\Seeder;

class officeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Office::class,9)->create();
    }
}
