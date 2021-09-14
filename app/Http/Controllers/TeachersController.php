<?php

namespace App\Http\Controllers;

use App\Models\Teachers;

use Illuminate\Http\Request;

class TeachersController extends Controller
{
    public function index(){
        
        // $teachers = Teachers::all(); // neglets all soft deleted data

        // // dd ( $teachers->all());
        // if( $teachers ){
        //     return view('teachers.teachers')->with('teachers', $teachers);
        // }
        
        // $teachers = Teachers::orderBy('id','desc')->get(); // neglets all soft deleted data

        // // dd ( $teachers->all());
        // if( $teachers ){
        //     return view('teachers.teachers',[
        //         "teachers" => $teachers
        //     ]);
        
        // }

        // $teachers = Teachers::orderBy('id','desc')->get(); // neglets all soft deleted data

        // // dd ( $teachers->all());
        // if( $teachers ){
        //     return view('teachers.teachers',[
        //         "teachers" => $teachers
        //     ]);
        
        // }


        $teachers = Teachers::withTrashed()->get();

        // dd ( $teachers->all());
        if( $teachers ){
            return view('teachers.teachers')->with('teachers', $teachers);
        }
    }




    public function destroy($id){
        // return $id;
        if($id === 'all'){
            $teachers = Teachers::withoutTrashed();
            if($teachers->count() > 0){
                if($teachers->delete()){
                    return back()->with('status1', 'All Teachers soft deleted successfuly');
                }
                return back()->with('status2', 'Error occured while deleting data');
            }
            return back()->with('status2', 'All teachers are already soft deleted');
        }
        else{
            $teacher = Teachers::find($id);
            if($teacher){
                if($teacher->delete()){
                    return back()->with('status1', 'Teacher soft deleted successfuly');
                }
                return back()->with('status2', 'Error occured while deleting data');
            }
            return back()->with('status2', 'Teacher not found');
        }
    }







    public function delete($id){
        // return $id;
        if($id === 'all'){
            $teachers = Teachers::withTrashed()->get();
            // dd($teachers->count());
            if($teachers->count() > 0){
                foreach($teachers as $teacher){
                    // $teachers->forceDelete();
                    
                        if( !($teacher->forceDelete()) ){
                            return back()->with('status2', 'Error occured while deleting data');
                        }    
                }
                return back()->with('status1', 'All Teachers hard deleted successfuly');
            }
            return back()->with('status2', 'Any Teacher not found');
            // if($teachers->count() > 0){
            //     if($teachers->forceDelete()){
            //         return back()->with('status1', 'All Teachers hard deleted successfuly');
            //     }
            //     return back()->with('status2', 'Error occured while deleting data');
            // }
            // return back()->with('status2', 'Any Teacher not found');
        }
        else{
            $teacher = Teachers::withTrashed()->where('id', $id);
            if($teacher){
                if($teacher->forceDelete()){
                    return back()->with('status1', 'Teacher hard deleted successfuly');
                }
                return back()->with('status2', 'Error occured while deleting data');
            }
            return back()->with('status2', 'Teacher not found');
        }
       
    }



    public function restore($id){
        // return $id;
        if($id === 'all'){
            $teachers = Teachers::onlyTrashed();
            if($teachers->count() > 0){
                if($teachers->restore()){
                    return back()->with('status1', 'All Teachers restored successfuly');
                }
                return back()->with('status2', 'Error occured while restoring data');
            }
            return back()->with('status2', 'Already all teachers are restored');
        }
        else{
            $teacher = Teachers::withTrashed()->where('id', $id);
            if($teacher){
                if($teacher->restore()){
                    return back()->with('status1', 'Teacher restored successfuly');
                }
                return back()->with('status2', 'Error occured while restoring data');
            }
            return back()->with('status2', 'Teacher not found');
        }

        
    }
    

    // public function soft_delete_for_all(){

    //     $teachers = Teachers::all();
    //     dd($teachers);
    //     // if($teachers){
    //     //     if($teachers->delete()){
    //     //         return back()->with('status1', 'all Teachers soft deleted successfuly');
    //     //     }
    //     //     return back()->with('status2', 'Error occured while soft deleting data');
    //     // }
    //     // return back()->with('status2', 'Teacher not found');
    // }

    // public function hard_delete_for_all($id){

    //     $teachers = Teachers::withTrashed()->get();
    //     if($teachers){
    //         if($teachers->forceDelete()){
    //             return back()->with('status1', 'All Teachers hard deleted successfuly');
    //         }
    //         return back()->with('status2', 'Error occured while hard deleting data');
    //     }
    //     return back()->with('status2', 'Teacher not found');
    // }
    // public function all_restore(){
    //     // return "ok";
    //     $teachers = Teachers::withTrashed()->get();
    //     dd( $teachers );
    //     // if($teachers){
    //     //     if($teachers->restore()){
    //     //         return back()->with('status1', 'All Teachers restored successfuly');
    //     //     }
    //     //     return back()->with('status2', 'Error occured while restoring data');
    //     // }
    //     // return back()->with('status2', 'Teacher not found');
    // }
}
