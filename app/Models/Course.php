<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    public function branch_office()
    {
        return $this->belongsTo(Branch_office::class);
    }
    public function type_course()
    {
        return $this->belongsTo(Course_type::class);
    }
    public function certificates(){
        return $this-> hasMany(Certificate::class);
    }
    public function students()
    {
        return $this->belongsToMany(Student::class,'course__students','student_id','course_id');
    }
}
