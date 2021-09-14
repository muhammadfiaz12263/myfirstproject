<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class TestController extends Controller{

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

?>