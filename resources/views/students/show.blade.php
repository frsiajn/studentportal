@extends('layout')

@section('title', 'Student Details')

@section('content')
    <div class="card" style="max-width: 500px; margin: 0 auto;">
        <div style="text-align: center; margin-bottom: 20px;">
            <div style="font-size: 48px; margin-bottom: 10px;">👤</div>
            <h3 style="color: #588061;">{{ $student->name }}</h3>
        </div>
        
        <div style="background-color: #FDE9EA; padding: 20px; border-radius: 8px;">
            <p><strong>Course:</strong> {{ $student->course }}</p>
            <p><strong>Year Level:</strong> {{ $student->year_level }}</p>
            <p><strong>Student ID:</strong> #{{ $student->id }}</p>
        </div>
        
        <div class="flex gap-2" style="margin-top: 20px;">
            <x-action-button type="edit" href="{{ url('/students/' . $student->id . '/edit') }}">
                Edit Student
            </x-action-button>
            
            <a href="{{ url('/students') }}" style="background-color: #ccc; color: #333; padding: 6px 12px; border-radius: 4px; text-decoration: none;">← Back</a>
        </div>
    </div>
@endsection