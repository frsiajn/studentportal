@extends('layout')

@section('content')
<div class="container mt-4">
    <h1>Edit Student</h1>

    <form action="#" method="POST">
        <!-- Name -->
        <div class="form-group mb-3">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" class="form-control">
        </div>

        <!-- Email -->
        <div class="form-group mb-3">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" class="form-control">
        </div>

        <!-- Course -->
        <div class="form-group mb-3">
            <label for="course">Course</label>
            <input type="text" id="course" name="course" class="form-control">
        </div>

        <!-- Year Level -->
        <div class="form-group mb-3">
            <label for="year_level">Year Level</label>
            <select id="year_level" name="year_level" class="form-control">
                <option>1st Year</option>
                <option>2nd Year</option>
                <option>3rd Year</option>
                <option>4th Year</option>
            </select>
        </div>

        <!-- Buttons -->
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ url('/students') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection