<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\College;
use App\Models\Student;

class StudentController extends Controller
{
    // This function will display all the students
    public function index() {
        // Getting all the college names, ordering them, and adding 'All Colleges' as default
        // pluck() is used to extract specific column values from a collection or query
        $colleges = College::orderby('name')->pluck('name', 'id')->prepend('All Colleges', '');

        // Setting the default sorting (ascending order)
        $sortType = request('sort', 'asc');
        // Getting the current college once filtering the students by college
        $selectedCollege = request('college_id');

        if(empty($selectedCollege)) { // If no college is chosen
            // Getting all the students from the database and sorting the students by name
            $students = Student::orderby('name', $sortType)->get(); 
        } else {
            // If a college is selected, get all the students in that college and also sort accordingly
            $students = Student::where('college_id', $selectedCollege)->orderby('name', $sortType)->get();
        }
        
        // The chosen college to filter by is also being passed so that when the user has filtered by a 
        // specific college and wishes to order the students by name aswell, they are not redirected 
        // to the student index view
        return view('students.index', compact('students', 'colleges', 'sortType', 'selectedCollege'));
    }

    // This function will create a new student
    public function create() {
        $student = new Student();
        $colleges = College::orderby('name')->pluck('name', 'id')->prepend('All Colleges', ''); // This is used to show the college drop-down within the form
        return view('students.create', compact('colleges', 'student'));
    }

    // This function will validate and store the student form data
    // Validation -> All fields are required,
    // Name: only letters and spaces are accepted (in case the name consits of two words or more)
    // Email: the laravel email rule is used but using regex I am checking that;
    //     a) at least one character is before the @ symbol ([^@]+@)
    //     b) at least one letter is after the @ symbol and before a dot ([^@]+\.)
    //     c) at least 2 letters are present after the dot ([a-zA-Z]{2,}$)
    //     d) finally the email is compared with other emails within the table to mitigate duplicate emails
    // Phone: the number 8 ensures that the phone number has exactly 8 digits (it acts as a min and max),
    //        and the 'digits' rule only accepts numbers without a - or +
    // Date of Birth: date is used to check for a valid date,
    //                and 'before:today' is used as  date of birth can only be in the past and not in the future
    // College Id: 'exists' checks that the college_id is present within the colleges tables
    public function store(Request $request) {
        $request->validate([
            'name' => 'required|regex:/^[a-zA-Z ]+$/', 
            'email' => 'required|email|regex:/^[^@]+@[^@]+\.[a-zA-Z]{2,}$/|unique:students,email',
            'phone' => 'required|digits:8',
            'dob' => 'required|date|before:today',
            'college_id' => 'required|exists:colleges,id',
        ]);
    
        // dd($request->all()); // This was done for testing purposes

        // Adding all the details into the database, within the student table
        Student::create($request->all());

        // Redirecting the user back to the student list and displaying a success message
        return redirect()->route('students.index')->with('message', 'Student has been added successfully');
    }    

    // This function will display specific student details
    public function show($id) {
        $student = Student::find($id);
        return view('students.show', compact('student')); // ['student'] => $student
    }

    // This function is used to display the student edit form
    public function edit($id) {
        $student = Student::find($id);
        $colleges = College::orderby('name')->pluck('name', 'id')->prepend('All Colleges', '');
        return view('students.edit', compact('colleges', 'student')); // Note that the order does not matter within the compact() function
    }

    // This function will enable the user to update the student details from the edit form
    // The same validation techniques used within the store function are being used below
    // This time since the email is unique, the id of the student is being added to the validation within the email section 
    // so that when the student details are being updated the current student email is not considered to be checked with for uniqueness
    public function update($id, Request $request) {
        $request->validate([
            'name' => 'required|regex:/^[a-zA-Z ]+$/', 
            'email' => 'required|email|regex:/^[^@]+@[^@]+\.[a-zA-Z]{2,}$/|unique:students,email,'.$id,
            'phone' => 'required|digits:8',
            'dob' => 'required|date|before:today',
            'college_id' => 'required|exists:colleges,id',
        ]);

        $student = Student::find($id); // Getting the specific student that is being updated
        $student->update($request->all()); // Updating the new details

        return redirect()->route('students.index')->with('message', 'Student has been updated successfully!');
    }

    // This function will delete/destroy the contact with the specific id
    public function destroy($id) {
        $student = Student::find($id);
        $student->delete(); // The student will be deleting after the correct student id is found
        return back()->with('message', 'Student has been deleted successfully!');
    }
}
