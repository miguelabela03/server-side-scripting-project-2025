<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Note: The '.' indicates that the blade.php view files are within a sub-folder

// ------------------------------- College Named Routes -------------------------------
// This route will show the user a list of all the colleges
Route::get('/colleges', function() {
    return view('colleges.index');
})->name('colleges.index');

// This route will direct the user to create a new college
Route::get('/colleges/create', function() {
    return view('colleges.create');
})->name('colleges.create');

// This route that will enable the user to view a specific college
Route::get('/colleges/{id}', function($id) {
    $college = App\Models\College::find($id);
    return view('colleges.show', compact('college'));
})->name('colleges.show');

// ------------------------------- Student Named Routes -------------------------------
// This route will show the user a list of all the students
Route::get('/students', function() {
    return view('students.index'); 
})->name('students.index');

// This route will direct the user to create a new student
Route::get('/students/create', function() {
    return view('students.create');
})->name('students.create');

// This route will enable the user view a specific student
Route::get('/students/{id}', function($id) {
    $student = App\Models\Student::find($id);
    return view('students.show', compact('student'));
})->name('students.show');
