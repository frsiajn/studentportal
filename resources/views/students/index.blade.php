@extends('layout')

@section('content')
    <div class="container mt-4">
        <h1>Student List</h1>
        <p>Below is a list of all enrolled students:</p>

        <!-- Link to add new student -->
        <a href="{{ url('/students/create') }}" class="btn btn-success mb-3">Add New Student</a>
        
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>Name</th>
                    <th>Course</th>
                    <th>Year Level</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($students as $student)
                <tr>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->course }}</td>
                    <td>{{ $student->year_level }}</td>
                    <td>
                        <a href="{{ url('/students/' . $student->id . '/edit') }}" class="btn btn-primary btn-sm">Edit</a>
                        <form action="{{ url('/students/' . $student->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection