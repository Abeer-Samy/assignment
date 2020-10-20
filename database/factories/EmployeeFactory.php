<?php

namespace Database\Factories;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Employee::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'OfficeCode'=> $this->faker->randomNumber(5),
            'reportsTo'=> $this->faker->randomNumber(5),
            'LastName'=>$this->faker->word(),
            'FirstName'=>$this->faker->word(),
            'Extension'=>$this->faker->sentence(),
            'Email'=>$this->faker->safeEmail,
            'JobTitle'=>$this->faker->sentence()
        ];
    }
}
