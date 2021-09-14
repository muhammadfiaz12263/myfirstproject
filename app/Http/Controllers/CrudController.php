<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Crud;

class CrudController extends Controller
{
    
    public function index(){
        // $ReadData = Crud::all();
        $ReadData = Crud::orderBy("id","desc")->get();
        // dd($ReadData);
        return view('crud.index', [
            "allData" => $ReadData
        ]);
    }
    public function create(){
        return view('crud.create');
    }
    // public function store(){
    //     return request()->all();
    // }

    public function store(Request $request){
        // return $request->all();
        $data = new Crud;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->description = $request->description;
        $data->save();
        return redirect("/crud");
    }
    public function show($id){
        $user = Crud::find( $id );
        // dd( $user );
        if( $user ){
            return view("crud.show", [
                "user" => $user
            ]);
        }
    }
    public function destroy( $id ){
        // return $id;
        $user = Crud::find( $id );
        if ( $user ){
            if( $user->delete() ){
                return redirect("/crud");
            }
            return redirect("/crud/$id");
        }
        return redirect("/crud");
    }
    public function edit( $id ){
        $user = Crud::find( $id );
        // dd($user);
        return view("crud.edit", [
            "user" => $user
        ]);
    }
    public function update(Request $request, $id){
        // return "ok hai";
        $updateData = Crud::find( $id );
        if( $updateData ){
            $updateData->name = $request->name; 
            $updateData->email = $request->email;
            $updateData->description = $request->description;
            if( $updateData->save() ){
                return redirect("/crud");
            }
            return redirect("crud.edit", [
                "user" => $updateData
            ]);
        }
        
    }
}
