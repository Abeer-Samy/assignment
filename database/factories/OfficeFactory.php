<?php

namespace Database\Factories;

use App\Models\Office;
use Illuminate\Database\Eloquent\Factories\Factory;

class OfficeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Office::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'code'=> $this->faker->randomNumber(5),
            'phone'=> $this->faker->randomNumber(8),
            'city'=> $this->faker->word(),
            'Address1'=>$this->faker->sentence(),
            'Address2'=>$this->faker->sentence(),
            'State'=> $this->faker->word(),
            'Country'=> $this->faker->word(),
            'PostalCode'=> $this->faker->randomNumber(5),
            'Territory'=>$this->faker->sentence()

        ];
    }
}
