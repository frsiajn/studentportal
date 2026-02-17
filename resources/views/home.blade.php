@extends('layout')

@section('title', 'Home')

@section('content')
    <div class="card" style="text-align: center;">
        <h2 style="color: #588061; margin-bottom: 15px;">Welcome to Student Portal!</h2>
        <p style="margin-bottom: 20px;">This is a simple app to help you manage student records.</p>
        
        <div style="display: flex; justify-content: center; gap: 20px; margin-top: 30px;">
            <a href="{{ url('/students') }}" style="background-color: #588061; color: white; padding: 12px 30px; border-radius: 4px; text-decoration: none;">View Students</a>
            <a href="{{ url('/students/create') }}" style="background-color: #E7B5AC; color: #333; padding: 12px 30px; border-radius: 4px; text-decoration: none;">Add Student</a>
        </div>
    </div>
    </div>
@endsection