@extends('layouts.main')

@section('content')
    <main class="py-5">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header card-title position-relative">
                            <strong>Student Details</strong>
                            <div class="position-absolute top-right">
                                <a href="#" class="btn btn-danger">Delete</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label for="name" class="col-md-3 col-form-label">Student Name</label>
                                        <div class="col-md-9">
                                            <p class="form-control-plaintext text-muted">{{ $student->name }}</p>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="email" class="col-md-3 col-form-label">Email</label>
                                        <div class="col-md-9">
                                            <p class="form-control-plaintext text-muted">{{ $student->email }}</p>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="phone" class="col-md-3 col-form-label">Phone</label>
                                        <div class="col-md-9">
                                            <p class="form-control-plaintext text-muted">{{ $student->phone }}</p>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="dob" class="col-md-3 col-form-label">Date of Birth</label>
                                        <div class="col-md-9">
                                            <p class="form-control-plaintext text-muted">{{ $student->dob }}</p>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="college_id" class="col-md-3 col-form-label">College Name</label>
                                        <div class="col-md-9">
                                            <p class="form-control-plaintext text-muted">{{ $student->college->name }}</p>
                                        </div>
                                    </div>

                                    <hr>
                                    <div class="form-group row mb-0">
                                        <div class="col-md-6">
                                            <a href="#" class="btn btn-outline-primary">Edit</a>
                                        </div>
                                        <div class="col-md-6 text-right">
                                            <a href="{{ route('students.index') }}" class="btn btn-outline-secondary">Cancel</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection