
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Course</title>
</head>
<body>
    <h1>Add New Course</h1>

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('courses.store') }}" method="POST">
        @csrf

        <label for="name">Course Name:</label><br>
        <input type="text" id="name" name="name"
               value="{{ old('name') }}" required><br><br>

        <label for="description">Description:</label><br>
        <textarea id="description" name="description">{{ old('description') }}</textarea><br><br>

        <label for="duration_weeks">Duration (weeks):</label><br>
        <input type="number" id="duration_weeks" name="duration_weeks"
               value="{{ old('duration_weeks') }}" min="1" required><br><br>

        <label for="fee">Fee:</label><br>
        <input type="number" id="fee" name="fee" step="0.01"
               value="{{ old('fee') }}" min="0" required><br><br>

        
	<label for="difficulty">Difficulty:</label><br>
	<select id="difficulty" name="difficulty" required>
    		<option value="">Select difficulty</option>
    		<option value="Easy">Easy</option>
    		<option value="Medium">Medium</option>
    		<option value="Hard">Hard</option>
	</select><br><br>


        <label>
            <input type="checkbox" name="is_active" value="1" checked>
            Active course
        </label><br><br>

        <button type="submit">Save Course</button>
    </form>

    <p><a href="{{ route('courses.index') }}">Back to Courses</a></p>
</body>
</html>
