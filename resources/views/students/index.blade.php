@extends('layout')

@section('title', 'Student List')

@section('content')
    <div class="justify-between">
        <p class="text-muted">Here are all the students in our school:</p>
        <a href="{{ url('/students/create') }}" class="btn btn-success">+ Add New Student</a>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Course</th>
                <th>Year</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
            <tr>
                <td><strong>{{ $student->name }}</strong></td>
                <td>{{ $student->course }}</td>
                <td>{{ $student->year_level }}</td>
                <td>
                    <div class="flex gap-2">
                        <x-action-button type="view" href="{{ url('/students/' . $student->id . '/show') }}">
                            View
                        </x-action-button>
                        
                        <x-action-button type="edit" href="{{ url('/students/' . $student->id . '/edit') }}">
                            Edit
                        </x-action-button>
                        
                        <form action="{{ url('/students/' . $student->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <x-action-button type="delete" href="#" onclick="event.preventDefault(); if(confirm('Delete this student?')) this.closest('form').submit();">
                                Delete
                            </x-action-button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
            
            @if(count($students) === 0)
            <tr>
                <td colspan="4" style="text-align: center; padding: 40px; color: #666;">
                    No students yet. Click "Add New Student" to get started!
                </td>
            </tr>
            @endif
        </tbody>
    </table>
@endsection