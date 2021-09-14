<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MoviesController extends Controller
{
    // public function __construct(){
    //     $this->middleware('CheckAge');
    // }
    public function index(){
        return view('movies.booking');
    }
    public function checkAge(Request $request){
        // dd($request);
        // $this->middleware('CheckAge',[
        //     "request" => $request
        // ]);
    }
}
