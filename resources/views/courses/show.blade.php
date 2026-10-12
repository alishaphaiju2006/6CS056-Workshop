
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Details</title>
</head>
<body>
    <h1>Course Details</h1>

    <p><strong>Name:</strong> {{ $course->name }}</p>

    <p><strong>Description:</strong>
        {{ $course->description ?? 'No description provided' }}
    </p>

    <p><strong>Duration:</strong>
        {{ $course->duration_weeks }} weeks
    </p>

    <p><strong>Fee:</strong> {{ $course->fee }}</p>

    <p><strong>Difficulty:</strong> {{ $course->difficulty }}</p>

    <p><strong>Status:</strong>
        {{ $course->is_active ? 'Active' : 'Inactive' }}
    </p>

    <p>
        <a href="{{ route('courses.index') }}">Back to Courses</a>
        |
        <a href="{{ route('courses.edit', $course) }}">Edit Course</a>
    </p>
</body>
</html>
