@extends('layouts.main')

@section('content')
    <main class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-title">
                            <div class="d-flex align-items-center justify-content-between">
                                <h2 class="mb-0">Students</h2>
                                <a href={{ route('students.create') }} id="addNew" class="btn btn-outline-warning">
                                    <ion-icon name="add-circle-outline"></ion-icon> Add New Student
                                </a>                                                                
                            </div>
                        </div>
                        @include('students._filter')
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Student Name 
                                        <button id="toggleDirection" class="btn btn-link p-0 ml-2">
                                            <ion-icon id="directionIcon" name="chevron-down-outline"></ion-icon>
                                        </button>
                                    </th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Date of Birth</th>
                                    <th scope="col">College Name</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Tom</td>
                                    <td>tom@gmail.com</td>
                                    <td>12345678</td>
                                    <td>01/01/2001</td>
                                    <td>College 1</td>
                                    <td width="150">
                                        <a href="showStudent.html" class="btn btn-sm btn-outline-info btn-square" title="Show">
                                            <ion-icon class="view" name="eye-outline"></ion-icon>
                                        </a>
                                        <a href="studentForm.html" class="btn btn-sm btn-outline-secondary btn-square" title="Edit">
                                            <ion-icon class="edit" name="create-outline"></ion-icon>
                                        </a>
                                        <a href="#" class="btn btn-sm btn-outline-danger btn-square" title="Delete" onclick="confirm('Are you sure?')">
                                            <ion-icon class="delete" name="trash-outline"></ion-icon>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jim</td>
                                    <td>jim@gmail.com</td>
                                    <td>87654321</td>
                                    <td>02/02/2002</td>
                                    <td>College 2</td>
                                    <td width="150">
                                        <a href="showStudent.html" class="btn btn-sm btn-outline-info btn-square" title="Show">
                                            <ion-icon class="view" name="eye-outline"></ion-icon>
                                        </a>
                                        <a href="studentForm.html" class="btn btn-sm btn-outline-secondary btn-square" title="Edit">
                                            <ion-icon class="edit" name="create-outline"></ion-icon>
                                        </a>
                                        <a href="#" class="btn btn-sm btn-outline-danger btn-square" title="Delete" onclick="confirm('Are you sure?')">
                                            <ion-icon class="delete" name="trash-outline"></ion-icon>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </main>
@endsection