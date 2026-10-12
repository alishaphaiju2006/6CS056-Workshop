
@extends('layouts.app')

@section('title', 'Add Student')

@section('content')
    <h1>Add Student</h1>

    @if ($errors->any())
        <ul class="error">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('students.store') }}" method="POST">
        @csrf

        <label>Name</label>
        <input type="text" name="name" value="{{ old('name') }}" required>

        <label>Email</label>
        <input type="email" name="email" value="{{ old('email') }}" required>

        <label>Phone</label>
        <input type="text" name="phone" value="{{ old('phone') }}" required>

        <label>Address</label>
        <textarea name="address">{{ old('address') }}</textarea>

        <label>Date of Birth</label>
        <input type="date" name="date_of_birth" value="{{ old('date_of_birth') }}">

        <button type="submit">Save Student</button>
        <a href="{{ route('students.index') }}">Cancel</a>
    </form>
@endsection
