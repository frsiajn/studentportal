@extends('layout')

@section('title', 'Add New Student')

@section('content')
    <div class="card" style="max-width: 500px; margin: 0 auto;">
        <form action="{{ url('/students') }}" method="POST">
            @csrf
            
            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter student name" required>
            </div>
            
            <div class="form-group">
                <label for="course">Course</label>
                <input type="text" class="form-control" id="course" name="course" placeholder="e.g., Computer Science" required>
            </div>
            
            <div class="form-group">
                <label for="year_level">Year Level</label>
                <select class="form-control" id="year_level" name="year_level" required>
                    <option value="">Select year</option>
                    <option value="1st Year">1st Year</option>
                    <option value="2nd Year">2nd Year</option>
                    <option value="3rd Year">3rd Year</option>
                    <option value="4th Year">4th Year</option>
                </select>
            </div>
            
            <div class="flex gap-2">
                <button type="submit" class="btn btn-success">Save Student</button>
                <a href="{{ url('/students') }}" style="background-color: #ccc; color: #333; padding: 8px 16px; border-radius: 4px; text-decoration: none;">Cancel</a>
            </div>
        </form>
    </div>
@endsection