<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductlineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Productline::factory(10)->create();
    }
}
