<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OfficeSeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Office::factory(10)->create();
    }
}
