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

// ------------------------------- College Named Routes -------------------------------
// This route will show the user a list of all the colleges
Route::get('/college', function() {
    return "<h1>All Colleges</h1>";
})->name('college.index');

// This route will direct the user to create a new college
Route::get('/college/create', function() {
    return "<h1>Add a new College</h1>";
})->name('college.create');

// This route that will enable the user to update specific college details
Route::get('/college/{id}/edit', function($id) {
    return App\Models\College::find($id);
})->name('college.edit');

// ------------------------------- Student Named Routes -------------------------------
// This route will show the user a list of all the students
Route::get('/students', function() {
    return "<h1>All Students</h1>";
})->name('students.index');

// This route will direct the user to create a new student
Route::get('/students/create', function() {
    return "<h1>Add a new Student</h1>";
})->name('students.create');

// This route will enable the user to udpate the deatils of a specific student
Route::get('/students/{id}/edit', function($id) {
    return App\Models\Student::find($id);
})->name('students.edit');

// This route will enable the user to delete a specific student
Route::get('/students/{id}', function($id) {
    return App\Models\Student::find($id);
})->name('students.destroy');
