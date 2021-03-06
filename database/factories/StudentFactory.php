<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Student::class;
    protected $gender= array('F','M','O');


    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->name(),
            'last_name'=>$this->faker->name(),
            'gender'=>$this->gender[array_rand($this->gender,1)],
            'dni'=>strval(mt_rand()),
            'birth_date'=>date("Y-m-d", mktime(0,0,0,6,20,1990)),
            'phone'=> strval(mt_rand()),
        ];
    }
}
