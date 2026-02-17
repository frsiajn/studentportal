<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Student Portal')</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Open Sans', Arial, sans-serif;
            background-color: #FDE9EA;
            color: #333;
            line-height: 1.6;
        }
        
        .header {
            background-color: #588061;
            color: white;
            text-align: center;
            padding: 20px 0;
            margin-bottom: 30px;
            border-bottom: 5px solid #E7B5AC;
        }
        
        .header h1 {
            font-size: 32px;
            font-weight: 700;
        }
        
        .nav-bar {
            background-color: white;
            padding: 15px 0;
            margin-bottom: 30px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        
        .nav-menu {
            list-style: none;
            display: flex;
            justify-content: center;
            gap: 30px;
        }
        
        .nav-menu a {
            text-decoration: none;
            color: #588061;
            font-weight: 600;
            padding: 8px 20px;
            border-radius: 5px;
            transition: all 0.3s;
        }
        
        .nav-menu a:hover {
            background-color: #F9E0DB;
            color: #588061;
        }
        
        .nav-menu a.active {
            background-color: #E7B5AC;
            color: white;
        }
        
        .page-title {
            text-align: center;
            margin-bottom: 30px;
            color: #588061;
            font-size: 28px;
            font-weight: 700;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        .footer {
            background-color: #869F77;
            color: white;
            text-align: center;
            padding: 20px 0;
            margin-top: 50px;
            font-size: 14px;
        }
        
        .btn {
            display: inline-block;
            padding: 8px 16px;
            border-radius: 4px;
            text-decoration: none;
            font-weight: 600;
            font-size: 14px;
            border: none;
            cursor: pointer;
        }
        
        .btn-success {
            background-color: #588061;
            color: white;
        }
        
        .btn-success:hover {
            background-color: #3f5f46;
        }
        
        .table {
            width: 100%;
            background-color: white;
            border-collapse: collapse;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            border-radius: 8px;
            overflow: hidden;
        }
        
        .table th {
            background-color: #588061;
            color: white;
            padding: 12px;
            text-align: left;
        }
        
        .table td {
            padding: 12px;
            border-bottom: 1px solid #FDE9EA;
        }
        
        .table tr:hover {
            background-color: #F9E0DB;
        }
        
        .card {
            background-color: white;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            margin-bottom: 20px;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: 600;
            color: #588061;
        }
        
        .form-control {
            width: 100%;
            padding: 10px;
            border: 2px solid #FDE9EA;
            border-radius: 4px;
            font-size: 16px;
        }
        
        .form-control:focus {
            border-color: #E7B5AC;
            outline: none;
        }
        
        .alert {
            padding: 12px 20px;
            border-radius: 4px;
            margin-bottom: 20px;
        }
        
        .alert-success {
            background-color: #869F77;
            color: white;
        }
        
        .text-muted {
            color: #666;
            margin-bottom: 20px;
        }
        
        .mb-3 {
            margin-bottom: 15px;
        }
        
        .mt-3 {
            margin-top: 15px;
        }
        
        .text-center {
            text-align: center;
        }
        
        .flex {
            display: flex;
            gap: 10px;
            align-items: center;
        }
        
        .gap-2 {
            gap: 10px;
        }
        
        .justify-between {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="container">
            <h1>🎓 My Student Portal</h1>
            <p style="font-size: 14px; opacity: 0.9;">A simple app to manage students</p>
        </div>
    </div>

    <div class="nav-bar">
        <div class="container">
            <ul class="nav-menu">
                <li><a href="{{ url('/') }}" class="{{ request()->is('/') ? 'active' : '' }}">Home</a></li>
                <li><a href="{{ url('/students') }}" class="{{ request()->is('students*') ? 'active' : '' }}">Students</a></li>
                <li><a href="{{ url('/courses') }}" class="{{ request()->is('courses*') ? 'active' : '' }}">Courses</a></li>
                <li><a href="{{ url('/about') }}" class="{{ request()->is('about*') ? 'active' : '' }}">About</a></li>
            </ul>
        </div>
    </div>

    <div class="container">
        <h2 class="page-title">@yield('title')</h2>
        
        <main>
            @yield('content')
        </main>
    </div>

    <div class="footer">
        <div class="container">
            <p>&copy; {{ date('Y') }} My Student Portal. Made with Laravel.</p>
        </div>
    </div>
</body>
</html>