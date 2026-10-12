```php
@extends('layouts.app')

@section('content')
    <h1>Student Details</h1>

    <p><strong>Name:</strong> {{ $student->name }}</p>
    <p><strong>Email:</strong> {{ $student->email }}</p>
    <p><strong>Phone:</strong> {{ $student->phone }}</p>
    <p><strong>Address:</strong> {{ $student->address ?? 'N/A' }}</p>
    <p><strong>Date of Birth:</strong> {{ $student->date_of_birth ?? 'N/A' }}</p>

    <a href="{{ route('students.index') }}">Back to Students</a>
    <a href="{{ route('students.edit', $student->id) }}">Edit Student</a>
@endsection
```
