
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses</title>
</head>
<body>
    <h1>All Courses</h1>

    <a href="{{ route('courses.create') }}">Add New Course</a>

    @if (session('success'))
        <p style="color: green;">
            {{ session('success') }}
        </p>
    @endif

    @if ($courses->isEmpty())
        <p>No courses available yet.</p>
    @else
        <table border="1" cellpadding="10">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Duration (weeks)</th>
                    <th>Fee</th>
                    <th>Difficulty</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($courses as $course)
                    <tr>
                        <td>{{ $course->name }}</td>
                        <td>{{ $course->description }}</td>
                        <td>{{ $course->duration_weeks }}</td>
                        <td>{{ $course->fee }}</td>
                        <td>{{ $course->difficulty }}</td>
                        <td>
                            <a href="{{ route('courses.show', $course) }}">View</a>
                            |
                            <a href="{{ route('courses.edit', $course) }}">Edit</a>
                            |
                            <form action="{{ route('courses.destroy', $course) }}"
                                  method="POST"
                                  style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                        onclick="return confirm('Delete this course?')">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</body>
</html>
