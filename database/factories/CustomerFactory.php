<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Customer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'saiesRepEmployeeNum' => $this->faker->randomNumber(5),
            'name'=>$this->faker->word(),
            'LastName'=>$this->faker->word(),
            'FirstName'=>$this->faker->word(),
            'phone'=> $this->faker->randomNumber(9),
            'Address1'=>$this->faker->sentence(),
            'Address2'=>$this->faker->sentence(),
            'City'=>$this->faker->sentence(),
            'State'=>$this->faker->sentence(),
            'PostalCode' => $this->faker->randomNumber(3),
            'Country'=>$this->faker->sentence(),
            'CreditLimit'=>$this->faker->randomFloat(19,0)

        ];
    }
}
