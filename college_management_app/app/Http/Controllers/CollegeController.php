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
        return view('colleges.create');
    }

    // This function will validate and store the college form data
    // Validation -> All fields are required
    // Name: checking that the college name is unique, thus removing duplicate college names
    public function store(Request $request) {
        $request->validate([
            'name' => 'required|unique:colleges,name',
            'address' => 'required',
        ]);

        dd($request->all());
    }

    // This function will display specific college details
    public function show($id) {
        $college = College::find($id);
        return view('colleges.show', compact('college'));
    }
}
