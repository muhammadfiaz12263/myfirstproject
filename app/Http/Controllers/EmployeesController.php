<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Employees;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employees::orderBy('id','desc')->get();
        // if($employees){
        //     return "ok hai";
        // }
        // return "not ok hai";
        return view('employees.employees', [
            'employees' => $employees
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employees.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $employees = new Employees;
        $employees->first_name = $request->first_name;
        $employees->second_name = $request->second_name;
        $employees->email = $request->email;
        $employees->email = $request->email;
        $employees->designation = $request->designation;
        $employees->password = $request->password;
        if( $employees->save() ){
            return redirect('/employees');
        }
        return redirect('/employees/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employee = Employees::find( $id );
        if( $employee ){
            return view("employees.show",[
                "employee" => $employee
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
        $employee = Employees::find($id);
        if($employee){
            return view("employees.edit",[
                "employee" => $employee
            ]);
        }
        
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
        $employee = Employees::find( $id );
        if( $employee ){
            $employee->first_name = $request->first_name;
            $employee->second_name = $request->second_name;
            $employee->email = $request->email;
            $employee->email = $request->email;
            $employee->designation = $request->designation;
            $employee->password = $request->password;
            if( $employee->save() ){
                return redirect("/employees");
            }
            return redirect("employees.edit", [
                "employee" => $employee
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
        $employee = Employees::find( $id );
        if( $employee ){
            if( $employee->delete() ){
                return redirect("/employees");
            }
        }
    }
}
