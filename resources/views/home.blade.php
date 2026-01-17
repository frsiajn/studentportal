    @extends('layout')

    @section('content')
    <div class="container mt-4">
        <h1>Welcome to the Student Portal</h1>
        <p>This system allows you to manage students efficiently — view records, add new students, and more.</p>

        <a href="{{ url('/students') }}" class="btn btn-primary">Go to Student List</a>
    </div>
@endsection