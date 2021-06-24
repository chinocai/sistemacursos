<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Academy extends Model
{
    use HasFactory;

    public function branchOffices()
    {
        return $this->hasMany(Branch_office::class);
    }
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
    public function coursesType()
    {
        return $this->belongsToMany(Course_type::class,'academy_course_types','academy_id','course_type_id');   
    }
}
