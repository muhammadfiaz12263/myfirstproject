<?php

namespace App\Models;
use App\Models\Phones;
use App\Models\Posts;
use App\Models\Courses;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    use HasFactory;
    public function phone(){
        return $this->hasOne(Phones::class, 'user_id', 'id');
    }
    public function posts(){
        return $this->hasMany(Posts::class, 'user_id', 'id');
    }
    public function courses(){
        return $this->belongsToMany(Courses::class,'student_courses', 'student_id', 'course_id', 'id');
    }
}
