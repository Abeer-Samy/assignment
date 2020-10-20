<?php

namespace Database\Factories;

use App\Models\Payment;
use Illuminate\Database\Eloquent\Factories\Factory;

class PaymentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Payment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'CheckNum'=>$this->faker->randomNumber(),
            'CustomerID'=>$this->faker->randomNumber(6),
            'PaymentDate'=>$this->faker->dateTime(),
            'Amount'=>$this->faker->randomFloat(19,0)
        ];
    }
}
