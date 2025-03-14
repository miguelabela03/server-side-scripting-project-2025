@extends('layouts.main')

@section('content')
    <main class="py-5">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header card-title position-relative">
                            <strong>College Information</strong>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label for="name" class="col-md-3 col-form-label">College Name</label>
                                        <div class="col-md-9">
                                            <p class="form-control-plaintext text-muted">{{ $college->name }}</p>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="address" class="col-md-3 col-form-label">Address</label>
                                        <div class="col-md-9">
                                            <p class="form-control-plaintext text-muted">{{ $college->address }}</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group row mb-0">
                                        <div class="col-md-6">
                                            <a href="{{ route('colleges.edit', $college->id) }}" class="btn btn-outline-primary">Edit</a>
                                        </div>
                                        <div class="col-md-6 text-right">
                                            <a href="{{ route('colleges.index') }}" class="btn btn-outline-secondary">Cancel</a>
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