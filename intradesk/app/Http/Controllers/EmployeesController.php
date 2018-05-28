<?php

namespace Intradesk\Http\Controllers;

use Illuminate\Http\Request;
use Intradesk\Employee;

class EmployeesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::orderBy('firstName', 'asc')->paginate(10);
        return view('employees.index')->with('employees', $employees);
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
        $this->validate($request, [
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required',
            'ext' => 'required',
            'department' => 'required',
            'cell' => 'required',
            'birthmonth' => 'required',
            'birthday' => 'required',
            'license' => 'required'
        ]);

        // Create Employee
        $employee = new Employee;
        $employee->firstName = $request->input('firstName');
        $employee->lastName = $request->input('lastName');
        $employee->email = $request->input('email');
        $employee->ext = $request->input('ext');
        $employee->department = $request->input('department');
        $employee->cell = $request->input('cell');
        $employee->birthmonth = $request->input('birthmonth');
        $employee->birthday = $request->input('birthday');
        $employee->license = $request->input('license');
        $employee->save();

        return redirect('/employees')->with('success', 'Employee Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employee = Employee::find($id);
        return view('employees.show')->with('employee', $employee);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee = Employee::find($id);
        return view('employees.edit')->with('employee', $employee);

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
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required',
            'ext' => 'required',
            'department' => 'required',
            'cell' => 'required',
            'birthmonth' => 'required',
            'birthday' => 'required',
            'license' => 'required'
        ]);

        // Update Employee
        $employee = Employee::find($id);
        $employee->firstName = $request->input('firstName');
        $employee->lastName = $request->input('lastName');
        $employee->email = $request->input('email');
        $employee->ext = $request->input('ext');
        $employee->department = $request->input('department');
        $employee->cell = $request->input('cell');
        $employee->birthmonth = $request->input('birthmonth');
        $employee->birthday = $request->input('birthday');
        $employee->license = $request->input('license');

        $employee->save();

        return redirect('/employees')->with('success', 'Employee Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employee = Employee::find($id);
        $employee->delete();

        return redirect('/employees')->with('success', 'Employee Removed');
    }
}
