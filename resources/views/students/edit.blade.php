@extends('layout')

@section('title', 'Edit Student')

@section('content')
    <div class="card" style="max-width: 500px; margin: 0 auto;">
        <form action="{{ url('/students/' . $student->id) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $student->name }}" required>
            </div>
            
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $student->email }}" required>
            </div>
            
            <div class="form-group">
                <label for="course">Course</label>
                <input type="text" class="form-control" id="course" name="course" value="{{ $student->course }}" required>
            </div>
            
            <div class="form-group">
                <label for="year_level">Year Level</label>
                <select class="form-control" id="year_level" name="year_level" required>
                    <option value="1st Year" {{ $student->year_level == '1st Year' ? 'selected' : '' }}>1st Year</option>
                    <option value="2nd Year" {{ $student->year_level == '2nd Year' ? 'selected' : '' }}>2nd Year</option>
                    <option value="3rd Year" {{ $student->year_level == '3rd Year' ? 'selected' : '' }}>3rd Year</option>
                    <option value="4th Year" {{ $student->year_level == '4th Year' ? 'selected' : '' }}>4th Year</option>
                </select>
            </div>
            
            <div class="flex gap-2">
                <button type="submit" class="btn btn-success">Update Student</button>
                <a href="{{ url('/students') }}" style="background-color: #ccc; color: #333; padding: 8px 16px; border-radius: 4px; text-decoration: none;">Cancel</a>
            </div>
        </form>
    </div>
@endsection