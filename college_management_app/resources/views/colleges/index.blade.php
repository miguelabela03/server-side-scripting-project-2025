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
                                @if ($colleges->count() > 0)
                                    @foreach ($colleges as $index => $college)
                                        <tr>
                                            <th scope="row">{{ $index + 1 }}</th>
                                            <td>{{ $college->name }}</td>
                                            <td>{{ $college->address }}</td>
                                            <td width="150">
                                                <a href="{{ route('colleges.show', $college->id) }}" class="btn btn-sm btn-outline-info btn-square" title="Show">
                                                    <ion-icon class="view" name="eye-outline"></ion-icon>
                                                </a>
                                                <a href="collegeForm.html" class="btn btn-sm btn-outline-secondary btn-square" title="Edit">
                                                    <ion-icon class="edit" name="create-outline"></ion-icon>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>


                    </div>
                </div>
            </div>
        </div>
        </div>
    </main>
@endsection