<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\employee;

class EmployeeController extends Controller
{
    public function index()
    {
        return view ('home');
    }
    public function create()
    {
        return view('register');
    }
    public function store(Request $request)
    {
        $request->validate(

            [
                'firstname' => 'required',
                'lastname' => 'required',
                'youremail' => 'required|email',
                'employeeid' => 'required',
            ]
        );
        
        $employee = new employee;
        $employee->title= $request['title'];
        $employee->firstname= $request['firstname'];
        $employee->lastname= $request['lastname'];
        $employee->position= $request['position'];
        $employee->employeeid= $request['employeeid'];
        $employee->bussinesarea= $request['bussinesarea'];
        $employee->street= $request['street'];
        $employee->additionalinformation= $request['additionalinformation'];
        $employee->zipcode= $request['zipcode'];
        $employee->place= $request['place'];
        $employee->country= $request['country'];
        $employee->phonenumber= $request['phonenumber'];
        $employee->youremail= $request['youremail'];
        $employee->save();
        Return redirect('/employee');
    }
    public function show()
    {
        $Employee = employee::all();
        $value = compact('Employee');
        return view('view')->with($value);
    }
    public function edit($id)
    {
        $employee = employee::find($id);
        $data = compact('employee');
        return view('update')->with($data);
    }
    public function update(Request $request, $id)
    {
        $employee = employee::find($id);
        $employee->title= $request['title'];
        $employee->firstname= $request['firstname'];
        $employee->lastname= $request['lastname'];
        $employee->position= $request['position'];
        $employee->employeeid= $request['employeeid'];
        $employee->bussinesarea= $request['bussinesarea'];
        $employee->street= $request['street'];
        $employee->additionalinformation= $request['additionalinformation'];
        $employee->zipcode= $request['zipcode'];
        $employee->place= $request['place'];
        $employee->country= $request['country'];
        $employee->phonenumber= $request['phonenumber'];
        $employee->youremail= $request['youremail'];
        $employee->save();
        return redirect('/employee');  
    }
    public function destroy($id)
    {
        employee::find($id)->destroy($id);
        return redirect('/employee');
    }


}

