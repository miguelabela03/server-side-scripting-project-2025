<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\College;

class CollegeController extends Controller
{
    public function index() {
        $colleges = College::all(); // Getting all the colleges from the database
        return view('colleges.index', compact('colleges'));
    }

    public function create() {
        return view('colleges.create');
    }

    public function show($id) {
        $college = College::find($id);
        return view('colleges.show', compact('college'));
    }
}
