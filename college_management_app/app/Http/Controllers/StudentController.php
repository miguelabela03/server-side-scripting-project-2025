<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\College;
use App\Models\Student;

class StudentController extends Controller
{
    public function index() {
        $colleges = College::orderby('name')->pluck('name', 'id')->prepend('All Colleges', ''); // Getting all the college names, ordering them, and adding 'All Colleges' as default

        if(request('college_id') == null) { // Null refers to when no option is selected
            // Getting all the students from the database and storing the data the variable
            $students = Student::all(); 
        } else {
            // If a college is selected, get all the students in that college
            $students = Student::where('college_id', request('college_id'))->get();
        }
        
        return view('students.index', compact('students', 'colleges'));
    }

    public function create() {
        $colleges = College::orderby('name')->pluck('name', 'id')->prepend('All Colleges', ''); // This is used to show the college drop-down within the form
        return view('students.create', compact('colleges'));
    }

    public function show($id) {
        $student = Student::find($id);
        return view('students.show', compact('student'));
    }
}
