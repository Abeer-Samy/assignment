<?php

namespace Database\Factories;

use App\Models\OrderProduct;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = OrderProduct::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'orderID' => $this->faker->randomNumber(8),
            'productCode'=>$this->faker->randomNumber(5),
            'Qty'=>$this->faker->randomNumber(4),
            'priceEach'=>$this->faker->randomFloat(19,0),

        ];
    }
}
