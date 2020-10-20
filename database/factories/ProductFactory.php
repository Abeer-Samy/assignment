<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'code'=>$this->faker->randomNumber(5),
            'ProductlineID'=>$this->faker->randomNumber(6),
            'name'=>$this->faker->word,
            'Scale'=>$this->faker->randomNumber(2),
            'vendor'=>$this->faker->word,
            'PdDescription'=>$this->faker->sentence,
            'QtylnStock'=>$this->faker->randomNumber(3),
            'BuyPrice'=>$this->faker->randomFloat(19,0),
            'MSRP'=>$this->faker->sentence


        ];
    }
}
