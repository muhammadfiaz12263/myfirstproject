<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Crud;

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $ReadData = Crud::all();
        $ReadData = Crud::orderBy("id","desc")->get();
        return view('crud.index', [
            "allData" => $ReadData
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crud.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Crud;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->description = $request->description;
        $data->save();
        return redirect("/crud");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $user = Crud::find( $id );
        // dd( $user );
        return view("crud.show", [
            "user" => $user
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = Crud::find( $id );
        return view("crud.edit", [
            "user" => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = Crud::find( $id );
        if ( $user ){
            if( $user->delete() ){
                return redirect("/crud");
            }
            return redirect("/crud/$id");
        }
        return redirect("/crud");
    }
}
