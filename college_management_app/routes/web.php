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

Route::get('/', function () {
    return view('welcome');
});

// Note: The '.' indicates that the blade.php view files are within a sub-folder

// ------------------------------- College Named Routes -------------------------------
// This route will show the user a list of all the colleges
Route::get('/colleges', [CollegeController::class, 'index'])->name('colleges.index');

// This route will direct the user to create a new college
Route::get('/colleges/create', [CollegeController::class, 'create'])->name('colleges.create');

// This route will store the details of a new college
Route::post('/colleges', [CollegeController::class, 'store'])->name('colleges.store');

// This route that will enable the user to view the details of a specific college
Route::get('/colleges/{id}', [CollegeController::class, 'show'])->name('colleges.show');

// ------------------------------- Student Named Routes -------------------------------
// This route will show the user a list of all the students
Route::get('/students', [StudentController::class, 'index'])->name('students.index');

// This route will direct the user to create a new student
Route::get('/students/create', [StudentController::class, 'create'])->name('students.create');

// This route will store the details of a new student
Route::post('/students', [StudentController::class, 'store'])->name('students.store');

// This route will enable the user view the details of a specific student
Route::get('/students/{id}', [StudentController::class, 'show'])->name('students.show');
