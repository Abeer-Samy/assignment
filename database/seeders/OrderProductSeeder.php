<?php

namespace Database\Seeders;
use App\Models\OrderProduct;

use Illuminate\Database\Seeder;

class OrderProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\OrderProduct::factory(10)->create();
    }
}
