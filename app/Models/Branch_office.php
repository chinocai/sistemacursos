<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch_office extends Model
{
    use HasFactory;
    public function academy(){
        return $this->belongsTo(Academy::class);
    }
    public function courses(){
        return $this->hasMany(Course::class);
    }
}
