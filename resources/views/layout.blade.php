<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Portal</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="text-center mt-3">
        <h2>Student Portal</h2>
    </div>

    <div class="d-flex justify-content-center mb-4">
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/') }}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/students') }}">Students</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/courses') }}">Courses</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/about') }}">About</a>
            </li>
        </ul>
    </div>
    
    <div class="container mt-4">
        @yield('content')
    </div>
</body>
</html>