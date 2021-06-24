<?php

namespace Database\Factories;

use App\Models\Branch_office;
use Illuminate\Database\Eloquent\Factories\Factory;

class Branch_officeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Branch_office::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'academy_id' => rand(1,4),
            'branch_name' => $this->faker->name(),
            'street' => $this->faker->name(),
            'number' => strval(rand()),
            'active' => array_rand([true,false]),
        ];
    }
}