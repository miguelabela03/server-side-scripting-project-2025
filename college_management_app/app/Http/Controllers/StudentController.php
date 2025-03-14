<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\College;
use App\Models\Student;

class StudentController extends Controller
{
    // This function will display all the students
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

    // This function will create a new student
    public function create() {
        $colleges = College::orderby('name')->pluck('name', 'id')->prepend('All Colleges', ''); // This is used to show the college drop-down within the form
        return view('students.create', compact('colleges'));
    }

    // This function will validate and store the student form data
    // Validation -> All fields are required,
    // Name: only letters and spaces are accepted (in case the name consits of two words or more)
    // Email: the laravel email rule is used but using regex I am checking that;
    //     a) at least one character is before the @ symbol ([^@]+@)
    //     b) at least one letter is after the @ symbol and before a dot ([^@]+\.)
    //     c) at least 2 letters are present after the dot ([a-zA-Z]{2,}$)
    // Phone: the number 8 ensures that the phone number has exactly 8 digits (it acts as a min and max),
    //        and the 'digits' rule only accepts numbers without a - or +
    // Date of Birth: date is used to check for a valid date,
    //                and 'before:today' is used as  date of birth can only be in the past and not in the future
    // College Id: 'exists' checks that the college_id is present within the colleges tables
    public function store(Request $request) {
        $request->validate([
            'name' => 'required|regex:/^[a-zA-Z ]+$/', 
            'email' => 'required|email|regex:/^[^@]+@[^@]+\.[a-zA-Z]{2,}$/',
            'phone' => 'required|digits:8',
            'dob' => 'required|date|before:today',
            'college_id' => 'required|exists:colleges,id',
        ]);
    
        dd($request->all());
    }    

    // This function will display specific student details
    public function show($id) {
        $student = Student::find($id);
        return view('students.show', compact('student'));
    }
}
