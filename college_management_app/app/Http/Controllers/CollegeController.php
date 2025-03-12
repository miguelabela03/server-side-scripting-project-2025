<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\College;

class CollegeController extends Controller
{
    public function index() {
        return view('colleges.index');
    }

    public function create() {
        return view('colleges.create');
    }

    public function show($id) {
        $college = College::find($id);
        return view('collesge.show', compact('college'));
    }
}
