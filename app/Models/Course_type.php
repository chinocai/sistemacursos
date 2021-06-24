<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course_type extends Model
{
    use HasFactory;
    public function courses()
    {
        return $this->hasMany(Course::class);
    }
    public function academies()
    {
        return $this->belongsToMany(Academy::class);
    }
}
