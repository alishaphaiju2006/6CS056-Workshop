
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Course</title>
</head>
<body>
    <h1>Edit Course</h1>

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('courses.update', $course) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="name">Course Name:</label><br>
        <input type="text" id="name" name="name"
               value="{{ old('name', $course->name) }}" required><br><br>

        <label for="description">Description:</label><br>
        <textarea id="description" name="description">{{ old('description', $course->description) }}</textarea><br><br>

        <label for="duration_weeks">Duration (weeks):</label><br>
        <input type="number" id="duration_weeks" name="duration_weeks"
               value="{{ old('duration_weeks', $course->duration_weeks) }}"
               min="1" required><br><br>

        <label for="fee">Fee:</label><br>
        <input type="number" id="fee" name="fee"
               value="{{ old('fee', $course->fee) }}"
               step="0.01" min="0" required><br><br>

        
	<label for="difficulty">Difficulty:</label><br>
	<select id="difficulty" name="difficulty" required>
    		<option value="Easy"
        		{{ old('difficulty', $course->difficulty) == 'Easy' ? 'selected' : '' }}>
        		Easy
    		</option>
    		<option value="Medium"
        		{{ old('difficulty', $course->difficulty) == 'Medium' ? 'selected' : '' }}>
        		Medium
    		</option>
    		<option value="Hard"
        		{{ old('difficulty', $course->difficulty) == 'Hard' ? 'selected' : '' }}>
        		Hard
    		</option>
	</select><br><br>


        <label>
            <input type="checkbox" name="is_active" value="1"
                {{ old('is_active', $course->is_active) ? 'checked' : '' }}>
            Active course
        </label><br><br>

        <button type="submit">Update Course</button>
    </form>

    <p><a href="{{ route('courses.index') }}">Back to Courses</a></p>
</body>
</html>
