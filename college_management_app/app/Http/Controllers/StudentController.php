<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index() {
        return view('students.index');
    }

    public function create() {
        return view('students.create');
    }

    public function show($id) {
        $student = Student::find($id);
        return view('students.show', compact('student'));
    }
}
