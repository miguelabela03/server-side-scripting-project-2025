<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index() {
        $students = Student::all(); // Getting all the students from the database and storing the data the variable
        return view('students.index', compact('students'));
    }

    public function create() {
        return view('students.create');
    }

    public function show($id) {
        $student = Student::find($id);
        return view('students.show', compact('student'));
    }
}
