<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\User;
use \App\Models\User_role;
use \App\Models\Academy;
use \App\Models\Branch_office;
use \App\Models\Course_type;
use \App\Models\Course;
use \App\Models\Student;
use \App\Models\Certificate;
use \App\Models\Academy_course_type;
use \App\Models\Academy_user;
use \App\Models\Course_student;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User_role::Create([
            'role' => 'administrator'
        ]);
        User_role::Create([
            'role' => 'operator'
        ]);
        User_role::Create([
            'role' => 'academy'
        ]);
        User::factory(10)->create();

        Academy::factory(4)->create();

        Branch_office::factory(10)->create();
        
        Course_type::Create([
            'course_name' => 'Moto y Carro A'
        ]);
        Course_type::Create([
            'course_name' => 'camion chico B'
        ]);
        Course_type::Create([
            'course_name' => 'Camion grande C'
        ]);
        Course::factory(12)->create();
        Student::factory(20)->create();
        Certificate::factory(20)->create();
        Academy_user::Create([
            'user_id'=> 1,
            'academy_id'=> 1,
        ]);
        Academy_user::Create([
            'user_id'=> 1,
            'academy_id'=> 2,
        ]);
        Academy_user::Create([
            'user_id'=> 1,
            'academy_id'=> 3,
        ]);
        Academy_user::Create([
            'user_id'=> 1,
            'academy_id'=> 4,
        ]);
        Academy_user::Create([
            'user_id'=> 2,
            'academy_id'=> 3,
        ]);
        Academy_course_type::Create([
            'course_type_id'=> 1,
            'academy_id'=> 1,
        ]);
        Academy_course_type::Create([
            'course_type_id'=> 1,
            'academy_id'=> 2,
        ]);
        Academy_course_type::Create([
            'course_type_id'=> 2,
            'academy_id'=> 4,
        ]);
        Course_student::Create([
            'student_id'=> 1,
            'course_id'=> 1,
            'attendance'=> true,
        ]);
        Course_student::Create([
            'student_id'=> 1,
            'course_id'=> 2,
            'attendance'=> false,
        ]);
        Course_student::Create([
            'student_id'=> 3,
            'course_id'=> 10,
            'attendance'=> true,
        ]);
        Course_student::Create([
            'student_id'=> 15,
            'course_id'=> 6,
            'attendance'=> true,
        ]);
    }
}