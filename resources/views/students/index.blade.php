@extends('layout')

@section('title', 'Student List')

@section('content')
    <div style="margin-bottom: 20px; display: flex; justify-content: space-between; align-items: center;">
        <p>Here are all our students:</p>
        <a href="{{ url('/students/create') }}" style="background-color: #588061; color: white; padding: 10px 20px; text-decoration: none; border-radius: 4px;">+ Add New Student</a>
    </div>

    @if(session('success'))
        <div style="background-color: #869F77; color: white; padding: 12px; border-radius: 4px; margin-bottom: 20px;">
            {{ session('success') }}
        </div>
    @endif

    <table style="width: 100%; background-color: white; border-collapse: collapse;">
        <thead>
            <tr style="background-color: #588061; color: white;">
                <th style="padding: 12px; text-align: left;">Name</th>
                <th style="padding: 12px; text-align: left;">Email</th>
                <th style="padding: 12px; text-align: left;">Course</th>
                <th style="padding: 12px; text-align: left;">Year</th>
                <th style="padding: 12px; text-align: left;">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
            <tr style="border-bottom: 1px solid #FDE9EA;">
                <td style="padding: 12px;">{{ $student->name }}</td>
                <td style="padding: 12px;">{{ $student->email }}</td>
                <td style="padding: 12px;">{{ $student->course }}</td>
                <td style="padding: 12px;">{{ $student->year_level }}</td>
                <td style="padding: 12px;">
                    <a href="{{ url('/students/' . $student->id) }}" style="background-color: #588061; color: white; padding: 5px 10px; text-decoration: none; border-radius: 3px;">View</a>
                    <a href="{{ url('/students/' . $student->id . '/edit') }}" style="background-color: #E7B5AC; color: #333; padding: 5px 10px; text-decoration: none; border-radius: 3px;">Edit</a>
                    <form action="{{ url('/students/' . $student->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Delete this student?')" style="background-color: #dc3545; color: white; padding: 5px 10px; border: none; border-radius: 3px; cursor: pointer;">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection