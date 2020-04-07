<?php

namespace App\Http\Controllers;

use App\students;
use Illuminate\Http\Request;

use App\levels;
use App\genders;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = students::latest()->paginate(5);
        return view('students.abm',compact('students'))->with('i', (request()->input('page', 1) - 1) * 5);

    }

    
    public function create()
    {
        $levels = levels::pluck('level', 'id');
        $genders = genders::pluck('gender', 'id');
       // return view('stock.edit', compact('id', 'products'));
        return view('students.create', compact('levels', 'genders'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'last_name_p' => 'required',
            'ci' => 'required',
            'date_birth' => 'required',
            'user' => 'required',
            'password' => 'required',
            'levels_id' => 'required',
            'genders_id' => 'required',
        ]);




        students::create($request->all());
        return redirect()->route('students.index')->with('success','Student created successfully.');
    }

    public function show(students $student)
    {
        return view('students.show',compact('student'));
    }


    public function edit(students $student)
    {
        $levels = levels::pluck('level', 'id');
        $genders = genders::pluck('gender', 'id');
        return view('students.edit',compact('student', 'levels', 'genders'));
    }

    public function update(Request $request, students $student)
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);

        $student->update($request->all());
        return redirect()->route('students.abm')->with('success','Student updated successfully.');
    }


    public function destroy(students $student)
    {
        $student->delete();
        return redirect()->route('students.index')->with('success','Student deleted successfully.');
    }
}
