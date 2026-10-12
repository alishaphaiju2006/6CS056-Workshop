```php
@extends('layouts.app')

@section('content')
    <h1>Edit Student</h1>

    <form action="{{ route('students.update', $student->id) }}" method="POST">
        @csrf
        @method('PUT')

        <p>
            <label>Name:</label>
            <input type="text" name="name" value="{{ old('name', $student->name) }}" required>
            @error('name') <span>{{ $message }}</span> @enderror
        </p>

        <p>
            <label>Email:</label>
            <input type="email" name="email" value="{{ old('email', $student->email) }}" required>
            @error('email') <span>{{ $message }}</span> @enderror
        </p>

        <p>
            <label>Phone:</label>
            <input type="text" name="phone" value="{{ old('phone', $student->phone) }}" required>
            @error('phone') <span>{{ $message }}</span> @enderror
        </p>

        <p>
            <label>Address:</label>
            <textarea name="address">{{ old('address', $student->address) }}</textarea>
            @error('address') <span>{{ $message }}</span> @enderror
        </p>

        <p>
            <label>Date of Birth:</label>
            <input type="date" name="date_of_birth" value="{{ old('date_of_birth', $student->date_of_birth) }}">
            @error('date_of_birth') <span>{{ $message }}</span> @enderror
        </p>

        <button type="submit">Update Student</button>
        <a href="{{ route('students.index') }}">Cancel</a>
    </form>
@endsection
```
