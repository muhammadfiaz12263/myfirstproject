<?php

namespace App\Http\Controllers;

use App\Models\Courses;


use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function index(){
        $courses = Courses::orderBy('id', 'desc')->get();
        return view('courses.courses', [
            "courses" => $courses
        ]);
    }
    public function assigned_students($id){
        $course = Courses::find($id);
        if( $course ){
            $students = $course->students;
            return view('students.assigned-courses', [
                "students" => $students,
                "course" => $course
            ]);
        }
        
    }
}
