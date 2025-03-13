@extends('layouts.main')

@section('content')
    <main class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-title">
                            <div class="d-flex align-items-center justify-content-between">
                                <h2 class="mb-0">Colleges</h2>
                                <a href={{ route('colleges.create') }} id="addNew" class="btn btn-outline-warning">
                                    <ion-icon name="add-circle-outline"></ion-icon> Add New College
                                </a>  
                            </div>
                        </div>
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">College Name</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>College 1</td>
                                    <td>Address 1</td>
                                    <td width="150">
                                        <a href="showCollege.html" class="btn btn-sm btn-outline-info btn-square" title="Show">
                                            <ion-icon class="view" name="eye-outline"></ion-icon>
                                        </a>
                                        <a href="collegeForm.html" class="btn btn-sm btn-outline-secondary btn-square" title="Edit">
                                            <ion-icon class="edit" name="create-outline"></ion-icon>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>College 2</td>
                                    <td>Address 2</td>
                                    <td width="150">
                                        <a href="showCollege.html" class="btn btn-sm btn-outline-info btn-square" title="Show">
                                            <ion-icon class="view" name="eye-outline"></ion-icon>
                                        </a>
                                        <a href="collegeForm.html" class="btn btn-sm btn-outline-secondary btn-square" title="Edit">
                                            <ion-icon class="edit" name="create-outline"></ion-icon>
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