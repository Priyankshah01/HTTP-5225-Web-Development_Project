@extends('layouts.app')

@section('content')
<div class="form-wrapper">
    <h2>Edit Student Details</h2>

    @if ($errors->any())
        <div class="error-box">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('students.update', $student->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Full Name:</label>
        <input type="text" name="full_name" value="{{ old('full_name', $student->full_name) }}" required>

        <label>Email:</label>
        <input type="email" name="email" value="{{ old('email', $student->email) }}" required>

        <label>Program:</label>
        <input type="text" name="program" value="{{ old('program', $student->program) }}" required>

        <button type="submit">Update</button>
    </form>
</div>
@endsection
