<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    // Show a list of all students
    public function index()
    {
        $students = Student::all();
        return view('students.index', ['students' => $students]);
    }

    // Display a form to register a new student
    public function create()
    {
        return view('students.create');
    }

    // Handle form submission to add a new student
    public function store(Request $request)
    {
        $validated = $request->validate([
            'full_name' => 'required|string|max:100',
            'email' => 'required|email|unique:students,email',
            'program' => 'required|string|max:50',
        ]);

        Student::create($validated);

        return redirect()->route('students.index')->with('success', 'Student has been added successfully!');
    }

    // Show form to edit existing student info
    public function edit($id)
    {
        $student = Student::findOrFail($id);
        return view('students.edit', ['student' => $student]);
    }

    // Update student information
    public function update(Request $request, $id)
    {
        $student = Student::findOrFail($id);

        $validated = $request->validate([
            'full_name' => 'required|string|max:100',
            'email' => 'required|email|unique:students,email,' . $student->id,
            'program' => 'required|string|max:50',
        ]);

        $student->update($validated);

        return redirect()->route('students.index')->with('success', 'Student record updated!');
    }

    // Delete a student from the database
    public function destroy($id)
    {
        $student = Student::findOrFail($id);
        $student->delete();

        return redirect()->route('students.index')->with('success', 'Student removed successfully.');
    }
}
