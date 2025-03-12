@extends('layouts.main')

@section('content')
    <main class="py-5">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header card-title position-relative">
                            <strong>Add New Student</strong>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label for="name" class="col-md-3 col-form-label">Student Name</label>
                                        <div class="col-md-9">
                                            <input type="text" name="name" id="name" class="form-control is-invalid">
                                            <div class="invalid-feedback">
                                                Please choose a student name.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="email" class="col-md-3 col-form-label">Email</label>
                                        <div class="col-md-9">
                                            <input type="text" name="email" id="email" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="phone" class="col-md-3 col-form-label">Phone</label>
                                        <div class="col-md-9">
                                            <input type="text" name="phone" id="phone" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="dob" class="col-md-3 col-form-label">Date of Birth</label>
                                        <div class="col-md-9">
                                            <input type="date" name="dob" id="dob" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="college_id" class="col-md-3 col-form-label">College Name</label>
                                        <div class="col-md-9">
                                            <select name="college_id" id="college_id" class="form-control">
                                                <option value="">Select College</option>
                                                <option value="1">College 1</option>
                                                <option value="2">College 2</option>
                                            </select>
                                        </div>
                                    </div>

                                    <hr>
                                    <div class="form-group row mb-0">
                                        <div class="col-md-6">
                                            <button type="submit" class="btn btn-success">Save</button>
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