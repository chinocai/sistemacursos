<?php

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Course::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'branch_office_id'=>rand(1,10),
            'type_course_id'=>rand(1,3),
            'start_date'=>date("Y-m-d", mktime(0,0,0,6,20,2021)),
            'end_date'=>date("Y-m-d", mktime(0, 0, 0, 6,18,2021)),
            'total_hours'=> 5,
            'start_time'=>date("H:i:s", mktime(15,0,0,0,0,0)),
            'expiration'=>date("Y-m-d", mktime(0,0,0,6,20,2030))
        ];
    }
}
