<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\College;
use App\Models\Student;

class StudentController extends Controller
{
    public function index() {
        $colleges = College::orderby('name')->pluck('name', 'id'); // Getting all the college names and ordering them
        $students = Student::all(); // Getting all the students from the database and storing the data the variable
        return view('students.index', compact('students', 'colleges'));
    }

    public function create() {
        return view('students.create');
    }

    public function show($id) {
        $student = Student::find($id);
        return view('students.show', compact('student'));
    }
}
