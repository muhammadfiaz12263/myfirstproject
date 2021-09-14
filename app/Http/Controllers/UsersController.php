<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Users;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = Users::orderBy('id', 'desc')->get();
        return view('users.users',[
            "users" => $users
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'name' => 'required|min:6',
        //     'email' => 'required|email',
        //     'password' => 'required:min:6',
        //     'confirm_password' => 'required|min:8'
        // ]);

        //   a password field and password_confirmation field should be for matching passwords

        // $this->validate($request, [
        //     'name' => 'required|min:6',
        //     'email' => 'required|email',
        //     'password' => 'required|confirmed|:min:6'
        // ]);
        // $users = new Users;
        // $users->name = $request->name;
        // $users->email = $request->email;
        // $users->password = bcrypt( $request->password );
        // if( $users->save() ){
        //     return redirect('/users');
        // }
        // $error_occured = "Error occured while saving data";
        // return redirect('/users/create',[
        //     "error_occured" => $error_occured
        // ]);


        $this->validate($request, [
            'name' => 'required|min:6',
            'email' => 'required|email',
            'password' => 'required|confirmed|:min:6'
        ]);

       
        $users = new Users;
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = bcrypt( $request->password );
        
        if( $users->save() ){
            return redirect('/users/create')->with('success', 'User created successfuly');
        }
        return redirect('/users/create')->with('danger', 'An error occured while creating data');


        //  There are two functions used for mass assignment
        // 1. fillable: 
                    // 1.when you want to store data with specific fields  into database 
                    // 2.any user can not insert malicious data into database 
                    // 3.we can not insert hash password directly  i.e Users::create($request->all());
        // 2. gaurded: 
                        // 1.when you doest want to store data with specific fields  into database   
                        // 2.if you doest not specify any field like id, user can insert malicious data into that field using inspect the html form  and  creating new hidden input value
                        // 3.we can not insert hash password directly  i.e Users::create($request->all());
        
        
        // Users::create($request->all()); 
        // mass assignment but this is best when you want to all values, putting to database as it is but now we have to make hash password
        
        // if( Users::create($request->all())  ){
        //     return redirect('/users/create')->with('success', 'User created successfuly');
        // }
        // return redirect('/users/create')->with('danger', 'An error occured while creating data');
        
        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = Users::find( $id );
        // dd( $user );
        if( $user ){
            return view("users.show", [
                "user" => $user
            ]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = Users::find( $id );
        // dd($user);
        return view("users.edit", [
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
        $this->validate($request, [
            'name' => 'required|min:6',
            'email' => 'required|email'
        ]);
        $updateData = Users::find( $id );
        if( $updateData ){
            $updateData->name = $request->name; 
            $updateData->email = $request->email;
            if( $updateData->save() ){
                return redirect("/users");
            }
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
        $user = Users::find( $id );
        if ( $user ){
            if( $user->delete() ){
                return redirect("/users");
            }
        }
        return redirect("/users");
    }
}
