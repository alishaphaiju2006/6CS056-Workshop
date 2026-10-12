
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Student Management')</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 1000px; margin: 30px auto; padding: 0 20px; }
        nav { margin-bottom: 25px; }
        nav a { margin-right: 15px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 10px; text-align: left; }
        input, textarea { display: block; width: 100%; max-width: 500px; padding: 8px; margin: 6px 0 15px; box-sizing: border-box; }
        button, .button { padding: 8px 12px; cursor: pointer; }
        .success { background: #e4f7e8; padding: 10px; margin: 10px 0; }
        .error { color: #b00020; }
    </style>
</head>
<body>
    <nav>
        <a href="{{ route('students.index') }}">Students</a>
    </nav>

    @if (session('success'))
        <p class="success">{{ session('success') }}</p>
    @endif

    @yield('content')
</body>
</html>
