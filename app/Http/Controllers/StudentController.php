<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {


        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:students',
            'phone' => 'required|numeric',
            'dob' => 'required',
            'ic_number' => 'required|numeric'
        ]);


        Student::create($request->all());

        return redirect()->route('students.index')
            ->with('success', 'Student created successfully.');
    }

    public function edit($id)
    {
        $student = Student::find($id);
        return view('students.edit', compact('student'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:students,email,'.$id,
            'phone' => 'required|numeric',
            'dob' => 'required',
            'ic_number' => 'required|numeric'
        ]);

        $student = Student::find($id);
        $student->update($request->all());

        return redirect()->route('students.index')
            ->with('success', 'Student updated successfully');
    }

    public function destroy($id)
    {
        Student::destroy($id);

        return redirect()->route('students.index')
            ->with('success', 'Student deleted successfully');
    }
}
