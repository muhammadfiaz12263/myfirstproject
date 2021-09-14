<?php

namespace App\Http\Controllers;

use App\Models\Project;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(){
        $persons=[
                    "Muhammad Fiaz",
                    "Adnan Ahmed",
                    "Bilal Ahmed",
                    "Abdullah Azam",
                    "Syed Tayyab",
                    "Arslan Khalid"
                    
                ];
        return view('welcome', [
            "persons" => $persons,
            "name" => "Muhammad Fiaz",
            "js" => "<script>alert('Hey you are havked');</script>"
        ]);


    }

    public function database(){
        //    $project = new \App\Models\Project; // but if you use 'use App\Models\Project;' at top then you can directly use models with their names i.e '$project = new Project;' 
            
        // ***********  Insert Data Start ********* 
    
            // $project = new Project;   
            // $project->name = 'Abdullah Azam';
            // if( $project->save() ){
            //    return "Data successfully saved";
            // }
            // return "Error occured while saving data";
    
        // ***********  Insert Data End ********* 
    
        // ***********  Search Data Start ********* 
    
        //           ****  Method 1 ****
    
            // $id=9;
    
            // $project = Project::find( $id );   // Imported Note => find() method only search from id(table having primary key) table not from name, email,  etc..
    
            // // dd( $project ); // for debugging purpose i.e print_r(), var_dump()
            // if( $project ){
            //     return "Record has been found successfully";
            // }
            // return "Record not found with id = {$id} ";
    
    
            //           ****  Method 2 ****
    
            // $project = Project::table('project')->get();
    
            // dd( $project );
    
            // $name="Ahmed";
            // $name="Uzair Ahmed";
            
    
            // $project = Project::where( 'name', $name )->get();   // search all records and get all records which are found
            
            // dd( $project );
    
            // $project = Project::where( 'name', $name )->first();   // search all records and select 1 record
            // if( $project ){
            //     return "Record has been found successfully";
            // }
            // return "Record not found ";
    
    
            //           ****  Method 3 ****
    
            $projects = Project::all();
            // dd( $project );
            return view('database',[
                "projects" => $projects
            ]);
    
        // ***********  Search Data End ********* 
    
    
        // ***********  Update Data Start ********* 
            // $id=50;
    
            // $project = Project::find( $id );   
    
            // if( $project ){
            //     $project->name= 'Syed Tayyab Zameer';
            //     if( $project->save() ){
            //         return "Record has been updated successfully";
            //     }
            //     return "Error occured while updating Record";
            // }
            // return "Record not found with id = {$id} ";
    
        // ***********  Update Data End ********* 
    
    
        // ***********  Delete Data Start ********* 
            // $id=4;
    
            // $project = Project::find( $id );   
    
            // if( $project ){
            //     if( $project->delete() ){
            //         return "Record has been deleted successfully";
            //     }
            //     return "Error occured while deleting Record";
            // }
            // return "Record not found with id = {$id} ";
    
        // ***********  Delete Data End ********* 
    
    
        }

    // For query string i.e http://myfirstproject.com/?str=something
    
    // public function about(){
    //     // echo $_GET['str']."<br>"; // first method for query string
    //     // echo request('str')."<br>"; // 2nd method for query string
    //     return view('about');

    // }

    // For query string i.e http://myfirstproject.com/?str=something

    // 3rd method for query string
    // use Illuminate\Http\Request; and 
    // public function about( Request $request ){

    //     echo $request->str."<br>";
    //     return view('about');


    // }

    // For query string i.e http://myfirstproject.com/about/something

    // public function about( Request $request ){

    //     echo $request->str."<br>";
    //     return view('about');


    // }

    // public function about( $str ){

    //     echo $str."<br>";
    //     return view('about');


    // }



    // public function about( $str ){

    //     return view('about', ["str" => $str]);


    // }

    // for optional query string i.e 
    // http://myfirstproject.com/about
    // http://myfirstproject.com/about/something

    public function about( $str = null ){

        return view('about', ["str" => $str]);


    }

    public function contact(){
        
        
        return view('contact');

    }
}
