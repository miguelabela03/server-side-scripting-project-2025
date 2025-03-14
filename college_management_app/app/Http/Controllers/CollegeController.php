<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\College;

class CollegeController extends Controller
{
    // This function will display all the colleges
    public function index() {
        $colleges = College::all(); // Getting all the colleges from the database
        return view('colleges.index', compact('colleges'));
    }

    // This function will create a new college
    public function create() {
        $college = new College();
        return view('colleges.create', compact('college'));
    }

    // This function will validate and store the college form data
    // Validation -> All fields are required
    // Name: checking that the college name is unique, thus removing duplicate college names
    public function store(Request $request) {
        $request->validate([
            'name' => 'required|unique:colleges,name',
            'address' => 'required',
        ]);

        // dd($request->all());

        // Adding all the college details into the database and table
        College::create($request->all());

        // Redirecting the user back to the college list and displaying a success message
        return redirect()->route('colleges.index')->with('message', 'College has been added successfully');
    }

    // This function will display specific college details
    public function show($id) {
        $college = College::find($id);
        return view('colleges.show', compact('college')); // ['college'] => $college
    }

    // This function displays the college edit form for a specific college
    public function edit($id) {
        $college = College::find($id); // Find and store the college with the requested id
        return view('colleges.edit', compact('college'));
    }

    // This function will update the details of a specific college from the edit form
    // The same validation techniques are applied in the below function
    // The id is added to the name validation so that when updating an existing record, the current college id is ignored
    public function update($id, Request $request) {
        $request->validate([
            'name' => 'required|unique:colleges,name,' .$id,
            'address' => 'required',
        ]);

        $college = College::find($id);
        $college->update($request->all()); // Updating the college details

        return redirect()->route('colleges.index')->with('message', 'College has been updated successfully!');
    }
}
