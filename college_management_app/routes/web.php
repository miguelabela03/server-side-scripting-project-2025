<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CollegeController;
use App\Http\Controllers\StudentController;

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

// This route will direct the user to the students index view once the web application is loaded/opened for the first time
Route::get('/', [StudentController::class, 'index'])->name('students.index');

// Note: The '.' indicates that the blade.php view files are within a sub-folder

// ------------------------------- College Named Routes -------------------------------
// This route will show the user a list of all the colleges
Route::get('/colleges', [CollegeController::class, 'index'])->name('colleges.index');

// This route will direct the user to create a new college
Route::get('/colleges/create', [CollegeController::class, 'create'])->name('colleges.create');

// This route will store the details of a new college
Route::post('/colleges', [CollegeController::class, 'store'])->name('colleges.store');

// This route will enable the user to view the details of a specific college
Route::get('/colleges/{id}', [CollegeController::class, 'show'])->name('colleges.show');

// This route will show the college edit form
Route::get('/colleges/{id}/edit', [CollegeController::class, 'edit'])->name('colleges.edit');

// This route will process the college update values
Route::put('/colleges/{id}', [CollegeController::class, 'update'])->name('colleges.update');

// ------------------------------- Student Named Routes -------------------------------
// This route will show the user a list of all the students
Route::get('/students', [StudentController::class, 'index'])->name('students.index');

// This route will direct the user to create a new student
Route::get('/students/create', [StudentController::class, 'create'])->name('students.create');

// This route will store the details of a new student
Route::post('/students', [StudentController::class, 'store'])->name('students.store');

// This route will enable the user view the details of a specific student
Route::get('/students/{id}', [StudentController::class, 'show'])->name('students.show');

// This route will make the edit student form visable for the user
Route::get('/students/{id}/edit', [StudentController::class, 'edit'])->name('students.edit');

// This route will process the update values of the student
Route::put('/students/{id}', [StudentController::class, 'update'])->name('students.update');

// This route will enable the user to delete a particular student
Route::delete('/students/{id}', [StudentController::class, 'destroy'])->name('students.destroy');