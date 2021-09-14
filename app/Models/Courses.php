<?php

namespace App\Models;

use App\Models\Students;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;
    public function students(){
        return $this->belongsToMany(Students::class,'student_courses', 'course_id', 'student_id', 'id');
    }
}
