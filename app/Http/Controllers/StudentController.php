<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of all students
     */
    public function index()
    {
        // Get all students from database
        $students = Student::all();
        
        // Send them to the view
        return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new student
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created student in database
     */
    public function store(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:students',
            'course' => 'required|string|max:255',
            'year_level' => 'required|string'
        ]);

        // Create the student
        Student::create($request->all());

        // Go back to list with success message
        return redirect('/students')->with('success', 'Student added successfully!');
    }

    /**
     * Display a single student
     */
    public function show($id)
    {
        $student = Student::findOrFail($id);
        return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing a student
     */
    public function edit($id)
    {
        $student = Student::findOrFail($id);
        return view('students.edit', compact('student'));
    }

    /**
     * Update the student in database
     */
    public function update(Request $request, $id)
    {
        // Validate (ignore current student's email for unique rule)
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:students,email,' . $id,
            'course' => 'required|string|max:255',
            'year_level' => 'required|string'
        ]);

        // Find and update
        $student = Student::findOrFail($id);
        $student->update($request->all());

        return redirect('/students')->with('success', 'Student updated successfully!');
    }

    /**
     * Remove the student from database
     */
    public function destroy($id)
    {
        $student = Student::findOrFail($id);
        $student->delete();

        return redirect('/students')->with('success', 'Student deleted successfully!');
    }
}