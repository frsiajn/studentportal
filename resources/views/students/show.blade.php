@extends('layout')

@section('content')
    <div class="container mt-4">
        <h1>Student Details</h1>
        <p>Here are the details for the selected student:</p>

        <table class="table table-bordered">
            <tr>
                <th>Name</th>
                <td>{{ $student->name }}</td>
            </tr>
            <tr>
                <th>Course</th>
                <td>{{ $student->course }}</td>
            </tr>
            <tr>
                <th>Year Level</th>
                <td>{{ $student->year_level }}</td>
            </tr>
        </table>

        <a href="{{ url('/students') }}" class="btn btn-secondary">Back to Student List</a>
    </div>
@endsection