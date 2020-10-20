<?php

namespace Database\Seeders;

use Database\Factories\OrderProductFactory;
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
        $this->call(EmployeeSeeder::class);
        $this->call(CustomerSeeder::class);
        $this->call(OrderProductSeeder::class);
        $this->call(OfficeSeder::class);
        $this->call(OrderSeeder::class);
        $this->call(PaymentSeeder::class);
        $this->call(ProductlineSeeder::class);
        $this->call(ProductSeeder::class);




    }
}
