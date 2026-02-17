@extends('layout')

@section('title', 'Add New Student')

@section('content')
    <div style="max-width: 500px; margin: 0 auto; background-color: white; padding: 30px; border-radius: 8px;">
        <form action="{{ url('/students') }}" method="POST">
            @csrf
            
            <div style="margin-bottom: 20px;">
                <label style="display: block; margin-bottom: 5px; font-weight: bold;">Full Name</label>
                <input type="text" name="name" required style="width: 100%; padding: 10px; border: 2px solid #FDE9EA; border-radius: 4px;">
            </div>
            
            <div style="margin-bottom: 20px;">
                <label style="display: block; margin-bottom: 5px; font-weight: bold;">Email</label>
                <input type="email" name="email" required style="width: 100%; padding: 10px; border: 2px solid #FDE9EA; border-radius: 4px;">
            </div>
            
            <div style="margin-bottom: 20px;">
                <label style="display: block; margin-bottom: 5px; font-weight: bold;">Course</label>
                <input type="text" name="course" required style="width: 100%; padding: 10px; border: 2px solid #FDE9EA; border-radius: 4px;">
            </div>
            
            <div style="margin-bottom: 20px;">
                <label style="display: block; margin-bottom: 5px; font-weight: bold;">Year Level</label>
                <select name="year_level" required style="width: 100%; padding: 10px; border: 2px solid #FDE9EA; border-radius: 4px;">
                    <option value="">Select Year</option>
                    <option value="1st Year">1st Year</option>
                    <option value="2nd Year">2nd Year</option>
                    <option value="3rd Year">3rd Year</option>
                    <option value="4th Year">4th Year</option>
                </select>
            </div>
            
            <div style="display: flex; gap: 10px;">
                <button type="submit" style="background-color: #588061; color: white; padding: 12px 25px; border: none; border-radius: 4px; cursor: pointer;">Save Student</button>
                <a href="{{ url('/students') }}" style="background-color: #ccc; color: #333; padding: 12px 25px; text-decoration: none; border-radius: 4px;">Cancel</a>
            </div>
        </form>
    </div>
@endsection