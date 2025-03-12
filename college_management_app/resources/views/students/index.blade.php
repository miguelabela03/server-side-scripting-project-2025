@extends('layouts.main')

@section('content')
<h1>All Students</h1>
<a href="{{ route('students.create') }}">Add New Student</a> |
<a href="{{ route('students.show', 1) }}">Show a Student</a>
@endsection