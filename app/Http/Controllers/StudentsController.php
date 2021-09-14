<?php

namespace App\Http\Controllers;

use App\Models\Students;

use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function index(){
        $students = Students::orderBy('id','desc')->get();
        return view('students.students',[
            "students" => $students
        ]);
    }
    public function phone($id){
        // return $id;
        $student = Students::find($id);
        if( $student ){
            $phone= $student->phone;
            return view('students.phone-details',[
                "phone" => $phone
            ]);
            // dd ($phone->number);
        }
    }
    public function posts($id){
        $student = Students::find($id);
        if( $student ){
            $posts= $student->posts;
            return view('students.posts',[
                "posts" => $posts
            ]);
            // dd ($posts);
        }
    }
    public function create(){
        return view('students.create');
    }
    public function store(Request $request){
        // dd ($request->all());
        $students = new Students;
        $students->first_name = $request->first_name;
        $students->last_name = $request->last_name;
        $students->email = $request->email;
        $students->city = $request->city;
        $email = $request->email;
        $students->password = $request->password;
        $courses = $request->courses;
        
        // dd ($courses);
        // if( $courses != null){
        //     return $courses;
        // }
        // else {
        //     return "empty";
        // }
        if( $students->save()){
            if( $courses != null){
                $courses = array_map('intval', $courses);
                $student = Students::where('email', $email)->first();
                $student->courses()->attach($courses);
                return redirect('/students');
            }
            return redirect('/students');
            
        }


    }
    public function courses($id){
        $student = Students::find($id);
        $courses = $student->courses;
        return view('students.courses',[
            "courses" => $courses
        ]);
    }
}
